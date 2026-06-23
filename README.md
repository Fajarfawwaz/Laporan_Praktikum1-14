# Dokumentasi Praktikum Pemrograman Website

Repositori ini mendokumentasikan serangkaian tugas praktikum **Pemrograman Website** yang berfokus pada pengembangan aplikasi web menggunakan framework **CodeIgniter 4** (Backend) dan **Vue.js** (Frontend).

# IDENTITAS MAHASISWA : 
Nama : Fajar Fawwaz Atallah

Nim : 312410357

Kelas : I241D

Matkul : Pemrograman Website

# PRAKTIKUM MODUL 1 - 14

## Daftar Modul Praktikum

| Modul | Materi / Topik |
| :--- | :--- |
| **01-03** | Fondasi CI4, Controller, View, Database, & Model |
| **04-06** | Form Handling, CRUD Artikel, & View Layouts |
| **07-09** | Session Auth, Interaktivitas, & AJAX Implementasi |
| **10-12** | REST API CI4, Integrasi Vue.js, State Management |
| **13-14** | Secured SPA, Auth Token, CORS & Middleware |
| **15** | Deployment & Finalisasi Proyek |

## Penjelasan Evolusi Proyek

1. **Fase Fondasi (Modul 1-3):** Mempelajari instalasi lingkungan CI4, konsep *Controller*, *View*, serta konfigurasi *Database* dan *Model*.
2. **Fase CRUD & UX (Modul 4-6):** Implementasi manajemen data artikel dengan sistem *Form Handling* yang valid dan penggunaan *View Layouts* untuk efisiensi tampilan.
3. **Fase Interaktivitas (Modul 7-9):** Transisi dari web tradisional ke web yang responsif menggunakan AJAX agar data dapat diperbarui tanpa perlu melakukan *refresh* halaman secara penuh.
4. **Fase Web API (Modul 10-12):** Mengubah arsitektur menjadi *Decoupled* (terpisah). CI4 difungsikan sebagai penyedia data (*REST API*) dalam format JSON, sementara Vue.js menangani tampilan *Client-side*.
5. **Fase Sekuriti & Finalisasi (Modul 13-15):** Pengamanan aplikasi melalui sistem autentikasi berbasis token dan implementasi *Middleware/Filter* untuk menangani *Cross-Origin Resource Sharing* (CORS) agar komunikasi antara Frontend dan Backend tetap aman.

## Arsitektur Komunikasi Data
Aplikasi ini menggunakan komunikasi *asynchronous* antara Frontend dan Backend. Untuk memahami bagaimana browser memproses izin akses antar-port yang berbeda, lihat diagram berikut:



## Teknologi yang Digunakan
* **Backend:** PHP 8.2, CodeIgniter 4
* **Frontend:** Vue.js 3, Axios
* **Database:** MySQL
* **Tools:** XAMPP, VS Code, Postman

## Cara Menjalankan Proyek

### 1. Menjalankan Backend (CI4)
Masuk ke direktori `ci4`, kemudian jalankan server lokal:
```bash
# Gunakan perintah berikut di terminal
php spark serve --port 8080
```

Pastikan terminal backend tetap terbuka selama proses pengembangan.

2. Menjalankan Frontend
Gunakan server lokal untuk file statis di folder frontend. Pastikan konfigurasi Base URL di Axios pada file Login.js mengarah ke http://localhost:8080 untuk memastikan koneksi API berhasil.

Dibuat oleh: Fajar Fawwaz Atallah

Mata Kuliah: Pemrograman Website

