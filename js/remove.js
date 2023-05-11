const delbtn = document.getElementsByClassName('delbtn');

for (var i = 0; i < delbtn.length; i++) {
    delbtn[i].addEventListener('click', function(event) {
        var id = this.id;
        result = confirm("Вы действительно хотите удалить заявку?");
        if(result){
            xhr = new XMLHttpRequest();
	        xhr.open('GET', "remove.php?id=" + encodeURIComponent(id), true);
	        xhr.send();
            location.reload();
        }
    });
}