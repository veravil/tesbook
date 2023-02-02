How To Install this Project
Persiapan
1. Memiliki CLI/Command Line Interface berupa Command Prompt (CMD) atau Power Shell atau Git Bash (selanjutnya kita sebut terminal).
2. Memiliki Web Server (misal XAMPP) dengan PHP minimal versi 7.1.3.
3. Composer telah ter-install, cek dengan perintah composer -V melalui terminal.
4. Memiliki koneksi internet (untuk proses installasi).

Langkah-Langkah

1. Download Source Code
2. Extract file zip (source code) ke dalam direktori htdocs pada XAMPP, misal htdocs/tesbook.
3. Melalui terminal cmd, pindah ke direktori xampp/htdocs/tesbook.
4. (Sesuai petunjuk installasi) Pada terminal, berikan perintah composer install. Ini yang perlu koneksi internet.
5. Composer akan menginstall dependency paket dari source code tersebut hingga selesai.
6. Jalankan perintah php artisan, untuk menguji apakah perintah artisan Laravel bekerja.
7. Buat database baru (kosong) pada mysql (via phpmyadmin) dengan nama tesbook.
8. Duplikat file .env.example, lalu rename menjadi .env.
9. Kembali ke terminal, php artisan key:generate.
10. Setting koneksi database di file .env (DB_DATABASE, DB_USERNAME, DB_PASSWORD).
DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=tesbook
DB_USERNAME=root
DB_PASSWORD=

11. Jika hanya ingin membuat tabel, jalankan perintah php artisan migrate. Cek di phpmyadmin, seharusnya tabel sudah muncul.
12.Setelah selesai, Jalankan perintah php artisan serve maka dapat diakses dengan http://localhost:8000/
