# 🚀 Praktikum Pemrograman Berbasis Web A
## Tugas 3 — Instalasi, Konfigurasi, dan Halaman Pertama Laravel

<p align="center">
  <img src="https://img.shields.io/badge/Praktikum-PBW%20A-blue?style=for-the-badge" alt="Praktikum PBW A">
  <img src="https://img.shields.io/badge/Laravel-Framework-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-Backend-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">
</p>

---

## 👨‍🎓 Identitas Mahasiswa

| Informasi | Keterangan |
|---|---|
| **Nama** | Muhammad Tegar Arianto |
| **NPM** | 4524210070 |
| **Mata Kuliah** | Praktikum Pemrograman Berbasis Web A |
| **Tugas** | Tugas 3 |
| **Judul Praktikum** | Instalasi, Konfigurasi, dan Halaman Pertama Laravel |

---

## 📌 Deskripsi Praktikum

Praktikum ini membahas proses instalasi dan konfigurasi framework Laravel serta pembuatan halaman web pertama menggunakan Laravel.

Melalui praktikum ini, mahasiswa mempelajari dasar penggunaan framework PHP untuk membangun aplikasi web dengan struktur kode yang lebih terorganisasi.

## 🎯 Tujuan Praktikum

- Memahami konsep dasar framework Laravel.
- Melakukan instalasi Laravel pada lingkungan pengembangan lokal.
- Memahami struktur direktori dan file pada project Laravel.
- Mengenal konfigurasi awal aplikasi Laravel.
- Membuat dan menjalankan halaman pertama Laravel melalui browser.

## 🛠️ Teknologi yang Digunakan

<p>
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=flat-square&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=flat-square&logo=php&logoColor=white" alt="PHP">
  <img src="https://img.shields.io/badge/Composer-885630?style=flat-square&logo=composer&logoColor=white" alt="Composer">
  <img src="https://img.shields.io/badge/Visual%20Studio%20Code-007ACC?style=flat-square&logo=visualstudiocode&logoColor=white" alt="Visual Studio Code">
</p>

- **Laravel** — Framework PHP untuk pengembangan aplikasi web.
- **PHP** — Bahasa pemrograman utama Laravel.
- **Composer** — Dependency manager untuk PHP.
- **Visual Studio Code** — Editor kode untuk mengembangkan aplikasi.

## ⚙️ Tahapan Praktikum

### 1. Instalasi Laravel

Melakukan instalasi Laravel menggunakan Composer untuk membuat project aplikasi web baru.

### 2. Konfigurasi Project

Memeriksa konfigurasi awal aplikasi dan memahami fungsi file serta folder utama pada project Laravel.

### 3. Menjalankan Server Lokal

Menjalankan aplikasi Laravel menggunakan perintah Artisan:

```bash
php artisan serve
```

### 4. Membuat Halaman Pertama

Mengenal routing Laravel melalui file `routes/web.php` untuk menentukan halaman yang ditampilkan pada browser.

Contoh route sederhana:

```php
Route::get('/', function () {
    return view('welcome');
});
```

Route tersebut menampilkan halaman `welcome` ketika pengguna membuka halaman utama aplikasi.

## ▶️ Cara Menjalankan Project

1. Pastikan PHP dan Composer sudah terinstal.
2. Buka terminal pada direktori project Laravel.
3. Instal dependency jika diperlukan:

   ```bash
   composer install
   ```

4. Jalankan server Laravel:

   ```bash
   php artisan serve
   ```

5. Buka browser dan akses:

   ```text
   http://127.0.0.1:8000
   ```


## 📖 Kesimpulan

Melalui praktikum ini, mahasiswa mempelajari instalasi dan konfigurasi awal Laravel, memahami struktur project, serta mengenal routing untuk menampilkan halaman pertama aplikasi web.

Praktikum ini menjadi dasar untuk mempelajari pengembangan aplikasi web menggunakan framework Laravel pada pertemuan berikutnya.

---

<p align="center">
  <b>✨ Muhammad Tegar Arianto ✨</b><br>
  <sub>4524210070 · Praktikum Pemrograman Berbasis Web A</sub><br>
  <sub>Tugas 3 — Instalasi, Konfigurasi, dan Halaman Pertama Laravel</sub>
</p>
