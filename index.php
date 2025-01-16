<?php include('header.php'); ?>

<div class="container">
    <div class="title-box">
        <h1>Selamat Datang ke Sistem Tempahan Kenderaan Rasmi Pejabat Pendidikan Daerah Muallim</h1>
    </div>
    <!-- Menu Box dengan Kedudukan Menegak -->
    <div class="menu-box" onclick="loadContent('/php/halamanutama.php')">
        <a href="#">Halaman Utama</a>
    </div>
    <div class="menu-box" onclick="loadContent('/php/senarai_kenderaan.php')">
        <a href="#">Senarai Kenderaan</a>
    </div>
    <div class="menu-box" onclick="loadContent('/php/borang_permohonan.php')">
        <a href="#">Borang Permohonan</a>
    </div>
    <div class="menu-box" onclick="loadContent('/php/kelulusan_pegawai_ppd.php')">
        <a href="#">Kelulusan</a>
    </div>
    <div class="menu-box" onclick="loadContent('/php/unit_pentadbiran.php')">
        <a href="#">Unit Pentadbiran</a>
    </div>
    <div class="menu-box" onclick="loadContent('/php/keputusan.php')">
        <a href="#">Keputusan</a>
    </div>
    <!-- Kandungan Dinamik -->
    <div class="content-box">
        <iframe id="content-frame" src="/php/index.php"></iframe>
    </div>
</div>

<?php include('footer.php'); ?>
