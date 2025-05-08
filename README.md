Berikut dokumen lengkap untuk Sistem Reservasi Foto Studio dengan format yang diminta:

---
## <p align="center" style="margin-top: 0;">SISTEM RESERVASI FOTO STUDIO</p>

<p align="center">
  <img src="/public/LogoUnsulbar.png" width="300" alt="LogoUnsulbar" />
</p>

### <p align="center">NURLINDA AHMAD</p>

### <p align="center">D0222036</p></br>

### <p align="center">FRAMEWORK WEB BASED</p>

### <p align="center">2025</p>
---

## 👥 Role dan Hak Akses

| Role         | Akses                                                                              |
|--------------|-----------------------------------------------------------------------------------|
| *Admin*      | Mengelola akun pengguna, mengelola data reservasi, Menambahkan, mengedit, hapus paket layanan foto, Menentukan jadwal operasional studio, Melihat laporan pemesanan |
| *Photographer* | Melihat jadwal pemotretan, Mengetahui detail pelanggan dan jenis layanan yang dipesan dan mengupload hasil foto |
| *Customer*   | Membuat reservasi, melihat hasil foto |

---


## 🗃 Struktur Database

### 1. Tabel users

| Field               | Tipe Data        | Keterangan                                |
|---------------------|------------------|-------------------------------------------|
| id                  | bigint (PK)      | ID unik user                              |
| name                | varchar          | Nama lengkap                              |
| email               | varchar (unique) | Email pengguna                            |
| email_verified_at   | timestamp        | Waktu verifikasi email                    |
| password            | varchar          | Password terenkripsi                      |
| avatar              | varchar          | Foto profil (opsional)                    |
| bio                 | text             | Deskripsi profil (opsional)               |
| role                | varchar          | admin, photographer, user (default: user) |
| remember_token      | varchar          | Token untuk remember me                   |
| created_at          | timestamp        | Tanggal pembuatan akun                    |
| updated_at          | timestamp        | Tanggal update profil                     |

### 2. Tabel galleries

| Field          | Tipe Data   | Keterangan                     |
|----------------|-------------|--------------------------------|
| id             | bigint (PK) | ID gallery                     |
| title          | varchar     | Judul gallery                  |
| slug           | varchar     | URL-friendly version           |
| description    | text        | Deskripsi gallery              |
| cover_image    | varchar     | Gambar cover gallery           |
| user_id        | bigint (FK) | Pemilik gallery (relasi users) |
| is_featured    | boolean     | Status featured                |
| created_at     | timestamp   | Tanggal dibuat                 |
| updated_at     | timestamp   | Tanggal update                 |

### 3. Tabel categories

| Field        | Tipe Data   | Keterangan                     |
|--------------|-------------|--------------------------------|
| id           | bigint (PK) | ID kategori                    |
| name         | varchar     | Nama kategori                  |
| slug         | varchar     | URL-friendly version           |
| description  | text        | Deskripsi kategori             |
| created_at   | timestamp   | Tanggal dibuat                 |
| updated_at   | timestamp   | Tanggal update                 |

### 4. Tabel photos

| Field            | Tipe Data   | Keterangan                     |
|------------------|-------------|--------------------------------|
| id               | bigint (PK) | ID foto                        |
| title            | varchar     | Judul foto                     |
| description      | text        | Deskripsi foto                 |
| image_path       | varchar     | Path/lokasi file foto          |
| image_size       | varchar     | Ukuran file foto               |
| image_dimensions | varchar     | Dimensi foto (e.g. 1920x1080)  |
| gallery_id       | bigint (FK) | Gallery tempat foto (relasi)   |
| user_id          | bigint (FK) | Fotografer pengupload          |
| is_featured      | boolean     | Status featured                |
| created_at       | timestamp   | Tanggal upload                 |
| updated_at       | timestamp   | Tanggal update                 |

### 5. Tabel category_photo (Pivot)

| Field        | Tipe Data   | Keterangan                     |
|--------------|-------------|--------------------------------|
| id           | bigint (PK) | ID relasi                      |
| photo_id     | bigint (FK) | Relasi ke photos               |
| category_id  | bigint (FK) | Relasi ke categories           |
| created_at   | timestamp   | Tanggal dibuat                 |
| updated_at   | timestamp   | Tanggal update                 |

### 6. Tabel contacts

| Field        | Tipe Data   | Keterangan                     |
|--------------|-------------|--------------------------------|
| id           | bigint (PK) | ID kontak                      |
| nama         | varchar     | Nama pengirim                  |
| email        | varchar     | Email pengirim                 |
| tema_foto    | varchar     | Tema foto yang ditanyakan      |
| message      | text        | Isi pesan                      |
| is_read      | boolean     | Status terbaca                 |
| created_at   | timestamp   | Tanggal dikirim                |
| updated_at   | timestamp   | Tanggal update                 |

---

## 🔗 Relasi Antar Tabel

| Tabel Asal  | Tabel Tujuan | Jenis Relasi | Penjelasan                                  |
|-------------|--------------|-------------|----------------------------------------------|
| users       | galleries    | one-to-many | 1 user bisa memiliki banyak gallery          |
| users       | photos       | one-to-many | 1 user (fotografer) bisa upload banyak foto |
| galleries   | photos       | one-to-many | 1 gallery berisi banyak foto                |
| categories  | photos       | many-to-many| 1 foto bisa masuk banyak kategori (via pivot)|
| photos      | categories   | many-to-many| 1 kategori bisa berisi banyak foto          |

---



