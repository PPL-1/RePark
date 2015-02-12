<?php include 'header.php' ?>

<body>
    <!-- header -->
    <div class="banner">
        <div class="container">
            <div class="header">
                <div class="head-bann">
                    <div class="logo">
                        <a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" />
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
                            <li><a href="kirimaduan.php">Menu3</a>
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
                        <li class="active"><a href="tentangkami.php">Tentang Kami</a>
                        </li>
                        <li><a href="index.php">Beranda</a>
                        </li>
                        <li><a href="kirimaduan.php">Kirim Aduan</a>
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
                <h2>Tentang kami</h2>
            </div>
        </div>
    </div>
    <!-- header -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <div class="col-md-7 mission">
                <h3>Visi</h3>
                <p>Terciptanya Kota Bandung yang Dinamis Berwawasan Lingkungan</p>
                <h3>Misi</h3>
                <p>Memelihara, mempertahankan(preservasi), dan memperluas ruang terbuka hijau kota Bandung.</p>
                <p>Melaksanakan pengelolaan lampu penerangan jalan umum, dekorasi kota dan reklame.</p>
            </div>
            <div class="col-md-5 mission-1">
                <ul>
                    <li>
                        <a href="#">
                            < Visi Misi</a>
                    </li>
                    <li><a href="#">Menu1</a>
                    </li>
                    <li><a href="#">Menu2</a>
                    </li>
                    <li><a href="#">Menu3</a>
                    </li>
                    <li><a href="#">Menu4</a>
                    </li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- sbout -->
    <?php include 'footer.php' ?>
