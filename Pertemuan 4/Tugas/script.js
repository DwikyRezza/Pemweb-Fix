function validateForm() {
            // Ambil nilai input
            let nama = document.getElementById("nama").value.trim();
            let email = document.getElementById("email").value.trim();
            let password = document.getElementById("password").value.trim();

            // Ambil elemen pesan error
            let namaError = document.getElementById("namaError");
            let emailError = document.getElementById("emailError");
            let passwordError = document.getElementById("passwordError");

            // Hapus pesan error sebelumnya
            namaError.textContent = "";
            emailError.textContent = "";
            passwordError.textContent = "";

            let valid = true;

            // Validasi nama
            if (nama === "") {
                namaError.textContent = "Nama harus diisi.";
                valid = false;
            }

            // Validasi email
            let emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
            if (email === "") {
                emailError.textContent = "Email harus diisi.";
                valid = false;
            } else if (!email.match(emailPattern)) {
                emailError.textContent = "Format email tidak valid (contoh: nama@domain.com).";
                valid = false;
            }

            // Validasi password
            if (password === "") {
                passwordError.textContent = "Password harus diisi.";
                valid = false;
            } else if (password.length < 8) {
                passwordError.textContent = "Password minimal 8 karakter.";
                valid = false;
            }

            // Jika semua valid, tampilkan alert
            if (valid) {
                alert("Formulir berhasil dikirim!");
            }

            return valid; // Jika false, form tidak dikirim
        }