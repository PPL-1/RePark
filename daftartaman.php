<?php 
		require 'header.php';
		require 'database/config.php';
?>

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
                        <a href="index.php"><h3>Repark | Sistem Pengaduan Online Taman Bandung</h3></a>
                    </div>

                    <div class="head-part">
                        <ul>
                        <li><a href="Admin/index.php">Login sebagai Admin</a>
                        </li>
                        <li><a href="Instansi/index.php">Login sebagai Instansi</a>
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
                        <li><a href="kirimaduan.php">Kirim Aduan</a>
                        </li>
                        <li><a href="cariaduan.php">Daftar Aduan</a>
                        </li>
                        <li class="active"><a href="daftartaman.php">Daftar Taman</a>
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
                <h2>Taman-taman Di Kota Bandung</h2>
            </div>
        </div>
    </div>

	<div id="aduans">
        <?php
        	ini_set('display_errors', 1);
        	$koneksi 	= getConnection();
            $query 		= "SELECT * FROM Taman";
            $result 	= getResultFromQuery($koneksi, $query);
            
            if($result->num_rows > 0)
            {
                $arr_adu = array();
            
	            while($row = $result->fetch_assoc()) {
	                echo    '<div class="aduan">';
	                echo        '<h4>'.$row["NamaTaman"].'</h4>';
	                echo        '<h6>Alamat : '.$row["Alamat"].'</h6>';
	                echo    '</div>';
	            }
            }
            else
            {
            	printf("Error: %s\n", mysqli_error($koneksi));
                exit();
            }

            
        closeConnection($koneksi);
        ?>
    </div>
    <?php include 'footer.php' ?>
