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
                            <li><a href="#">Menu1 |</a>
                            </li>
                            <li><a href="#">Menu2 |</a>
                            </li>
                            <li><a href="contact.php">Menu3</a>
                            </li>
                            <li>
                                <!-- start search-->
                                <div class="search-box">
                                    <div id="sb-search" class="sb-search">
                                        <form>
                                            <input class="sb-search-input" placeholder="Enter your search term..." type="search" name="search" id="search">
                                            <input class="sb-search-submit" type="submit" value="">
                                            <span class="sb-icon-search"> </span>
                                        </form>
                                    </div>
                                </div>
                                <!-- search-scripts -->
                                <script src="js/classie.js"></script>
                                <script src="js/uisearch.js"></script>
                                <script>
                                new UISearch(document.getElementById('sb-search'));
                                </script>
                                <!-- //search-scripts -->
                            </li>
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
                        <li><a href="cariaduan.php">Cari Aduan</a>
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
            <div class="col-md-6 contact-form">
                <form>
                    <input type="text" placeholder="Nama Lengkap" required="">
                    <input type="text" placeholder="Nomor Telepon" required="">
                    <input type="text" placeholder="Judul Aduan" required="">
                    <div class="controls" style="margin-botton:1em;font-size:18px;">
                        <select data-placeholder="Masukkan taman" id="selectError2" data-rel="chosen">
                            <option value=""></option>
                              <option>Dinas Pemakaman dan Pertamanan</option>
                              <option>Dinas Kebakaran</option>
                              <option>Dinas Kebersihan</option>
                              <option>Dinas Pariwisata dan Kebudayaan</option>
                              <option>Dinas Komunikasi dan Informasi</option>                                         
                              <option>Satpol PP</option>
                              <option>Kepolisian</option>                                         
                      </select>
                    </div>
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
