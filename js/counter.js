const description = document.getElementById("description");
const symb = document.getElementById("symb");
description.addEventListener('keyup', function () { symb.innerHTML = description.value.length + '/1000'; });