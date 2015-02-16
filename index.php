<?php include 'header.php' ?>
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
<!--                             <div class="search-box">
                                <div id="sb-search" class="sb-search">
                                    <form>
                                        <input class="sb-search-input" placeholder="Tulis yang akan anda cari..." type="search" name="search" id="search">
                                        <input class="sb-search-submit" type="submit" value="">
                                        <span class="sb-icon-search"> </span>
                                    </form>
                                </div>
                            </div>
                            <script src="js/classie.js"></script>
                            <script src="js/uisearch.js"></script>
                            <script>
                            new UISearch(document.getElementById('sb-search'));
                            </script>
 -->                            
                        </li>
                    </ul>
                </div>
                <div class="clearfix"> </div>

            </div>
            <div class="head-nav">
                <span class="menu"> </span>
                <ul>
                    <li><a href="tentangkami.php">tentang kami</a>
                    </li>
                    <li class="active"><a href="index.php">beranda</a>
                    </li>
                    <li><a href="kirimaduan.php">kirim aduan</a>
                    </li>
                    <li><a href="cariaduan.php">Daftar aduan</a>
                    </li>
                    <li><a href="daftartaman.php">daftar taman</a>
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
    </div>

    <div class="wmuSlider example1 section" id="section-1">
        <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-info">
                <h1>Selamat datang di Repark<span> Sistem Pelaporan Online Taman di Bandung</span></h1>
            </div>
        </article>
        <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-info">
                <h1>Selamat datang di Repark<span> Sistem Pelaporan Online Taman di Bandung</span></h1>
            </div>
        </article>
        <article style="position: absolute; width: 100%; opacity: 0;">
            <div class="banner-info">
                <h1>Selamat datang di Repark<span> Sistem Pelaporan Online Taman di Bandung</span></h1>
            </div>
        </article>
        <ul class="wmuSliderPagination">
            <li><a href="#" class="">0</a>
            </li>
            <li><a href="#" class="">1</a>
            </li>
            <li><a href="#" class="">2</a>
            </li>
        </ul>
    </div>

    <!-- script -->
    <script src="js/jquery.wmuSlider.js"></script>
    <script>
    $('.example1').wmuSlider();
    </script>
    <!-- script -->
</div>
<!-- header -->

<!-- content -->
<div class="content">
    <div class="container">
        <div class="row grids">
            <div class="col-md-4 grid1" style="padding-left:75px">
                <a href="#">
                    <a href="kirimaduan.php"><img src="images/img1.jpg" class="img-responsive" alt="" /></a>
                    <h3>mengadu</h3>
                    <div class="look">
                        <ul>
                            <li>
                                <h4>Kirim aduan ke Pemerintah</h4>
                            </li>
                            <li><i class="arrow"></i>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-md-4 grid2" style="padding-left:75px">
                <a href="#">
                    <a href="cariaduan.php"><img src="images/img1.jpg" class="img-responsive" alt="" /></a>
                    <h3>mencari</h3>
                    <div class="look1">
                        <ul>
                            <li>
                                <h4>Cari aduan yang dikirimkan</h4>
                            </li>
                            <li><i class="arrow"></i>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="col-md-4 grid3" style="padding-left:75px">
                <a href="#">
                    <a href="daftartaman.php"><img src="images/img1.jpg" class="img-responsive" alt="" /></a>
                    <h3>lihat taman</h3>
                    <div class="look2">
                        <ul>
                            <li>
                                <h4>Melihat taman di Bandung</h4>
                            </li>
                            <li><i class="arrow"></i>
                            </li>
                        </ul>
                    </div>
                </a>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- content -->
<!-- events -->
<!-- 	<div class="events">
		<div class="container">
			<div class="col-md-6 upcoming">
				<h3>UPCOMING EVENTS</h3>
				<div class="family">
					<div class="twenty">
						<h4>20</h4>
						<p>JULY</p>
					</div>
					<div class="sunday">
						<h5>FAMILY SUNDAY</h5>
						<p>Sunday | 9:30am</p>
					</div>
					<div class="mor">
						<a class="more" href="#">MORE</a>
					</div>
						<div class="clearfix"> </div>
				</div>
				<div class="family">
					<div class="twenty">
						<h4>20</h4>
						<p>JULY</p>
					</div>
					<div class="sunday">
						<h5>FAMILY SUNDAY</h5>
						<p>Sunday | 9:30am</p>
					</div>
					<div class="mor">
						<a class="more" href="#">MORE</a>
					</div>
						<div class="clearfix"> </div>
				</div>
				<div class="family">
					<div class="twenty">
						<h4>20</h4>
						<p>JULY</p>
					</div>
					<div class="sunday">
						<h5>FAMILY SUNDAY</h5>
						<p>Sunday | 9:30am</p>
					</div>
					<div class="mor">
						<a class="more" href="#">MORE</a>
					</div>
						<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 oaks">
				<h3>SEVENOAKS</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				<a class="read" href="#">READ MORE >></a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div> -->
<!-- events -->
<?php include 'footer.php' ?>
