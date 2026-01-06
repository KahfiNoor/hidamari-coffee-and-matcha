# Hidamari Café - Project Setup & Database Schema

> **Walkthrough Version:** 1.0.0
> **Status:** ✅ Initial Setup Completed

---

## 📖 Overview

Laporan ini merangkum penyelesaian instalasi awal proyek dan implementasi skema database untuk website **Hidamari Café**. Fokus utama adalah pada struktur data untuk menu, reservasi, perpustakaan virtual, dan blog.

## 🛠 What Was Accomplished

### 1. Dependency Installation

Menginstal paket NPM yang diperlukan untuk mendukung UI/UX yang interaktif:

* **framer-motion**: Digunakan untuk animasi halus dan efek transisi "sunlight".
* **react-hot-toast**: Untuk sistem notifikasi/toast yang ringan.

```bash
npm install framer-motion react-hot-toast

```

*Result: 5 new packages added successfully.*

---

### 2. Database Migrations & Schema

Dibuat enam migrasi database utama dengan rincian sebagai berikut:

| Table | Purpose | Key Fields |
| --- | --- | --- |
| **Categories** | Organisasi kategori menu | `name`, `slug`, `display_order` |
| **Products** | Item menu dan harga | `category_id`, `price`, `status`, `image` |
| **Tables** | Area tempat duduk café | `name`, `type (tatami/regular)`, `capacity` |
| **Reservations** | Manajemen reservasi tamu | `table_id`, `customer_info`, `status`, `notes` |
| **Books** | Inventaris perpustakaan virtual | `title`, `author`, `synopsis`, `status` |
| **Posts** | Artikel blog/jurnal | `title`, `content`, `featured_image`, `published_at` |

---

### 3. Eloquent Models & Relationships

Membangun model Laravel dengan relasi yang terdefinisi:

* **Category.php**: `hasMany` ke Product.
* **Product.php**: `belongsTo` ke Category.
* **Table.php**: `hasMany` ke Reservation.
* **Reservation.php**: `belongsTo` ke Table.
* **Book.php**: Standalone model (Library).
* **Post.php**: Standalone model (Blog).

> **Note:** Semua model sudah mencakup `fillable attributes`, `type casting` untuk harga/tanggal, dan definisi relasi Eloquent.

---

### 4. Database Seeder & Execution

Menyiapkan data sampel untuk pengujian awal:

* **Categories:** Coffee, Matcha, Tea, Parfait, Bakery.
* **Products:** 11 item (Latte, Matcha Latte, Croissant, dsb).
* **Tables:** 6 meja (2 Tatami, 4 Regular).
* **Books:** 4 buku (Norwegian Wood, The Book of Tea, dsb).
* **Posts:** 2 artikel jurnal.

**Eksekusi Perintah:**

```sql
-- Membuat Database
CREATE DATABASE IF NOT EXISTS hidamari;

```

```bash
-- Menjalankan Migrasi dan Seeder
php artisan migrate:fresh --seed

```

---

## ✅ Verification Results

Verifikasi populasi data menggunakan **Laravel Tinker**:

```bash
Categories : 5
Products   : 11
Tables     : 6
Books      : 4
Posts      : 2

```

**Status:** All tables created and seeded successfully!

---

## 🚀 What's Next

Setelah fondasi database selesai, langkah selanjutnya adalah:

1. [ ] **Tailwind CSS Configuration**: Menentukan token desain estetika Jepang.
2. [ ] **Google Fonts Setup**: Kombinasi Serif & Sans-Serif.
3. [ ] **Frontend Components**: Hero section, menu catalog, dan library.
4. [ ] **Backend Controllers**: Admin panel dan API endpoints.
5. [ ] **Design & Polish**: Implementasi transisi lambat dan konsep "Ma".

---

## 📂 Files Created

<details>
<summary>Klik untuk melihat daftar file yang dibuat</summary>

### Migrations

* `create_categories_table.php`
* `create_products_table.php`
* `create_tables_table.php`
* `create_reservations_table.php`
* `create_books_table.php`
* `create_posts_table.php`

### Models

* `Category.php`, `Product.php`, `Table.php`, `Reservation.php`, `Book.php`, `Post.php`

### Seeders

* `DatabaseSeeder.php`

</details>
