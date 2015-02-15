<?php include 'header.php' ?>

<body>
    <!-- header -->
    <div class="banner">
        <div class="container">
            <div class="header">
                <div class="head-bann">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" alt="">
                        </a>
                    </div>
                    <div class="titlelogo">
                        <h3>Repark | Sistem Pengaduan Online Taman Bandung</h3>
                    </div>

                    <div class="head-part">
                        <ul>
                            <li><a href="admin/index.php">Login sebagai Admin</a>
                            </li>
                            <li><a href="instansi/index.php">Login sebagai Instansi</a>
                            </li>
                            <li>

                        </ul>
                    </div>
                    <div class="clearfix"> </div>

                </div>
                <div class="head-nav">
                    <span class="menu"> </span>
                    <ul>
                        <li><a href="tentangkami.php">Tentang Kami</a>
                        </li>
                        <li><a href="index.php">Beranda</a>
                        </li>
                        <li class="active"><a href="kirimaduan.php">Kirim Aduan</a>
                        </li>
                        <li><a href="cariaduan.php">Daftar Aduan</a>
                        </li>
                        <li><a href="daftartaman.php">Daftar Taman</a>
                        </li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>
                <div class="clearfix"> </div>

                <!-- script-for-nav -->
                <script>
                $("span.menu").click(function() {
                    $(".head-nav ul").slideToggle(300, function() {
                        // Animation complete.
                    });
                });
                </script>
                <!-- script-for-nav -->
            </div>
            <div class="banner-info1">
                <h2>Kirimkan aduan anda</h2>
            </div>
        </div>
    </div>
    <!-- header -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <h3>Formulir Pengaduan</h3>
            <div class="col-md-6 contact-form news">
                <form>
                    <input type="text" placeholder="Nama Lengkap" required="">
                    <input type="text" placeholder="Nomor Telepon" required="">
                    <input type="text" placeholder="Judul Aduan" required="">
                    <textarea placeholder="Isi Aduan" required=""></textarea>
                    <input type="submit" value="Kirim">
                </form>
            </div>
            <div class="col-md-6 contact-info">
                <h3>Kirimkan Aduan Anda</h3>
                <p>
                    Masalah di Kota Bandung tidak akan bisa diselesaikan oleh Pemerintah saja. Kami membutuhkan bantuan anda untuk mewujudkkan Bandung Juara
                </p>
                <h6>Dinas Pertamanan dan Pemakaman
                    <span>Jalan Ganesha 10 Kelurahan Lebak Siliwangi Kecamatan Coblong</span>
                        Kota Bandung
                    </h6>
                <p>Telephone: +1 234 567 9871
                    <span>FAX: +1 234 567 9871</span> E-mail: <a href="sevenoaks0@example@example.com">mail@user.com</a>
                </p>
            </div>
            <div class="clearfix"> </div>


        </div>
    </div>
    <!-- contact -->
    <?php include 'footer.php' ?>
