<?php
	include 'header.php'
?>
<body>
<!-- header -->
	<div class="banner">
		<div class="container">
			<div class="header">
				<div class="head-bann">
						<div class="logo">
							<a href="index.php"><img src="images/logo.png" alt=""></a>
						</div>
						<div class="head-part">
								<ul>
									<li><a href="#">Menu1 |</a></li>
									<li><a href="#">Menu2 |</a></li>
									<li><a href="contact.php">Menu3</a></li>
									<li><!-- start search-->
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
																new UISearch( document.getElementById( 'sb-search' ) );
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
									<li><a href="about.php">tentang</a></li>
									<li><a href="index.php">beranda</a></li>
									<li><a href="events.php">menu1</a></li>
									<li><a href="shop.php">menu2</a></li>
									<li class="active"><a href="contact.php">menu3</a></li>
									<div class="clearfix"> </div>
							</ul>
					</div>
						<div class="clearfix"> </div>
				
					<!-- script-for-nav -->
					<script>
						$( "span.menu" ).click(function() {
						  $( ".head-nav ul" ).slideToggle(300, function() {
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
						<input type="text" placeholder="Email" required="">
						<input type="text" placeholder="Judul Aduan" required="">
						<textarea placeholder="Isi Aduan" required=""></textarea>
						<input type="submit" value="Kirim">
					</form>
				</div>
				<div class="col-md-6 contact-info">
					<h3>Informasi Kntak</h3>
					<p>In pharetra dui vitae odio maximus vulputate. Nul
						am finibus dui more neque dui vitae odio maximu.
						In pharetra dui vitae odio maximus vulputate. Null
						finibus dui more neque.odio maximus vulputate. 
						Nulla odio maximus vulputate. Nulla odio maxi.
					</p>
					<h6>Dinas Pertamanan dan Pemakaman
					<span>756 gt globel Place,</span>
						CD-Road,M 07 435.
					</h6>
					<p>Telephone: +1 234 567 9871
					<span>FAX: +1 234 567 9871</span>
					E-mail: <a href="sevenoaks0@example@example.com">mail@user.com</a>
					</p>
				</div>
				<div class="clearfix"> </div>

			
		</div>
	</div>
<!-- contact -->
<?php
	include 'footer.php'
?>