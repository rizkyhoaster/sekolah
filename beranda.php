<?php
// PHP code can be added here if necessary
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDN 38 Talang Ubi</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="stylei.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <!-- Login Form Modal -->
<div id="loginModal" class="login-modal">
    <div class="login-modal-content">
        <span class="close-btn" id="closeLoginModal">&times;</span>
        <h2>Login</h2>
        <form action="login.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" placeholder="Enter your username" required>
            
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter your password" required>
            
            <button type="submit">Login</button>
        </form>
    </div>
</div>
<div class="clip-shape"></div>

<style>
  /* Style untuk Shape */
  .clip-shape {
      position: absolute; /* Posisi bebas */
      top: 0;
      left: 0;
      width: 100%;
      height: 300px;
      background: linear-gradient(135deg, #015601, #2575fc, #015601);
      clip-path: polygon(0 0, 100% 0, 100% 70%, 0 100%);
      z-index: -1; /* Letakkan di belakang elemen lain */
  }

  /* Pastikan body memiliki position relative */
  body {
      position: relative; /* Agar shape menggunakan referensi body */
      margin: 0;
      padding: 0;
  }
</style>

        <nav class="navbar">
            <div class="logo">
                <img src="gambar/logosekolah.jpg" alt="Logo STMIK" class="school-logo">
                <div>
                    <h1>SDN</h1>
                    <p>38 Talang Ubi</p>
                </div>
            </div>
            <ul class="nav-links">
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Profile</a></li>
                <li><a href="#">Artikel</a></li>
                <li><a href="#">Informasi</a></li>
                <li><a href="#">Kontak</a></li>
            </ul>
            <button class="login-btn">Login →</button>

            <!-- Burger Icon -->
            <div class="burger" id="burger">
                <div class="line"></div>
                <div class="line"></div>
                <div class="line"></div>
            </div>
        </nav>
    </header>

    <!-- Main Section -->
    <main>
        <!-- Slider Section -->
        <section class="slider">
            <div class="slides">
                <!-- Slide 1 -->
                <div class="slide">
                    <img src="gambar/csm.jpg" alt="Slide 1">
                </div>
                <!-- Slide 2 -->
                <div class="slide">
                    <img src="gambar/sekolahku.jpg" alt="Slide 2">
                </div>
                <!-- Slide 3 -->
                <div class="slide">
                    <img src="gambar/𝙆𝙄𝙇𝙇𝙐𝘼 𝙕𝙊𝙇𝘿𝙔𝘾𝙆.jpeg" alt="Slide 3">
                </div>
            </div>
            <!-- Navigation Buttons -->
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
            <script>
    let currentIndex = 0; // Track the current slide
    const slides = document.querySelector('.slides');
    const totalSlides = document.querySelectorAll('.slide').length;

    function changeSlide(direction = 1) {
        currentIndex += direction;

        // Loop back to the first slide or last slide
        if (currentIndex < 0) {
            currentIndex = totalSlides - 1;
        } else if (currentIndex >= totalSlides) {
            currentIndex = 0;
        }

        // Apply transform to move slides
        slides.style.transform = `translateX(-${currentIndex * 100}%)`;
    }

    // Auto-slide every 3 seconds
    setInterval(() => {
        changeSlide(1); // Move to the next slide
    }, 3000);

    // Allow manual control via navigation buttons
    document.querySelector('.prev').addEventListener('click', () => changeSlide(-1));
    document.querySelector('.next').addEventListener('click', () => changeSlide(1));
</script>

        </section>
        <section class="principal-message">
  <div class="image-wrapper">
    <img src="gambar/Bad_Boy-removebg-preview.png" alt="Kepala Sekolah" class="principal-image">
  </div>
  <div class="message-content">
    <h2 class="section-title">Sambutan <span class="highlight">Kepala Sekolah</span></h2>
    <p class="message">
      Assalamualaikum wr. wb. Puji syukur kepada Tuhan YME, atas berkat dan karuniaNya sehingga website SD Negeri 38 Talang Ubi mulai diaktifkan sebagai sarana informasi dan komunikasi sekolah dengan peserta didik, guru, pemerhati sekolah, orang tua siswa dan juga masyarakat. Untuk itu saya mengucapkan banyak terima kasih kepada semua pihak yang mendukung diaktifkannya website ini, terutama kepada rizky ganteng nan rupawan cerdas berkarisma, Bapak/Ibu Dewan guru, staf Tata Usaha dan juga semua pihak yang tidak dapat saya sebutkan satu per satu.
    </p>
  </div>
</section>
        <!-- Layanan Unggulan -->
        <section class="layanan">
            <h3>Layanan Unggulan SDN 38 Talang Ubi</h3>
            <div class="layanan-cards">
                <div class="card" data-link="pmb.html">
                    <i class="fa-solid fa-school"></i>
                    <p>PMB</p>
                </div>
                <div class="card" data-link="visi-misi.html">
                    <i class="fa-solid fa-graduation-cap"></i>
                    <p>Visi dan Misi</p>
                </div>
                <div class="card" data-link="download.html">
                    <i class="fa-solid fa-download"></i>
                    <p>Download</p>
                </div>
                <div class="card" data-link="sambutan.html">
                    <i class="fa-solid fa-handshake"></i>
                    <p>Sambutan</p>
                </div>
                <div class="card" data-link="agenda.html">
                    <i class="fa-solid fa-calendar"></i>
                    <p>Agenda</p>
                </div>
                <div class="card" data-link="pengumuman.html">
                    <i class="fa-solid fa-bullhorn"></i>
                    <p>Pengumuman</p>
                </div>
                <script>const layananCards = document.querySelector('.layanan-cards');

// Menambahkan event listener untuk mendeteksi sentuhan atau scroll
layananCards.addEventListener('mouseenter', () => {
    layananCards.classList.remove('hide-overflow'); // Menampilkan overflow saat disentuh
});

layananCards.addEventListener('mouseleave', () => {
    layananCards.classList.add('hide-overflow'); // Menyembunyikan overflow setelah tidak disentuh
});
</script>
            </div>

            <script>
                const cards = document.querySelectorAll('.card');

                cards.forEach(card => {
                    card.addEventListener('click', () => {
                        const link = card.getAttribute('data-link');
                        if (link) {
                            window.location.href = link;
                        }
                    });
                });
            </script>
        </section>

        <!-- Artikel dan Berita -->
<div class="beritakan">
    <h2>Artikel dan Berita</h2>
    <p style="color: black;">Aktivitas terbaru SDN 38 Talang Ubi</p>
    <div class="artikels">
        <a href="link-to-article-1.html" class="kartu">
            <img src="gambar/𝙆𝙄𝙇𝙇𝙐𝘼 𝙕𝙊𝙇𝘿𝙔𝘾𝙆.jpeg" alt="Wisuda ke-13">
            <span class="label">Berita</span>
            <p class="tanggal">2024-12-19 18:55:53</p>
            <h3>STMIK Syaikh Zainuddin NW Anjani Gelar Wisuda ke 13 di Mataram</h3>
        </a>
        <a href="link-to-article-2.html" class="kartu">
            <img src="gambar/sekolahku.jpg" alt="Uji Publik">
            <span class="label">Berita</span>
            <p class="tanggal">2024-05-19 20:39:42</p>
            <h3>STMIK Syaikh Zainuddin NW Anjani Laksanakan Uji Publik Panitia Seleksi SATGAS PPKS</h3>
        </a>
        <a href="link-to-article-3.html" class="kartu">
            <img src="gambar/sekolahku.jpg" alt="Wisuda ke-12">
            <span class="label">Berita</span>
            <p class="tanggal">2024-01-18 12:54:21</p>
            <h3>STMIK Syaikh Zainuddin NW Anjani Gelar Wisuda ke - XII</h3>
        </a>
        <a href="link-to-article-3.html" class="kartu">
            <img src="gambar/sekolahku.jpg" alt="Wisuda ke-12">
            <span class="label">Berita</span>
            <p class="tanggal">2024-01-18 12:54:21</p>
            <h3>STMIK Syaikh Zainuddin NW Anjani Gelar Wisuda ke - XII</h3>
        </a>
    </div>
    <div class="lainnya-wrapper">
        <a href="link-to-all-agendas.html" class="lainnya1-btn">Lainnya</a>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const artikelContainers = document.querySelectorAll('.artikels, .agenda .artikels');

        artikelContainers.forEach(container => {
            container.addEventListener('mouseenter', () => {
                container.classList.add('active'); // Tampilkan scrollbar
            });

            container.addEventListener('mouseleave', () => {
                container.classList.remove('active'); // Sembunyikan scrollbar
            });
        });
    });
