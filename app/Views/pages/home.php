<!DOCTYPE HTML>
<!--
	Escape Velocity by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Landing Page Kecamatan Batu Aji</title>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="<?= base_url('assets/css/main.css'); ?>" />
</head>

<body class="homepage is-preload">
    <div id="page-wrapper">

        <!-- Header -->
        <section id="header" class="wrapper">

            <!-- Logo -->
            <div id="logo">
                <h1><a href="<?= base_url('/'); ?>">Portal Kecamatan Batu Aji</a></h1>
                <p>Selamat datang di website Kecamatan Batu Aji</p>
            </div>

            <!-- Nav -->
            <nav id="nav">
                <ul>
                    <li class="current"><a href="<?= base_url('/'); ?>">Beranda</a></li>
                    <li>
                        <a href="<?= base_url('/tentang-kami'); ?>">Tentang Kami</a>
                        <ul>
                            <li><a href="#">Profil Kecamatan Batu Aji</a></li>
                            <li><a href="#">Keorganisasian</a></li>
                            <li><a href="#">Camat</a></li>
                            <li>
                                <a href="#">Info <i class='bx bx-chevron-right'></i></a>
                                <ul>
                                    <li><a href="#">Seksi Kesejahteraan Masyarakat</a></li>
                                    <li><a href="#">Seksi Pelayanan Umum</a></li>
                                    <li><a href="#">Seksi Pemerintahan</a></li>
                                    <li><a href="#">Seksi PPM</a></li>
                                    <li><a href="#">Seksi TRANTIB</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="<?= base_url('dashboard'); ?>">Dashboard</a></li>
                </ul>
            </nav>

        </section>

        <!-- Highlights -->
        <section id="highlights" class="wrapper style3">
            <div class="title">Kabar Terkini</div>
            <div class="container">
                <div class="row aln-center">
                    <div class="col-4 col-12-medium">
                        <section class="highlight">
                            <a href="#" class="image featured"><img src="<?= base_url('images/padang-panjang.jpg'); ?>" alt="" /></a>
                            <h3><a href="#">Kunjungan PKK Kota Padang Panjang ke Kecamatan Batu Aji</a></h3>
                            <p>Batu Aji, 27 November 2017. Sekcam Batu Aji, Sutikno,SE dan TP PKK Kecamatan Batu Aji ...</p>
                            <ul class="actions">
                                <li><a href="#" class="button style1">Read More</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-4 col-12-medium">
                        <section class="highlight">
                            <a href="#" class="image featured"><img src="<?= base_url('images/bazar.jpg'); ?>" alt="" /></a>
                            <h3><a href="#">Bazar sembako murah Kecamatan Batu Aji</a></h3>
                            <p>Penyaluran paket sembako murah tersebut dilaksanakan di Gor Bulu Tangkis Simpang ...</p>
                            <ul class="actions">
                                <li><a href="#" class="button style1">Read More</a></li>
                            </ul>
                        </section>
                    </div>
                    <div class="col-4 col-12-medium">
                        <section class="highlight">
                            <a href="#" class="image featured"><img src="<?= base_url('images/jabatan.jpg'); ?>" alt="" /></a>
                            <h3><a href="#">Acara serah terima jabatan Eselon III &amp; IV sekaligus serah terima jabatan Ketua TP.PKK</a></h3>
                            <p>Acara serah terima jabatan Eselon III ...</p>
                            <ul class="actions">
                                <li><a href="#" class="button style1">Read More</a></li>
                            </ul>
                        </section>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main -->
        <section id="main" class="wrapper style2">
            <div class="title">Pelayanan</div>
            <div class="container">
                <!-- Features -->
                <section id="features">
                    <div class="feature-list">
                        <div class="row">
                            <div class="col-6 col-12-medium">
                                <section>
                                    <h3>SOP AHLI WARIS REVISI 2021</h3>
                                </section>
                            </div>
                            <div class="col-6 col-12-medium">
                                <section>
                                    <h3>SOP DISPENSASI NIKA</h3>
                                </section>
                            </div>
                            <div class="col-6 col-12-medium">
                                <section>
                                    <h3>SOP REKOM SEKOLAH REVISI 2021</h3>
                                </section>
                            </div>
                            <div class="col-6 col-12-medium">
                                <section>
                                    <h3>SOP PELAYANAN KK UMUM</h3>
                                </section>
                            </div>
                            <div class="col-6 col-12-medium">
                                <section>
                                    <h3>SOP UMKM</h3>
                                </section>
                            </div>
                            <div class="col-6 col-12-medium">
                                <section>
                                    <h3>SOP AK1</h3>
                                </section>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </section>

        <!-- Footer -->
        <section id="footer" class="wrapper">
            <div class="title">Kata Sambutan Camat Batu Aji</div>
            <div class="container">
                <header class="style1">
                    <h2>RIDWAN AFANDI, S.STP., M.Eng</h2>
                    <p>
                        <i class='bx bxs-quote-left'></i> Saya berharap website ini dapat bermanfaat bagi kita semua dan dapat dijadikan wahana interaksi yang positif baik antar keluarga besar Kecamatan Batu Aji maupun masyarakat pada umumnya sehingga dapat menjalin silaturahmi dan mari kita berkarya untuk kemajuan Kecamatan Batu Aji. <i class='bx bxs-quote-right'></i>
                    </p>
                </header>
                <div class="row">
                    <div class="col-6 col-12-medium">

                        <!-- Contact Form -->
                        <section>
                            <form method="post" action="#">
                                <div class="row gtr-50">
                                    <div class="col-6 col-12-small">
                                        <input type="text" name="name" id="contact-name" placeholder="Name" />
                                    </div>
                                    <div class="col-6 col-12-small">
                                        <input type="text" name="email" id="contact-email" placeholder="Email" />
                                    </div>
                                    <div class="col-12">
                                        <textarea name="message" id="contact-message" placeholder="Message" rows="4"></textarea>
                                    </div>
                                    <div class="col-12">
                                        <ul class="actions">
                                            <li><input type="submit" class="style1" value="Send" /></li>
                                            <li><input type="reset" class="style2" value="Reset" /></li>
                                        </ul>
                                    </div>
                                </div>
                            </form>
                        </section>

                    </div>
                    <div class="col-6 col-12-medium">

                        <!-- Contact -->
                        <section class="feature-list small">
                            <div class="row">
                                <div class="col-6 col-12-small">
                                    <section>
                                        <h3 class="icon solid fa-home">Lokasi</h3>
                                        <p>
                                            Jalan Wan Sri Beni, <br />
                                            Batu Aji, Kota Batam, <br />
                                            Kepulauan Riau 29424
                                        </p>
                                    </section>
                                </div>

                                <div class="col-6 col-12-small">
                                    <section>
                                        <h3 class="icon solid fa-phone">Telepon</h3>
                                        <p>
                                            0812 345 678 90
                                        </p>
                                    </section>
                                </div>
                            </div>
                        </section>

                    </div>
                </div>
                <div id="copyright">
                    <ul>
                        <li>&copy; <a href="http://html5up.net">HTML5 UP</a> All right reserved.</li>
                        <li>Design by: <strong>Maranti Nainggolan</strong></li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

    <!-- Scripts -->
    <script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/jquery.dropotron.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/browser.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/breakpoints.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/util.js'); ?>"></script>
    <script src="<?= base_url('assets/js/main.js'); ?>"></script>

</body>

</html>