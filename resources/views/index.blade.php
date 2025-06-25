<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dinas PU Bina Marga dan Cipta Karya - Provinsi Jawa Tengah</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        
        /* Header */
        .header {
            background: linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        

        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        
        .header-main {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 0;
        }
        
        .logo-section {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        
        .logo {
            width: 60px;
            height: 60px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #1b5e20;
            font-size: 1.5rem;
        }
        
        .header-text h1 {
            font-size: 1.5rem;
            margin-bottom: 0.2rem;
        }
        
        .header-text p {
            font-size: 0.9rem;
            opacity: 0.9;
        }
        
        /* Navigation */
        .nav {
            background: rgba(0,0,0,0.1);
            padding: 0.5rem 0;
        }
        
        .nav ul {
            list-style: none;
            display: flex;
            gap: 2rem;
        }
        
        .nav a {
            color: white;
            text-decoration: none;
            padding: 0.5rem 1rem;
            border-radius: 5px;
            transition: all 0.3s ease;
        }
        
        .nav a:hover, .nav a.active {
            background: rgba(255,255,255,0.2);
        }
        
        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(27,94,32,0.8), rgba(46,125,50,0.8)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23f1f8e9" width="1200" height="600"/><path fill="%231b5e20" opacity="0.1" d="M0,300 Q300,200 600,300 T1200,300 V600 H0 Z"/></svg>');
            background-size: cover;
            color: white;
            padding: 4rem 0;
            text-align: center;
        }
        
        .hero h2 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: fadeInUp 1s ease;
        }
        
        .hero p {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1s ease 0.2s both;
        }
        
        /* Main Content */
        .main-content {
            padding: 3rem 0;
            background: #f8f9fa;
        }
        
        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 2rem;
            margin-top: 2rem;
        }
        
        .content-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s ease;
        }
        
        .content-card:hover {
            transform: translateY(-5px);
        }
        
        .card-title {
            font-size: 1.5rem;
            color: #1b5e20;
            margin-bottom: 1rem;
            border-bottom: 3px solid #2e7d32;
            padding-bottom: 0.5rem;
            display: inline-block;
        }
        
        /* Sidebar */
        .sidebar {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }
        
        .info-box {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        
        .info-box h3 {
            color: #1b5e20;
            margin-bottom: 1rem;
            font-size: 1.2rem;
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 0.5rem;
            padding: 0.5rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        
        .contact-item:hover {
            background: #f1f8e9;
        }
        
        .icon {
            width: 20px;
            height: 20px;
            background: #2e7d32;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 0.8rem;
        }
        
        /* Services Grid */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }
        
        .service-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            transition: all 0.3s ease;
        }
        
        .service-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .service-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #1b5e20, #2e7d32);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 1rem;
            color: white;
            font-size: 1.5rem;
        }
        
        /* Footer */
        .footer {
            background: #1b5e20;
            color: white;
            padding: 2rem 0;
            text-align: center;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-bottom: 2rem;
        }
        
        .footer-section h4 {
            margin-bottom: 1rem;
            color: #81c784;
        }
        
        .footer-section a {
            color: #ccc;
            text-decoration: none;
            display: block;
            margin-bottom: 0.5rem;
            transition: color 0.3s ease;
        }
        
        .footer-section a:hover {
            color: #81c784;
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header-main {
                flex-direction: column;
                gap: 1rem;
            }
            
            .nav ul {
                flex-wrap: wrap;
                justify-content: center;
                gap: 1rem;
            }
            
            .content-grid {
                grid-template-columns: 1fr;
            }
            
            .hero h2 {
                font-size: 2rem;
            }
            
            .services-grid {
                grid-template-columns: 1fr;
            }
        }
        
        .news-item {
            border-bottom: 1px solid #eee;
            padding: 1rem 0;
        }
        
        .news-item:last-child {
            border-bottom: none;
        }
        
        .news-date {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 0.5rem;
        }
        
        .news-title {
            font-weight: bold;
            color: #1b5e20;
            text-decoration: none;
        }
        
        .news-title:hover {
            color: #2e7d32;
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">

        
        <div class="container">
            <div class="header-main">
                <div class="logo-section">
                    <div class="logo">JT</div>
                    <div class="header-text">
                        <h1>Dinas PU Bina Marga dan Cipta Karya</h1>
                        <p>Provinsi Jawa Tengah</p>
                    </div>
                </div>
            </div>
        </div>
        
        <nav class="nav">
            <div class="container">
                <ul>
                    <li><a href="#" class="active">Beranda</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Layanan</a></li>
                    <li><a href="#">Berita</a></li>
                    <li><a href="#">Pengumuman</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>Selamat Datang di Dinas PU Bina Marga dan Cipta Karya</h2>
            <p>Membangun Jawa Tengah Digital yang Maju dan Berkelanjutan</p>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="container">
            <div class="content-grid">
                <div class="main-content-area">
                    <div class="content-card">
                        <h2 class="card-title">Tentang Kami</h2>
                        <p>Dinas PU Bina Marga dan Cipta Karya Provinsi Jawa Tengah merupakan unsur pelaksana Pemerintah Daerah di bidang komunikasi dan informatika. Kami berkomitmen untuk memberikan pelayanan terbaik dalam penyelenggaraan komunikasi publik, pengelolaan informasi, dan pengembangan teknologi informasi di Jawa Tengah.</p>
                        <br>
                        <p>Visi kami adalah mewujudkan Jawa Tengah sebagai provinsi yang unggul dalam pemanfaatan teknologi informasi dan komunikasi untuk mendukung tata kelola pemerintahan yang baik dan pelayanan publik yang prima.</p>
                    </div>

                    <div class="content-card">
                        <h2 class="card-title">Layanan Unggulan</h2>
                        <div class="services-grid">
                            <div class="service-card">
                                <div class="service-icon">📡</div>
                                <h3>Komunikasi Publik</h3>
                                <p>Pengelolaan informasi dan komunikasi publik untuk transparansi pemerintahan</p>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">💻</div>
                                <h3>Teknologi Informasi</h3>
                                <p>Pengembangan dan pengelolaan sistem informasi pemerintahan</p>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">📊</div>
                                <h3>Data dan Statistik</h3>
                                <p>Pengelolaan data dan penyediaan informasi statistik daerah</p>
                            </div>
                            <div class="service-card">
                                <div class="service-icon">🛡️</div>
                                <h3>Keamanan Siber</h3>
                                <p>Perlindungan infrastruktur teknologi informasi pemerintah</p>
                            </div>
                        </div>
                    </div>
                </div>

                <aside class="sidebar">
                    <div class="info-box">
                        <h3>Informasi Kontak</h3>
                        <div class="contact-item">
                            <div class="icon">📍</div>
                            <div>
                                <strong>Alamat:</strong><br>
                                Jl. Pahlawan No. 7, Semarang<br>
                                Jawa Tengah 50241
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon">☎️</div>
                            <div>
                                <strong>Telepon:</strong><br>
                                (024) 8501946
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon">📧</div>
                            <div>
                                <strong>Email:</strong><br>
                                diskominfo@jatengprov.go.id
                            </div>
                        </div>
                        <div class="contact-item">
                            <div class="icon">🌐</div>
                            <div>
                                <strong>Website:</strong><br>
                                www.diskominfo.jatengprov.go.id
                            </div>
                        </div>
                    </div>

                    <div class="info-box">
                        <h3>Berita Terbaru</h3>
                        <div class="news-item">
                            <div class="news-date">25 Juni 2025</div>
                            <a href="#" class="news-title">Peluncuran Aplikasi Digital Jateng Terbaru</a>
                        </div>
                        <div class="news-item">
                            <div class="news-date">23 Juni 2025</div>
                            <a href="#" class="news-title">Workshop Literasi Digital untuk UMKM</a>
                        </div>
                        <div class="news-item">
                            <div class="news-date">20 Juni 2025</div>
                            <a href="#" class="news-title">Sosialisasi Keamanan Siber di Era Digital</a>
                        </div>
                        <div class="news-item">
                            <div class="news-date">18 Juni 2025</div>
                            <a href="#" class="news-title">Rapat Koordinasi Pengembangan Smart City</a>
                        </div>
                    </div>

                    <div class="info-box">
                        <h3>Link Terkait</h3>
                        <a href="#">Portal Jawa Tengah</a>
                        <a href="#">PPID Jateng</a>
                        <a href="#">E-Government Jateng</a>
                        <a href="#">Open Data Jateng</a>
                        <a href="#">Jateng Smart Province</a>
                    </div>
                </aside>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h4>Dinas PU Bina Marga dan Cipta Karya</h4>
                    <p>Provinsi Jawa Tengah</p>
                    <p>Jl. Pahlawan No. 7, Semarang</p>
                    <p>Jawa Tengah 50241</p>
                    <p>📧 diskominfo@jatengprov.go.id</p>
                    <p>☎️ (024) 8501946</p>
                    <p>🕐 Senin - Jumat: 08:00 - 16:00 WIB</p>
                </div>
                <div class="footer-section">
                    <h4>Layanan</h4>
                    <a href="#">Komunikasi Publik</a>
                    <a href="#">Teknologi Informasi</a>
                    <a href="#">Data dan Statistik</a>
                    <a href="#">Keamanan Siber</a>
                </div>
                <div class="footer-section">
                    <h4>Informasi</h4>
                    <a href="#">Profil Dinas</a>
                    <a href="#">Struktur Organisasi</a>
                    <a href="#">Visi & Misi</a>
                    <a href="#">Tugas & Fungsi</a>
                </div>
                <div class="footer-section">
                    <h4>Media Sosial</h4>
                    <a href="#">Facebook</a>
                    <a href="#">Twitter</a>
                    <a href="#">Instagram</a>
                    <a href="#">YouTube</a>
                </div>
            </div>
            <hr style="margin: 2rem 0; border-color: #2e7d32;">
            <p>&copy; 2025 Dinas PU Bina Marga dan Cipta Karya Provinsi Jawa Tengah. Semua hak dilindungi.</p>
        </div>
    </footer>

    <script>
        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Add scroll effect to header
        window.addEventListener('scroll', function() {
            const header = document.querySelector('.header');
            if (window.scrollY > 100) {
                header.style.background = 'linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%)';
                header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.3)';
            } else {
                header.style.background = 'linear-gradient(135deg, #1b5e20 0%, #2e7d32 100%)';
                header.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            }
        });

        // Animate service cards on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        document.querySelectorAll('.service-card').forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'all 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>