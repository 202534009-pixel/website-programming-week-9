# Dokumentasi Penggunaan AI — Tugas 9

## 1. Alat AI yang Digunakan

ChatGPT digunakan sebagai alat bantu dalam memahami materi HTTP, PHP Foundations, dan Form Handling.

## 2. Prompt yang Digunakan

Beberapa instruksi yang diberikan kepada AI:
- Membantu membuat fitur pencarian menggunakan metode GET.
- Membantu membuat formulir kontak menggunakan metode POST.
- Membantu membuat validasi data di sisi server.
- Membantu memperbaiki kesalahan pada kode PHP.
- Membantu menjelaskan HTTP 405, 422, dan 303.

## 3. Saran AI yang Digunakan dan Tidak Digunakan

Saran yang digunakan:
- Menggunakan GET untuk pencarian mahasiswa.
- Menggunakan POST untuk formulir kontak.
- Menggunakan `htmlspecialchars()` untuk mengamankan output.
- Menggunakan validasi email dengan `filter_var()`.
- Menggunakan HTTP 405, 422, dan redirect 303.

Saran yang tidak digunakan:
- AI sempat menyarankan penggunaan index.php dan style.css. Namun, saya memilih tidak menggunakannya karena ingin menggunakan struktur file yang lebih sederhana dan sesuai dengan kebutuhan tugas.
## 4. Perubahan yang Dilakukan

Kode disesuaikan dengan kebutuhan Tugas 9. Beberapa perubahan meliputi:
- Membuat pencarian data mahasiswa.
- Membuat formulir kontak.
- Menambahkan validasi data.
- Memperbaiki kesalahan pada process.php.
- Menghapus `declare(strict_types=1)` agar tidak terjadi error pada lingkungan yang digunakan.

## 5. Hasil Pengujian

| No. | Pengujian | Hasil yang Diharapkan |
|---|---|---|
| 1 | Mengirim data valid | Berhasil diarahkan ke `success.php` dengan HTTP 303 |
| 2 | Mengirim formulir kosong | HTTP 422 dan pesan kesalahan |
| 3 | Mengirim email tidak valid | HTTP 422 dan pesan format email tidak valid |
| 4 | Memasukkan `<script>alert(1)</script>` pada pencarian | JavaScript tidak dijalankan |
| 5 | Mengakses `process.php` menggunakan GET | HTTP 405 Method Not Allowed |

Catatan: Hasil aktual setiap pengujian dicatat setelah pengujian dilakukan.

## 6. Pemahaman yang Diperoleh

Dari pengerjaan tugas ini, saya memahami perbedaan metode GET dan POST, proses validasi data di sisi server, penggunaan HTTP status code, serta pentingnya mengamankan output menggunakan `htmlspecialchars()`.