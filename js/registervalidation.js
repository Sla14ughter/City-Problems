const regbtn = document.getElementById('regbtn')
const fioinput = document.getElementById('fio');
const logininput = document.getElementById('login');
const pwdinput = document.getElementById('pass');
const pwdcheck = document.getElementById('ppass');
regbtn.addEventListener('click', function (event) {
	if(fioinput.validity.patternMismatch)
		fioinput.setCustomValidity("Введите фамилию, имя и отчество с заглавной буквы через пробел");
	else
		fioinput.setCustomValidity("");
	if(logininput.validity.patternMismatch)
		logininput.setCustomValidity("Разрешены только латинские буквы");
	else if (logininput.validity.tooShort)
		logininput.setCustomValidity("Логин должен содержать не менее трёх символов");
	else
		logininput.setCustomValidity("");
	if (pwdinput.value != pwdcheck.value)
		pwdinput.setCustomValidity("Пароли не совпадают");
	else
		pwdinput.setCustomValidity("");
});