</script>

<div class="agenda">
    <h2>Agenda</h2>
    <p style="color: black;"></pstyle>Agenda SDN 38 Talang Ubi</p>
    <div class="artikels">
        <a href="link-to-agenda-1.html" class="kartu">
            <img src="gambar/𝙆𝙄𝙇𝙇𝙐𝘼 𝙕𝙊𝙇𝘿𝙔𝘾𝙆.jpeg" alt="Penerimaan Mahasiswa Baru">
            <span class="label">Agenda</span>
            <p class="tanggal">2024-05-31</p>
            <h3>Penerimaan Mahasiswa Baru TA 2024/2025</h3>
            <p>Sekretariat PMB: STMIK Syaikh Zainuddin NW Anjani<br>14.00 WITA</p>
        </a>
        <a href="link-to-agenda-2.html" class="kartu">
            <img src="gambar/𝙆𝙄𝙇𝙇𝙐𝘼 𝙕𝙊𝙇𝘿𝙔𝘾𝙆.jpeg" alt="Ujian Tengah Semester">
            <span class="label">Agenda</span>
            <p class="tanggal">2024-04-01</p>
            <h3>UTS Genap 2023/2024</h3>
            <p>STMIK Syaikh Zainuddin NW Anjani<br>14.00 WITA - Selesai</p>
        </a>
        <a href="link-to-agenda-3.html" class="kartu">
            <img src="gambar/sekolahku.jpg" alt="Profil Pelajar Pancasila">
            <span class="label">Agenda</span>
            <p class="tanggal">2022-05-05</p>
            <h3>Profil Pelajar Pancasila</h3>
            <p>Aula Crocoblock<br>07.00 - Selesai</p>
        </a>
        <a href="link-to-agenda-3.html" class="kartu">
            <img src="gambar/sekolahku.jpg" alt="Profil Pelajar Pancasila">
            <span class="label">Agenda</span>
            <p class="tanggal">2022-05-05</p>
            <h3>Profil Pelajar Pancasila</h3>
            <p>Aula Crocoblock<br>07.00 - Selesai</p>
        </a>
        <a href="link-to-agenda-3.html" class="kartu">
            <img src="gambar/sekolahku.jpg" alt="Profil Pelajar Pancasila">
            <span class="label">Agenda</span>
            <p class="tanggal">2022-05-05</p>
            <h3>Profil Pelajar Pancasila</h3>
            <p>Aula Crocoblock<br>07.00 - Selesai</p>
        </a>
        <!-- Tombol Lainnya -->
    </div>
    <div class="lainnya-wrapper">
        <a href="link-to-all-agendas.html" class="lainnya-btn">Lainnya</a>
    </div>
