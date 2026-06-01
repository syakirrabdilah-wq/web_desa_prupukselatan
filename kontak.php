<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kontak - Desa Prupuk Selatan</title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
<?php
$submitted = false;
$errors = [];
$nama = $email = $telepon = $kategori = $isi_pengaduan = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit_pengaduan'])) {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $telepon = trim($_POST['telepon'] ?? '');
    $kategori = trim($_POST['kategori'] ?? '');
    $isi_pengaduan = trim($_POST['isi_pengaduan'] ?? '');

    if ($nama === '') $errors[] = 'Nama lengkap wajib diisi.';
    if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'Email tidak valid.';
    if ($telepon === '') $errors[] = 'No. Telepon wajib diisi.';
    if ($kategori === '') $errors[] = 'Kategori pengaduan wajib dipilih.';
    if ($isi_pengaduan === '') $errors[] = 'Isi pengaduan wajib diisi.';

    if (count($errors) === 0) {
        $submitted = true;
    }
}
?>
    <nav class="navbar">
      <div class="container">
        <div class="logo-section">
          <a href="index.html" class="logo">
            <img
              src="img/logo.png"
              alt="Logo Desa Prupuk Selatan"
              class="logo-img"
            />
          </a>
          <div class="logo-text">
            <span class="logo-subtitle">Pemerintah Kabupaten Tegal</span>
            <span class="logo-title">Desa Prupuk Selatan</span>
          </div>
        </div>
        <ul class="nav-menu">
          <li><a href="index.html">Beranda</a></li>
          <li><a href="tentang.html">Tentang Kami</a></li>
          <li><a href="populasi.html">Populasi</a></li>
          <li><a href="wisata.html">Aktivitas</a></li>
          <li><a href="kontak.php" class="active">Kontak</a></li>
        </ul>
      </div>
    </nav>

    <main class="container">
      <section class="content-section">
        <div class="contact-grid">
          <div class="contact-info">
            <h2>Informasi Kontak</h2>

            <div class="contact-item">
              <h3>Alamat</h3>
              <p>
                Kantor Desa Prupuk Selatan<br />
                Jl.Raya Kesambi<br />
                Desa Prupuk Selatan<br />
                Kecamatan Margasari<br />
                Kabupaten Tegal<br />
              </p>
            </div>

            <div class="contact-item">
              <h3>Telepon</h3>
              <p>
                Kantor: (0274) 555-1234<br />
                Kepala Desa: (0812) 345-6789<br />
              </p>
            </div>

            <div class="contact-item">
              <h3>Email</h3>
              <p>
                <a href="mailto:desa.prupukselatan@example.com"
                  >desa.prupukselatan@gmail.com</a
                ><br />
                <a href="mailto:info@desaprupukselatan.go.id"
                  >info@desaprupukselatan.go.id</a
                >
              </p>
            </div>

            <div class="contact-item">
              <h3>Jam Kerja</h3>
              <p>
                Senin - Jumat: 08.00 - 16.00 WIB<br />
                Istirahat: 12.00 - 13.00 WIB<br />
                Sabtu - Minggu: Tutup
              </p>
            </div>

            <div class="contact-item">
              <h3>Media Sosial</h3>
              <p>
                <a href="https://www.facebook.com/prupukselatan/">Facebook: Desa Prupuk Selatan</a><br />
                <a href="https://www.instagram.com/desa_prupukselatan/">Instagram: @prupukselatan</a><br />
                <a href="https://www.youtube.com/channel/UCreWm--2CoeYDy_vrL86JjA">YouTube: Desa Prupuk Selatan</a>
              </p>
            </div>
          </div>

          <div class="contact-info map-wrapper">
            <h2>Peta Lokasi</h2>
            <div class="map-container no-shadow">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.840606634547!2d108.96675297492577!3d-7.144422792859796!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f9a3e887cf4e5%3A0xb94fd6254a6b4070!2sRaya%20Prupuk%20Selatan%2C%20Jawa%20Tengah!5e0!3m2!1sen!2sid!4v1777898473929!5m2!1sen!2sid"
                width="100%"
                height="100%"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>

      <section class="content-section">
        <h2>Layanan Desa</h2>
        <div class="services-grid">
          <div class="service-card">
            <h3>Administrasi Kependudukan</h3>
            <p>
              Layanan pembuatan KTP, Kartu Keluarga, Akta Lahir, dan dokumen
              kependudukan lainnya.
            </p>
          </div>
          <div class="service-card">
            <h3>Perizinan Usaha</h3>
            <p>
              Bantuan pengurusan izin usaha mikro, kecil, dan menengah (UMKM).
            </p>
          </div>
          <div class="service-card">
            <h3>Surat Keterangan</h3>
            <p>
              Penerbitan surat keterangan domisili, usaha, kelahiran, dan
              keterangan lainnya.
            </p>
          </div>
          <div class="service-card">
            <h3>Bantuan Sosial</h3>
            <p>
              Program bantuan sosial untuk keluarga kurang mampu dan warga yang
              membutuhkan.
            </p>
          </div>
          <div class="service-card">
            <h3>Pemberdayaan Masyarakat</h3>
            <p>
              Program pelatihan dan pemberdayaan ekonomi untuk meningkatkan
              taraf hidup masyarakat.
            </p>
          </div>
          <div class="service-card">
            <h3>Pengaduan Masyarakat</h3>
            <p>
              Saluran pengaduan dan saran dari masyarakat untuk peningkatan
              layanan desa.
            </p>
          </div>
        </div>
      </section>

      <section class="content-section">
        <h2>Form Pengaduan Masyarakat</h2>
        <div class="contact-form">
          <input type="hidden" id="submitted" value="<?php echo $submitted ? '1' : '0'; ?>">
