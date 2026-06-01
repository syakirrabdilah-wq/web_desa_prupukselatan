# Website Profil Desa Prupuk Selatan

Saya membuat Website profil desa tempat tinggal saya yaitu Desa Prupuk Selatan, Kecamatan Margasari, Kabupaten Tegal, Jawa Tengah.

## Fitur

### Login

- Halaman login (`login/login.php`)
- 3 akun pengguna: `syakir/1234567`, `king nasir/PemburuSukiLiar `, `lana/777777`
- Validasi login menggunakan PHP (tanpa database)
- Toggle tampilkan/sembunyikan password menggunakan JavaScript
- Notifikasi login berhasil/gagal menggunakan `alert()`

### Navigasi

- Indikator halaman aktif
- Navbar transparan di beranda, berubah warna saat di-scroll

### Beranda (`web_desa/index.html`)

- Hero slider dengan 3 slide otomatis (interval 3 detik)
- Navigasi manual (tombol prev/next, dot indikator)
- Profil desa dengan gambar dan deskripsi
- Fakta penting: luas wilayah, populasi, jumlah RW/RT
- Peta Google Maps

### Tentang Kami (`web_desa/tentang.html`)

- Visi desa
- 5 Misi: pembangunan ekonomi, budaya, pendidikan & kesehatan, lingkungan, gotong royong

### Populasi (`web_desa/populasi.html`)

Data demografis dalam 3 tabel:

- Sebaran usia (6 kelompok)
- Tingkat pendidikan (5 jenjang)
- Pekerjaan utama (5 kategori)

### Aktivitas (`web_desa/wisata.html`)

6 aktivitas desa dengan gambar: bersepeda, edukasi pertanian, kerajinan, camping, budaya, kuliner

### Kontak (`web_desa/kontak.php`)

- Informasi kontak: alamat, telepon, email, jam kerja, media sosial
- Peta Google Maps
- 6 kartu layanan desa
- hyperlink sosial media
- Form Pengaduan Masyarakat Menggunakan PHP, Disertai Javascript Untuk notifikasi Ketika Sudah Melakukan Sumbit

## Teknologi

| Teknologi             | Penggunaan                                      |
| --------------------- | ----------------------------------------------- |
| HTML5                 | Markup semantik                                 |
| CSS3                  | Flexbox, Grid, custom properties, media queries |
| Vanilla JavaScript    | DOM manipulation, slider, password toggle       |
| PHP (tanpa database)  | Validasi login & proses form pengaduan          |
| Google Maps Embed API | Peta lokasi desa                                |

## Struktur File

```
website_profil_desa2/
├── login/                  # Halaman login
│   ├── login.php           # Login (PHP self-processing)
│   ├── login.css           # Style login
│   ├── login.js            # Toggle password (show/hide)
│   └── img/                # Logo
│
├── web_desa/               # Website utama
│   ├── index.html          # Beranda
│   ├── tentang.html        # Tentang Kami
│   ├── populasi.html       # Populasi
│   ├── wisata.html         # Aktivitas
│   ├── kontak.php          # Kontak + Form Pengaduan
│   ├── style.css           # Style global
│   ├── efek.js             # Slider + efek scroll
│   └── img/                # Gambar
│
└── README.md
```

## Cara Menjalankan

Jalankan server PHP bawaan dari folder `website_profil_desa2`:

```
php -S localhost:8000
```

Lalu akses `http://localhost:8000/login/login.php` di browser.
