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
                        <a href="#">Tentang Kami</a>
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
                    <li><a href="<?= base_url('/dashboard'); ?>">Dashboard</a></li>
                </ul>
            </nav>

        </section>

        <?= $this->renderSection('content'); ?>

        <!-- Footer -->
        <section id="footer" class="wrapper">
            <div id="copyright">
                <ul>
                    <li>&copy; <a href="http://html5up.net">HTML5 UP</a> All right reserved.</li>
                    <li>Design by: <strong>Maranti Nainggolan</strong></li>
                </ul>
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