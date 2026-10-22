# CRUD Mahasiswa - Laravel + Bootstrap

Paket ini berisi file sumber untuk ditambahkan ke proyek Laravel baru. Folder `vendor` dan instalasi Laravel inti tidak disertakan; buat proyek Laravel terlebih dahulu.

## 1. Persiapan
- Install PHP, Composer, dan MySQL (misalnya melalui XAMPP).
- Buka VS Code, lalu buka terminal.
- Buat proyek Laravel:

```bash
composer create-project laravel/laravel crud-mahasiswa
cd crud-mahasiswa
```

- Salin file dari paket ini ke lokasi yang sama di proyek `crud-mahasiswa`, dengan mempertahankan struktur folder.

## 2. Buat database
Buat database MySQL bernama `crud_mahasiswa` melalui phpMyAdmin, lalu sesuaikan `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_mahasiswa
DB_USERNAME=root
DB_PASSWORD=
```

## 3. Jalankan migrasi dan server

```bash
php artisan migrate
php artisan serve
```

Buka URL yang ditampilkan terminal, biasanya `http://127.0.0.1:8000`.

## 4. File yang disediakan
- `app/Models/Mahasiswa.php`
- `app/Http/Controllers/MahasiswaController.php`
- `database/migrations/2026_10_22_000000_create_mahasiswas_table.php`
- `routes/web.php`
- `resources/views/layouts/app.blade.php`
- `resources/views/mahasiswa/index.blade.php`
- `resources/views/mahasiswa/create.blade.php`
- `resources/views/mahasiswa/edit.blade.php`

## 5. GitHub
Buat repository GitHub, lalu dari folder proyek jalankan:

```bash
git init
git add .
git commit -m "Membuat aplikasi CRUD mahasiswa Laravel Bootstrap"
git branch -M main
git remote add origin https://github.com/USERNAME/NAMA-REPOSITORY.git
git push -u origin main
```

Ganti URL remote dengan URL repository milik sendiri. Jangan unggah file `.env` ke GitHub.

## Catatan
Paket ini adalah starter code untuk proyek Laravel, bukan seluruh instalasi Laravel. Pastikan versi PHP dan Laravel sesuai dengan lingkungan yang digunakan.
