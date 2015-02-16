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
							<a href="index.php"><img src="images/logo.png" class="img-responsive" alt="" /></a>
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
									<li class="active"><a href="about.php">Tentang Kami</a></li>
									<li><a href="index.php">Beranda</a></li>
									<li><a href="events.php">Buat Laporan</a></li>
									<li><a href="shop.php">Lacak Laporan</a></li>
									<li><a href="contact.php">Cari Laporan</a></li>
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
						<h2>Tentang kami</h2>
					</div>
		</div>
	</div>
<!-- header -->
<!-- about -->
	<div class="about">
		<div class="container">
		
			<div class="col-md-7 mission">
			<h3>Visi Misi Kami</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ea praesentium ipsum, quisquam labore ex eaque, aliquam, quae odio sint debitis harum nisi a cum delectus repellendus. Accusamus voluptas vitae voluptatum.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt placeat saepe est impedit possimus! Soluta aut ullam inventore fugit officia reprehenderit totam delectus voluptatibus nihil. Quasi assumenda accusamus commodi repellat.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero quisquam, necessitatibus unde, ut suscipit pariatur natus cumque eum saepe ratione eveniet quod, sapiente soluta! Facere delectus ducimus, unde est tempora.</p>
			</div>
			<div class="col-md-5 mission-1">
				<ul>
					<li><a href="#">< Visi Misi</a></li>
					<li><a href="#">Menu1</a></li>
					<li><a href="#">Menu2</a></li>
					<li><a href="#">Menu3</a></li>
					<li><a href="#">Menu4</a></li>
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
<!-- sbout -->
<?php
	include 'footer.php'
?>