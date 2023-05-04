const regbtn = document.getElementById('regbtn')
const logininput = document.getElementById('login');
const pwdinput = document.getElementById('pass');

regbtn.addEventListener('click', function (event) {
	if(get_cookie('error') == 'errorlog'){
		logininput.setCustomValidity("Пользователя с такм логином не существует");
	}else if(get_cookie('error') == 'errorpass'){
		pwdinput.setCustomValidity("Неправильно введен пароль");
	}
	else{
		if (logininput.validity.valueMissing) 
			logininput.setCustomValidity("Заполните это поле");
		else if(logininput.validity.patternMismatch)
			logininput.setCustomValidity("Разрешены только латинские буквы");
		else if (logininput.validity.tooShort)
			logininput.setCustomValidity("Логин должен содержать не менее трёх символов");
		else
			logininput.setCustomValidity("");
	}
});

function get_cookie (cookie_name){
    var results = document.cookie.match ( '(^|;) ?' + cookie_name + '=([^;]*)(;|$)' );
    if (results)
        return results[2];
    else
        return null;
}