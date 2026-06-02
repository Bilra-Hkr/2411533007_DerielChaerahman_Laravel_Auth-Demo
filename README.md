# Tugas Pemrograman Web - Laravel Authentication & Breeze

**Nama:** Deriel Chaerahman  
**Program Studi:** Informatika  
**Instansi:** Universitas Andalas

Repositori pengerjaan tugas implementasi autentikasi project Laravel 12 menggunakna Laravel Breeze (Auth), dengan beberapa kustomisasi tambahan sesuai modul bahan ajar.

## Fitur yang Telah Dikerjakan

- **Latihan A & B:** Instalasi Breeze dan Eksplorasi Route/Controller.
- **Tugas 1:** Penambahan field `no_hp` pada sistem registrasi dan tabel `users` (lengkap dengan validasi khusus angka dan minimal 10 digit).
- **Tugas 2:** Penambahan field `no_hp` pada halaman _Edit Profile_.
- **Tugas 3 (Bonus):** Penambahan sistem otorisasi Role (User & Admin), pembuatan `AdminMiddleware`, dan halaman khusus `/admin` yang menampilkan tabel daftar pengguna.

## Konfigurasi env. local host
Pada project ini saya menjalankannya secara localhost menggunakan XAMPP dengan setingan berikut :
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=auth-demo
    DB_USERNAME=root
    DB_PASSWORD=
    ```

## Panduan Instalasi & Pengujian Project

Untuk mengunduh dan menjalankan proyek ini, silakan ikuti langkah-langkah berikut:

1. **Clone repositori**
    ```bash
    git clone <URL_GITHUB_REPO_INI>
    cd auth-demo
    ```
2. **Install dependensi PHP & Node.js**
   ```bash
    composer install
    npm install
    ```
3.  **Setup Environment**
   Duplikat file .env.example menjadi .env, lalu atur konfigurasi database-nya.
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
4. **Run Migrasi dan Seeder**
   Generate akun dummy admin untuk testing dan akses halaman /admin.
   ```bash
    php artisan migrate --seed
    ```
5. **Run Server Local (Jalankan di 2 terminal berbeda)**
   ```bash
    php artisan serve
    npm run dev
    ```
6. **Halaman Web**
Perhatikan pada terminal yang menjalankan command `php artisan serve`, silahkan klik link "http://127.0.0.1:8000" atau ketik di browser link tersebut untuk memunculkan halaman web.
7. **Daftar Halaman Web**
http://127.0.0.1:8000/x : ganti "x" dengan "login", "register", "dashboard", "profile", "admin".
 

   