<?php if (!empty($errors)): ?>
          <div class="alert-error">
            <?php echo nl2br(implode("\n", $errors)); ?>
          </div>
<?php endif; ?>
          <form method="post" action="">
            <div class="form-group">
              <label for="nama">Nama Lengkap</label>
              <input
                type="text"
                id="nama"
                name="nama"
                placeholder="Masukkan nama lengkap"
                value="<?php echo htmlspecialchars($nama); ?>"
                required
              />
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input
                type="email"
                id="email"
                name="email"
                placeholder="Masukkan email aktif"
                value="<?php echo htmlspecialchars($email); ?>"
                required
              />
            </div>
            <div class="form-group">
              <label for="telepon">No. Telepon</label>
              <input
                type="number"
                id="telepon"
                name="telepon"
                placeholder="Masukkan nomor telepon"
                value="<?php echo htmlspecialchars($telepon); ?>"
                required
              />
            </div>
            <div class="form-group">
              <label for="kategori">Kategori Pengaduan</label>
              <select id="kategori" name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Infrastruktur" <?php echo $kategori === 'Infrastruktur' ? 'selected' : ''; ?>>Infrastruktur</option>
                <option value="Pelayanan" <?php echo $kategori === 'Pelayanan' ? 'selected' : ''; ?>>Pelayanan</option>
                <option value="Kebersihan" <?php echo $kategori === 'Kebersihan' ? 'selected' : ''; ?>>Kebersihan</option>
                <option value="Keamanan" <?php echo $kategori === 'Keamanan' ? 'selected' : ''; ?>>Keamanan</option>
                <option value="Sosial" <?php echo $kategori === 'Sosial' ? 'selected' : ''; ?>>Sosial</option>
                <option value="Lainnya" <?php echo $kategori === 'Lainnya' ? 'selected' : ''; ?>>Lainnya</option>
              </select>
            </div>
            <div class="form-group">
              <label for="isi_pengaduan">Isi Pengaduan</label>
              <textarea
                id="isi_pengaduan"
                name="isi_pengaduan"
                rows="6"
                placeholder="Jelaskan pengaduan Anda secara detail"
                required
              ><?php echo htmlspecialchars($isi_pengaduan); ?></textarea>
            </div>
            <button type="submit" name="submit_pengaduan" class="btn-submit">
              Kirim Pengaduan
            </button>
          </form>
        </div>
      </section>
    </main>

    <footer class="footer">
      <div class="container">
        <p>&copy; 2026 Desa Prupuk Selatan. Semua hak dilindungi.</p>
        <p>Kontak: desa.prupukselatan@gmail.com | Telepon: (0274) 12345</p>
      </div>
    </footer>
    <script>
      document.addEventListener('DOMContentLoaded', function () {
        var submitted = document.getElementById('submitted');
        if (submitted && submitted.value === '1') {
          alert('Pengaduan Anda berhasil dikirim.');
        }
      });
    </script>
    <script src="efek.js"></script>
  </body>
</html>
