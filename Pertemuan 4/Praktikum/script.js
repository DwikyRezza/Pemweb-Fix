// --- contoh variabel ---
function contohVariabel(){
    let nama = "Brucewaynee";
    const umur = 26;
    var aktif = true;
    alert(`Nama : ${nama}\nUmur : ${umur}\nAktif : ${aktif}`);
    console.log(nama, umur, aktif);
}

// --- percabangan ---
function CekNilai(){
    // Menggunakan parseInt agar input prompt diperlakukan sebagai angka
    const Nilai = parseInt(prompt("Masukkin Nilai Kamu :")); 
    if(Nilai > 75) alert("Alhamdulillah Lulus");
    else alert("bro is cooked");
}

// --- array ---
function tampilArray(){
    const buah = ["Apel", "Pisang", "Mangga", "Jeruk"];
    alert("Daftar Buah: \n" + buah.join(", "));
    console.log(buah);
}

// --- fungsi penjumlahan ---
function hitungTambah(){
    const a = parseInt(prompt("Masukkan Nilai Pertama = "));
    const b = parseInt(prompt("Masukkan Nilai Kedua = "));
    const hasil = a + b;
    // const hasil = a - b;
    // const hasil = a * b;
    // Perbaikan: sintaks template literal diperbaiki
    alert(`hasilnya = ${hasil}`); 
}

// --- Animasi Sederhana (Menggunakan DOM Manipulation) ---
const box = document.getElementById("kotak");
const btn = document.getElementById("gerak");

btn.addEventListener("click", () => {
    // toggle translate dan warna
    box.classList.toggle("translate-x-40");
    box.classList.toggle("bg-pink-500");
});

// --- Counter App (Menggunakan DOM Manipulation) ---
let count = 0;
const tampil = document.getElementById("count");
document.getElementById("plus").onclick = () => tampil.innerText = ++count;
document.getElementById("minus").onclick = () => tampil.innerText = --count;