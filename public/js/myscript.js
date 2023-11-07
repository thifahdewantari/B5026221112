function tambah() 
{
    var bil1 = document.getElementById("bil1");
    var bil2 = document.getElementById("bil2");
    var Hasil = document.getElementById("Hasil");

    Hasil.innerHTML = parseInt(bil1.value) + parseInt(bil2.value); //convert string ke integer
}

function kali() 
{
    var bil1 = document.getElementById("bil1");
    var bil2 = document.getElementById("bil2");
    var Hasil = document.getElementById("Hasil");

    Hasil.innerHTML = bil1.value * bil2.value; //ini gaperlu parseInt karena string gabisa dikali, jd dia otomatis ngebaca sebagai integer
}