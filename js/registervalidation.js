const regform = document.getElementById('regform');
const regbtn = document.getElementById('regbtn');
const fioinput = document.getElementById('fio');
const logininput = document.getElementById('login');
const pwdinput = document.getElementById('pass');
const pwdcheck = document.getElementById('ppass');
let xhr = new XMLHttpRequest();
regform.addEventListener('submit', function (event) {
	event.preventDefault();
	if (fioinput.validity.valueMissing)
		fioinput.setCustomValidity("Заполинте это поле"); 
	else if(fioinput.validity.patternMismatch)
		fioinput.setCustomValidity("Введите фамилию, имя и отчество с заглавной буквы через пробел");
	else
		fioinput.setCustomValidity("");
	if (pwdinput.value != pwdcheck.value)
		pwdinput.setCustomValidity("Пароли не совпадают");
	else
		pwdinput.setCustomValidity("");
	xhr = new XMLHttpRequest();
	let url = "checklogin.php?login=" + encodeURIComponent(logininput.value);
	xhr.open('GET', url, true);
	xhr.onreadystatechange = function() {
		if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
			let response = JSON.parse(xhr.responseText);
			if(response.loginexists) {
				logininput.setCustomValidity("Логин уже занят");
			}
			else if (logininput.validity.valueMissing) 
				logininput.validity.setCustomValidity("Заполните это поле");
			else if(logininput.validity.patternMismatch)
				logininput.setCustomValidity("Разрешены только латинские буквы");
			else if (logininput.validity.tooShort)
				logininput.setCustomValidity("Логин должен содержать не менее трёх символов");
			else {
				logininput.setCustomValidity("");
				regform.submit();
			}
			regform.reportValidity();
		}
	};
	xhr.send();
});
regbtn.addEventListener('click', function (event) { 
	if (xhr != undefined) {
		let url = "checklogin.php?login=" + encodeURIComponent(logininput.value);
		xhr.open('GET', url, true);
		xhr.send();
	}
});

fioinput.addEventListener('change', function(event) {event.preventDefault();});


