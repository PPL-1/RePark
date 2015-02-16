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
    <!-- header -->
    <!-- events -->
    <!-- 	<div class="shop">
		<div class="container">
			<div class="row grids-1">
				<div class="col-md-4 fam">
				  <a href="single.php">
					<img src="images/shp1.jpg" class="img-responsive" alt=""/>
					<div class="veiw-img-mark">
							<a href="single.php">Quick view</a>
						</div>
					<div class="look-2">	
						<div class="f-su-1">
							<h4>E-Book</h4>
						</div>
						<div class="mnth-1">
							<h6>£4.99</h6>
						</div>
						<div class="clearfix"> </div>
					</div></a>
				</div>
				<div class="col-md-4 fam">
				   <a href="single.php">
					<img src="images/shp2.jpg" class="img-responsive" alt=""/>
					<div class="veiw-img-mark">
							<a href="single.php">Quick view</a>
						</div>
					<div class="look-2">	
						<div class="f-su-1">
							<h4>SevenOaks Mug</h4>
						</div>
						<div class="mnth-1">
							<h6>£1.99</h6>
						</div>
						<div class="clearfix"> </div>
					</div></a>
				</div>
				<div class="col-md-4 fam">
				 <a href="single.php">
					<img src="images/shp3.jpg" class="img-responsive" alt=""/>
					<div class="veiw-img-mark">
							<a href="single.php">Quick view</a>
						</div>
					<div class="look-2">	
						<div class="f-su-1">
							<h4>SevenOaks T-Shirt</h4>
						</div>
						<div class="mnth-1">
							<h6>£15.99</h6>
						</div>
						<div class="clearfix"> </div>
					</div></a>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="row grids-2">
				<div class="col-md-4 fam">
				  <a href="single.php">
					<img src="images/shp1.jpg" class="img-responsive" alt=""/>
					<div class="veiw-img-mark">
							<a href="single.php">Quick view</a>
						</div>
					<div class="look-2">	
						<div class="f-su-1">
							<h4>E-Book</h4>
						</div>
						<div class="mnth-1">
							<h6>£4.99</h6>
						</div>
						<div class="clearfix"> </div>
					</div></a>
				</div>
				<div class="col-md-4 fam">
				  <a href="single.php">
					<img src="images/shp2.jpg" class="img-responsive" alt=""/>
					<div class="veiw-img-mark">
							<a href="single.php">Quick view</a>
						</div>
					<div class="look-2">	
						<div class="f-su-1">
							<h4>SevenOaks Mug</h4>
						</div>
						<div class="mnth-1">
							<h6>£1.99</h6>
						</div>
						<div class="clearfix"> </div>
					</div></a>
				</div>
				<div class="col-md-4 fam">
				  <a href="single.php">
					<img src="images/shp3.jpg" class="img-responsive" alt=""/>
					<div class="veiw-img-mark">
							<a href="single.php">Quick view</a>
						</div>
					<div class="look-2">	
						<div class="f-su-1">
							<h4>SevenOaks T-Shirt</h4>
						</div>
						<div class="mnth-1">
							<h6>£15.99</h6>
						</div>
						<div class="clearfix"> </div>
					</div></a>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
 -->
    <!-- events -->
    <?php include 'footer.php' ?>
