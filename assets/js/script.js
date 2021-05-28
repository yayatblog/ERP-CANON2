// console.log('ok');
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// Di tes
// tombolCari.addEventListener('mouseover', function () {
//     alert('berhasil');
// })
keyword.addEventListener('keypress', function () {
    // Buat Object Ajax
    var xhr = new XMLHttpRequest();
    // Cek Kesiapan Ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // console.log('ajax ok');
            container.innerHTML = xhr.responseText;
        }
    }
    // Ekseskusi Ajax
    xhr.open('GET', 'assets/ajax/daftar.php?keyword=' + keyword.value, true);
    // xhr.open('GET', 'application/controller/supplier/index.php?keyword=' + keyword.value, true);
    // xhr.open('GET', 'application/controllers/Daftar.php?keyword=' + keyword.value, true);
    xhr.send();

});
