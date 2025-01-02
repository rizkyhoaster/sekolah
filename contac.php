<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $info = htmlspecialchars($_POST['info']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Nomor WhatsApp tujuan
    $whatsappNumber = '6285134055815'; // Ganti dengan nomor Anda

    // Format pesan
    $whatsappMessage = "Halo, Saya $name.\nNo. HP/WA: $phone\nEmail: $email\n\nInformasi: $info\nSubject: $subject\nPesan:\n$message";

    // Encode pesan untuk URL
    $encodedMessage = urlencode($whatsappMessage);

    // Tautan WhatsApp API
    $whatsappURL = "https://wa.me/$whatsappNumber?text=$encodedMessage";

    // Redirect ke WhatsApp
    header("Location: $whatsappURL");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Page</title>
  <link rel="stylesheet" href="kontak.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="stylei.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <img src="gambar/logosekolah.jpg" alt="Logo STMIK" class="school-logo">
            <div>
                <h1>SDN</h1>
                <p>38 Talang Ubi</p>
            </div>
        </div>
        <ul class="nav-links">
            <li><a href="beranda.php">Beranda</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Artikel</a></li>
            <li><a href="#">Informasi</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
        <button class="login-btn">Login →</button>
        <div class="burger" id="burger" onclick="toggleBurger()">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const burger = document.querySelector('.burger');
            const navLinks = document.querySelector('.nav-links');
            const loginBtn = document.querySelector('.login-btn');
        
            function toggleBurger() {
                navLinks.classList.toggle('open');
                burger.classList.toggle('active');
            }

            burger.addEventListener('click', toggleBurger);
        
            document.addEventListener('click', (e) => {
                if (!navLinks.contains(e.target) && !burger.contains(e.target)) {
                    navLinks.classList.remove('open');
                    burger.classList.remove('active');
                }
            });

            window.addEventListener('resize', () => {
                if (window.innerWidth > 768) {
                    loginBtn.style.display = '';
                } else {
                    if (navLinks.classList.contains('open')) {
                        navLinks.appendChild(loginBtn);
                        loginBtn.style.display = 'block';
                    } else {
                        loginBtn.style.display = 'none';
                    }
                }
            });

            if (window.innerWidth <= 768) {
                loginBtn.style.display = 'none';
            }
        });
    </script>

    <section class="map-section">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.267633492146!2d103.81610037421547!3d-3.2837034410700974!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3a6c80f8bcdf31%3A0xb8ee89a6a3ed3d2a!2sSD%20Negeri%2038%20Talang%20Ubi!5e0!3m2!1sid!2sid!4v1735831309421!5m2!1sid!2sid"
            width="100%" 
            height="450" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy">
            </iframe>
    </section>

    <section class="contact-section">
        <div class="contact-info">
            <h2>Hubungi Kami</h2>
            <p>SDN 38 Talang Ubi</p>
            <p>Jln. Telaga Cala Kelurahan Pasar Bhayangkara Rt. 22 Rw. 05, Kab. Penukal Abab Lematang Ilir.</p>
            <p>Telp.: -</p>
            <p>Email: sdn38talangubi@gmail.com</p>
            <h3>Social Media:</h3>
            <ul class="social-links">
                <li><a href="https://web.facebook.com/profile.php?id=61552498713161">Facebook</a></li>
                <li><a href="https://dapo.kemdikbud.go.id/sekolah/064D2F09BAE7EC34D066">Data Pokok</a></li>
                <li><a href="https://ban-pdm.id/satuanpendidikan/10647215">Ban-PDM</a></li>
                <li><a href="#">WhatsApp</a></li>
            </ul>
        </div>

        <div class="feedback-form">
            <h2>Kritik dan Saran</h2>
            <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
                <input type="text" name="name" placeholder="Nama" required>
                <input type="text" name="phone" placeholder="No. HP/WA" required>
                <input type="email" name="email" placeholder="Email" required>
                <select name="info">
                    <option value="Informasi Sekolah">Informasi sekolah</option>
                    <option value="Informasi Masuk">Informasi Masuk</option>
                    <option value="Lainnya">Lainnya</option>
                </select>
                <input type="text" name="subject" placeholder="Subject" required>
                <textarea name="message" placeholder="Pesan Anda" rows="5" required></textarea>
                <button type="submit" name="submit">Kirim Aspirasi</button>
            </form>
        </div>
    </section>
</body>
</html>