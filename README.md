# Project Requirements Document (PRD): Hidamari Café Website

Ini adalah **Project Requirements Document (PRD)** untuk pengembangan website **Hidamari Café**. Dokumen ini berfungsi sebagai panduan tunggal agar visi desain dan fungsi teknis berjalan selaras.

---

**Versi:** 1.0

**Status:** Draft / Perencanaan

**Tech Stack:** Laravel (Backend), React + Inertia.js (Frontend), Tailwind CSS.

---

## 1. Ringkasan Eksekutif

Hidamari Café adalah sebuah ruang yang mengusung konsep *Slow Living* dan estetika Jepang. Website ini bertujuan untuk mentransformasikan suasana fisik cafe (hangat, tenang, cahaya matahari yang lembut) ke dalam pengalaman digital, sekaligus menyediakan fungsi praktis seperti katalog menu dan reservasi tempat.

---

## 2. Tujuan Proyek

* **Membangun Brand Awareness:** Memperkenalkan konsep "Hidamari" (tempat yang bermandikan cahaya matahari) kepada audiens luas.
* **Katalog Digital:** Menyediakan menu interaktif yang menarik secara visual.
* **Efisiensi Operasional:** Mengotomatisasi sistem reservasi meja (khususnya area Tatami).
* **Customer Engagement:** Melalui fitur Library dan Journal untuk membangun komunitas pecinta buku dan kopi.

---

## 3. Profil Pengguna (User Persona)

1. **Pengunjung (Guest):** Orang yang mencari tempat tenang untuk bekerja atau bersantai, menyukai estetika minimalis, dan pecinta budaya Jepang/kopi.
2. **Admin (Owner/Staff):** Pengelola cafe yang perlu memperbarui stok menu, mengelola reservasi harian, dan memperbarui konten blog.

---

## 4. Fitur & Persyaratan Fungsional

### 4.1. Sisi Pengguna (Frontend - React)

| Fitur | Deskripsi |
| --- | --- |
| **Hero Experience** | Animasi halus menggunakan Framer Motion yang menggambarkan cahaya masuk jendela. |
| **Katalog Menu** | Filter kategori (Coffee, Matcha, Tea, Food) tanpa reload halaman (Inertia). |
| **Virtual Library** | Daftar buku yang tersedia dengan fitur *search* dan detail singkat buku. |
| **Sistem Reservasi** | Form pemilihan tanggal, waktu, dan jenis area (Tatami/Table) dengan validasi *real-time*. |
| **Journal/Blog** | Halaman bacaan dengan tipografi yang nyaman untuk membaca lama. |
| **Audio Ambient** | Toggle opsional untuk memutar musik latar tenang (Lo-fi/Piano). |

### 4.2. Sisi Pengelola (Backend - Laravel Admin)

| Fitur | Deskripsi |
| --- | --- |
| **Dashboard** | Ringkasan reservasi hari ini dan total menu aktif. |
| **Menu Management** | CRUD (Create, Read, Update, Delete) menu, harga, dan foto. |
| **Reservation Management** | List reservasi masuk, fitur konfirmasi, dan pembatalan otomatis. |
| **Library Management** | Inventaris buku yang ditampilkan di website. |

---

## 5. Persyaratan Desain (UI/UX)

* **Mood:** Nostalgic, Airy, Minimalist, Warm.
* **Typography:** Kombinasi Serif (untuk Judul agar elegan) dan Sans-Serif (untuk keterbacaan menu).
* **Visual Element:**
* Penggunaan *whitespace* yang luas (Ma-concept).
* Efek transisi halaman yang lambat (0.8s - 1s) untuk kesan tenang.
* Foto produk dengan pencahayaan alami (*natural lighting*).

---

## 6. Persyaratan Non-Fungsional

* **Responsivitas:** Website harus optimal di perangkat mobile (karena pelanggan sering mengecek menu via HP).
* **Performa:** Kecepatan muat halaman di bawah 2 detik (Optimasi gambar dan Vite).
* **SEO:** Metadata yang dioptimasi untuk pencarian "Cafe Jepang", "Matcha Cafe", dll.
* **Keamanan:** Proteksi CSRF (bawaan Laravel) dan sanitasi input pada form reservasi.

---

## 7. Skema Data Utama (Key Entities)

* **Users:** (Admin credentials).
* **Categories:** (Coffee, Matcha, Tea, Parfait, Bakery).
* **Products:** (Nama, Deskripsi, Harga, Gambar, Status).
* **Reservations:** (Nama, Kontak, Jadwal, Area ID, Status).
* **Tables:** (Nama Meja, Tipe: Tatami/Regular, Kapasitas).
* **Books:** (Judul, Penulis, Cover, Sinopsis).

---

## 8. Milestone & Timeline (Estimasi)

1. **Minggu 1:** Setup Project (Laravel, React, Inertia) & Database Migration.
2. **Minggu 2:** Pengembangan Backend API & Admin Dashboard.
3. **Minggu 3:** Pengembangan Frontend UI (Landing Page, Menu, Library).
4. **Minggu 4:** Integrasi Sistem Reservasi & Animasi Framer Motion.
5. **Minggu 5:** Testing, Bug Fixing, dan Optimasi Performa.

---

**Langkah selanjutnya:**
Apakah Anda ingin saya mulai membuatkan **boilerplate kode awal** untuk `HeroSection.jsx` menggunakan **React + Tailwind + Framer Motion** agar kita bisa melihat visualisasi "cahaya jendela" tersebut?

# Hidamari Coffee & Matcha Design System

## Colors

| Color | Hex |
| --- | --- |
| Color1 | #9E7E56 |
| Color2 | #5D6D37 |
| Color3 | #2D2926 |
| Background Light | #F9F7F2 |
| Background Accent | #FDF2D0 |
| Background Dark | #2D2926 |
| Text Light | #2D2926 |
| Text Dark | #F9F7F2 |
| Text Accent | #9E7E56 |
