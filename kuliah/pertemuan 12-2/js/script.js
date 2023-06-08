// ambil element

const keyword = document.getElementById('keyword');
const containerMhs = document.getElementById('container-mhs');

keyword.onkeyup = function () {

    fetch('ajax/search.php?keyword=' + keyword.value)
        .then((Response) => Response.text())
        .then((text) => (containerMhs.innerHTML = text));
}