</div>
<section class="daftar-guru">
    <div class="containeri">
        <h1>Daftar Guru dan Staff</h1>
        <p>Daftar Guru Dan Staff SDN 38 talang Ubi</p>

        <!-- Scrollable container -->
        <div class="card1-list">
            <div class="card1">
                <div class="badge">Kepsek</div>
                <img src="gambar/𝙆𝙄𝙇𝙇𝙐𝘼 𝙕𝙊𝙇𝘿𝙔𝘾𝙆.jpeg" alt="Ketua">
                <h3>Ketua</h3>
            </div>
            <div class="card1">
                <div class="badge">Waksep</div>
                <img src="gambar/𝙆𝙄𝙇𝙇𝙐𝘼 𝙕𝙊𝙇𝘿𝙔𝘾𝙆.jpeg" alt="Waket I Bid. Akademik">
                <h3>Waket I Bid. Akademik</h3>
            </div>
            <div class="card1">
                <div class="badge">GURU MTK</div>
                <img src="gambar/sekolahku.jpg" alt="Waket II Bid. Keuangan & Sapras">
                <h3>Waket II Bid. Keuangan & Sapras</h3>
            </div>
            <div class="card1">
                <div class="badge">GURU IPA</div>
                <img src="waket3.jpg" alt="Waket III Bid. Kemahasiswaan">
                <h3>Waket III Bid. Kemahasiswaan</h3>
            </div>
            <div class="card1">
                <div class="badge">GURU PJOK</div>
                <img src="kaprodi-ti.jpg" alt="Kaprodi TI">
                <h3>Kaprodi TI</h3>
            </div>
            <div class="card1">
                <div class="badge">GURU SBD</div>
                <img src="kaprodi-si.jpg" alt="Kaprodi SI">
                <h3>Kaprodi SI</h3>
            </div>
        </div>
        <div class="lainnya-wrapper">
        <a href="link-to-all-agendas.html" class="btn-lainnya">Lainnya</a>
    </div>
</section>
<!-- banner Iklan -->
 <section class="promo-section">
    <div class="banner-wrapper">
        <div class="banner-slider">
            <div class="banner-item">
                <img src="gambar/download.jpeg" alt="Iklan Banner 1">
            </div>
            <div class="banner-item">
                <img src="gambar/download.jpeg" alt="Iklan Banner 2">
            </div>
        </div>
    </div>
</section>
    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h4>Tentang Sekolah</h4>
                <p>Sekolah XYZ adalah institusi pendidikan yang berfokus pada pengembangan karakter dan keunggulan akademik.</p>
            </div>
            <div class="footer-section">
                <h4>Kontak</h4>
                <ul>
                    <li>Alamat: Jl. Pendidikan No. 123, Kota ABC</li>
                    <li>Telepon: (021) 12345678</li>
                    <li>Email: info@sekolahxyz.sch.id</li>
                </ul>
            </div>
            <div class="footer-section">
                <h4>Ikuti Kami</h4>
                <ul class="social-media">
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Instagram</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Sekolah XYZ. Hak Cipta Dilindungi.</p>
        </div>
    </footer>

    <script>
        document.getElementById('burger').addEventListener('click', () => {
            document.querySelector('.nav-links').classList.toggle('active');
        });
    </script>
</body>
<script>
    // ini buat login 
    const loginButton = document.querySelector('.login-btn');
    const loginModal = document.getElementById('loginModal');
    const closeModal = document.getElementById('closeLoginModal');

    loginButton.addEventListener('click', () => {
        loginModal.style.display = 'block';
    });

    closeModal.addEventListener('click', () => {
        loginModal.style.display = 'none';
    });

    // Close modal if user clicks outside the modal content
    window.addEventListener('click', (event) => {
        if (event.target === loginModal) {
            loginModal.style.display = 'none';
        }
    });
</script>
</html>