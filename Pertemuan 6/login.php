<?php
// Tag pembuka PHP

// --- 1. DEFINISI KREDENSIAL YANG BENAR ---
$username_valid = "admin"; // Username yang ditentukan sebagai acuan benar
$password_valid = "123456"; // Password yang ditentukan sebagai acuan benar

$message = ""; // Variabel untuk menyimpan pesan hasil login (Berhasil/Gagal/Error)
$success = false; // Variabel boolean untuk status login (true jika berhasil)

// --- 2. CEK METODE REQUEST ---
// $_SERVER["REQUEST_METHOD"] adalah variabel superglobal yang berisi metode yang digunakan untuk mengakses halaman.
// Memastikan script hanya dijalankan jika formulir dikirim via POST.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // --- 3. AMBIL DAN SANITASI INPUT DARI FORM ---
    // $_POST adalah array asosiatif yang berisi data dari form HTML
    // 'username' dan 'password' adalah 'name' yang ada di tag <input> HTML.
    // ?? '': Mengantisipasi jika variabel tidak ada (NULL), diisi string kosong.
    // trim(): Menghilangkan spasi putih di awal dan akhir input.
    // htmlspecialchars(): Mengubah karakter khusus menjadi entitas HTML untuk mencegah serangan XSS (Sanitasi dasar).
    $input_username = htmlspecialchars(trim($_POST['username'] ?? ''));
    $input_password = htmlspecialchars(trim($_POST['password'] ?? ''));

    // --- 4. VALIDASI SISI SERVER ---

    // 4.1. Cek jika input benar-benar kosong
    if (empty($input_username) || empty($input_password)) {
        $message = "Error: Username dan Password harus diisi.";
        $success = false;
    } 
    // 4.2. Cek kecocokan kredensial (Validasi Inti)
    // ===: Operator perbandingan identik (nilai dan tipe data harus sama)
    else if ($input_username === $username_valid && $input_password === $password_valid) {
        $message = "Login Berhasil! Selamat datang, " . $username_valid . ".";
        $success = true;
        // Di sini Anda biasanya akan memulai sesi PHP: session_start(); $_SESSION['logged_in'] = true;
    } 
    // 4.3. Kredensial tidak cocok (Username atau Password salah)
    else {
        $message = "Login Gagal! Username atau Password salah.";
        $success = false;
    }

} else {
    // Jika login.php diakses langsung melalui URL (bukan dari submit form)
    $message = "Akses tidak sah. Silakan gunakan formulir login.";
    $success = false;
}

// Setelah pemrosesan PHP, kode HTML di bawah ini akan ditampilkan ke browser.
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Login</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; text-align: center; }
        .result-container { background-color: #fff; padding: 30px; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); width: 400px; }
        /* Gaya hijau untuk sukses, merah untuk error */
        .success { color: #155724; border: 1px solid #c3e6cb; background-color: #d4edda; padding: 15px; border-radius: 5px; }
        .error { color: #721c24; border: 1px solid #f5c6cb; background-color: #f8d7da; padding: 15px; border-radius: 5px; }
        a { display: block; margin-top: 20px; color: #337ab7; text-decoration: none; }
    </style>
</head>
<body>
    <div class="result-container">
        <p class="<?php echo $success ? 'success' : 'error'; ?>">
            **<?php echo $message; ?>**
        </p>
        <a href="login.html">Kembali ke Halaman Login</a>
    </div>
</body>
</html>