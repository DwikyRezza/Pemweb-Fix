<?php
echo "Hello, World!";

    $nama = "John Doe"; 
    $umur = 30;
    $nim = 123013;

    echo "Nama: " . $nama . "<br>";
    echo "Umur: " . $umur . "<br>";
    echo "NIM: " . $nim . "<br>";
?>

<?php
    define("NAMA", "Ahmad");
    define("UMUR", "20");
    define("NIM", "12309");
    echo "<br>"."Nama : " . NAMA . "<br>";
    echo "Umur : " . UMUR . "<br>";
    echo "NIM : " . NIM . "<br>";
?>

<!-- Konstanta -->
 <h2>
    Ini materi Konstanta
 </h2>
 <pre>
    <?php
        // Mendefinisikan konstanta
        define("UNIVERSITAS", "TEL-U");
        define("KOTA", "Surabaya");
        // Menggunakan konstanta
        echo "Universitas: " . UNIVERSITAS . "<br>";
        echo "Kota: " . KOTA . "<br>";
    ?>
 </pre>

<!-- OPERATOR -->
 <H2>
    Ini materi Operator
 </H2>
 <pre>
    <?php
    // Menggunakan operator aritmatika
    $a = 10;
    $b = 5;
    $hasil = $a + $b;
    echo "Hasil Penjumlahan : ".$a. "+".$b. " = ".$hasil ."<br>";
    echo "Hasil Pengurangan : ".$a. "-".$b. " = ".($a - $b) ."<br>";
    echo "Hasil Perkalian : ".$a. "*".$b. " = ".($a * $b) ."<br>";
    echo "Hasil Pembagian : ".$a. "/".$b. " = ".($a / $b) ."<br>";
    echo "Hasil Modulus : ".$a. "%".$b. " = ".($a % $b) ."<br>";
    ?>
 </pre>

 <!-- KONDISI -->
  <H2>
    Ini materi Kondisi
  </H2>
  <pre>
    <?php 
        $nilai = 85;
        if($nilai >= 90){
            echo "Grade A";
        } elseif($nilai >= 80){
            echo "Grade B";
        } elseif($nilai >= 70){
            echo "Grade C";
        } elseif($nilai >= 60){
            echo "Grade D";
        } else {
            echo "Grade E";
        }

        $grade = "B";
        switch ($grade){
            case "A":
                echo "<br>"."Nilai Anda Sangat Baik";
                break;
            case "B":
                echo "<br><br>Nilai Anda Baik";
                break;
            case "C":
                echo "<br>"."Nilai Anda Cukup";
                break;
            case "D":
                echo "<br>"."Nilai Anda Kurang";
                break;
            default:
                echo "<br>"."Nilai Anda Sangat Kurang";
                break;
        }
    ?>
  </pre>

  <!-- PERULANGAN -->
  <H2>
    Ini materi Perulangan
  </H2>
  
  <Pre>
    <?php 
        for($i = 1; $i <= 5; $i++){
            echo "Perulangan ke-".$i."<br>";
        }

        while($i <=10){
            echo "\nPerulangan while ke-".$i;
            $i++;
        }
    
        $warna = ["Merah", "Biru", "Hijau"];
        foreach($warna as $w){
            echo "\n".$w;
        }
    ?>
  </Pre>


  <!-- Function -->
   <h2>
    Ini materi Function
   </h2>
   <pre>
    <?php 
        function alasSegitiga($alas, $tinggi){
            return 0.5 *$alas * $tinggi;
        }
        echo "Luas Segitiga dengan alas 10 dan tinggi 5 adalah: ". alasSegitiga(10, 5);
    ?>
   </pre>

<!-- Array -->
   <h2>
    Ini materi Array
   </h2>
   <pre>
    <?php
        $buah = array("Mangga", "Pisang", "Jeruk");
        echo "Buah pertama: " . $buah[0] . "\n";
        echo "Buah kedua: " . $buah[1] . "\n";
        echo "Buah ketiga: " . $buah[2] . "\n";

        $dataSiswa = array(
            "nama" => "Budi",
            "umur" => 18,
            "kelas" => "12 IPA"
        );
        echo "\nNama Siswa: " . $dataSiswa["nama"] . "\n";
        echo "Umur Siswa: " . $dataSiswa["umur"] . "\n";
        echo "Kelas Siswa: " . $dataSiswa["kelas"] . "\n";
    ?>
   </pre>
   