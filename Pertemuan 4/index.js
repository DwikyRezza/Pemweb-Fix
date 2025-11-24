function contohVariabel(){
    let nama = "JOKONTOT"
    const umur = 100;
    var aktif = true;
    alert(`nama: ${nama}, \numur: ${umur}, \naktif: ${aktif}`);
    console.log(nama, umur, aktif);
}

function cekNilai(){
    const nilai = prompt("Masukkan nilai kamu : ")
    if(nilai > 75) {
        alert("Kamu lulus");
    }else{
        alert("Kamu gagal");
    }
    console.log(`nilai : ${nilai}`);
}

function tampilanArray(){
    const buah = ["Apel", "jeruk", "mangga","pisanh"]
    alert("daftar buah\n" + buah.join("\n"));
    console.log(buah);
}

function penjumlahan(){
    const a = parseInt(prompt("Masukkan nilai pertama: "))
    const b = parseInt(prompt("Masukkan nilai kedua\t: "))
    const hasil = a+b

    alert(`hasilnya adalah ${hasil}`)
    console.log(`${a} + ${b} = ${hasil}`)
}


    // Logika Animasi Sederhana
const box = document.getElementById("kotak")
const btn = document.getElementById("gerak")

btn.addEventListener("click", () => {
    box.classList.toggle("translate-x-40")
    box.classList.toggle("bg-pink-500")
});


// Logika Counter App
let count = 0
const tampil = document.getElementById("count")
tampil.innerText = count; // Tampilkan nilai awal (0)

document.getElementById("plus").onclick = () => tampil.innerText = ++count;
document.getElementById("minus").onclick = () => tampil.innerText = --count;