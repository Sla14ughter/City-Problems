const regbtn = document.getElementById('regbtn');
const logform = document.getElementById('logform');
const logininput = document.getElementById('login');
const pwdinput = document.getElementById('pass');
let xhr = new XMLHttpRequest();

logform.addEventListener('submit', function (event) {
	event.preventDefault();
	xhr = new XMLHttpRequest();
	xhr.open('GET', getURL(), true);
	xhr.onreadystatechange = function(){
		if(xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200){
			let response = JSON.parse(xhr.responseText);
			if(!response.correct){
				logininput.setCustomValidity("Неправильно введен логин или пароль.");
			} 
			else if (logininput.validity.valueMissing) 
				logininput.setCustomValidity("Заполните это поле");
			else if(logininput.validity.patternMismatch)
				logininput.setCustomValidity("Разрешены только латинские буквы");
			else if (logininput.validity.tooShort)
				logininput.setCustomValidity("Логин должен содержать не менее трёх символов");
			else
				logininput.setCustomValidity("");
			if (logform.reportValidity())
				logform.submit();
		}
	};
	xhr.send();
});
regbtn.addEventListener('click', function () { 
	if (xhr.readyState != 0) { // на случай, если форма по каким-то причинам не срабатывает regform.submit
		xhr.open('GET', getURL(), true);
		xhr.send();
	}
});
function getURL(){
	return "ajax.php?login=" + encodeURIComponent(logininput.value) + "&password="+ encodeURIComponent(pwdinput.value);
}