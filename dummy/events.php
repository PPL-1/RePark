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
									<li><a href="about.php">Tentang Kami</a></li>
									<li><a href="index.php">Beranda</a></li>
									<li class="active"><a href="events.php">Buat Laporan</a></li>
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
						<h2>Apalah itu</h2>
					</div>
		</div>
	</div>
<!-- header -->

<!-- events -->
<!-- 	<div class="events">
		<div class="container">
			<div class="row grids-1">
				<div class="col-md-4 fam">
				  
					<img src="images/eve1.jpg" class="img-responsive" alt=""/>
					<div class="look-1">	
						<div class="f-su">
							<h4>FAMILY SUNDAY</h4>
						</div>
						<div class="mnth">
							<h5>30th</h5>
							<p>july</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 fam">
				 
					<img src="images/eve2.jpg" class="img-responsive" alt=""/>
					<div class="look-1">	
						<div class="f-su">
							<h4>FESTIVAL</h4>
						</div>
						<div class="mnth">
							<h5>30th</h5>
							<p>july</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 fam">
				
					<img src="images/eve3.jpg" class="img-responsive" alt=""/>
					<div class="look-1">	
						<div class="f-su">
							<h4>SEMINAR</h4>
						</div>
						<div class="mnth">
							<h5>30th</h5>
							<p>july</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
			<div class="row grids-2">
				<div class="col-md-4 fam">
				 
					<img src="images/eve1.jpg" class="img-responsive" alt=""/>
					<div class="look-1">	
						<div class="f-su">
							<h4>FAMILY SUNDAY</h4>
						</div>
						<div class="mnth">
							<h5>30th</h5>
							<p>july</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 fam">
				  
					<img src="images/eve2.jpg" class="img-responsive" alt=""/>
					<div class="look-1">	
						<div class="f-su">
							<h4>FESTIVAL</h4>
						</div>
						<div class="mnth">
							<h5>30th</h5>
							<p>july</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 fam">
				 
					<img src="images/eve3.jpg" class="img-responsive" alt=""/>
					<div class="look-1">	
						<div class="f-su">
							<h4>SEMINAR</h4>
						</div>
						<div class="mnth">
							<h5>30th</h5>
							<p>july</p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
					<div class="clearfix"> </div>
			</div>
		</div>
	</div>
 --><!-- events -->
<?php
	include 'footer.php'
?>