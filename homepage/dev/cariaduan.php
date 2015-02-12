<?php include 'header.php';
	  require '../../database/config.php';

	  $conn = getConnection();
	  //test();
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
                        <li><a href="kirimaduan.php">Kirim Aduan</a>
                        </li>
                        <li class="active"><a href="cariaduan.php">Cari Aduan</a>
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
                <h2>Cari aduan</h2>
            </div>
        </div>
    </div>
    <!-- header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="searchaduan">
                    <label for="Cari"> Cari Aduan</label>
                    <input type="text">
                </div>
                <div class="aduan">
                    <h6>25 Januari 2015 | Taman Jomblo</h6>
                    <h3>Pencurian di Taman Jomblo</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero totam aperiam et sequi minus, rem ipsa ipsam iste amet at, molestiae voluptate saepe voluptatibus eaque quam maiores tenetur quaerat dolore.</p>
                    <br>
                    <br>
                    <br>
                    <h6>Oleh : Husain the Jombloers</h6>
                </div>
                <?php
                	$query = "SELECT * FROM pengaduan";
                	$q_result = mysqli_query($conn,$query);
                	$arr_adu = array();
                	while($row = mysqli_fetch_array($q_result))
                	{
                		array_unshift($arr_adu, $row);
                	}
                	foreach ($arr_adu as $row) 
                	{
                		?>
                			<div class="aduan">
                				<h6> | <?php echo $row['Lokasi'] ?></h6>
                				<h3><?php echo $row['Judul'] ?></h3>
                				<p><?php echo $row['Isi'] ?></p>
                				<br>
                				<br>
                				<br>
                				<h6>Oleh : <?php echo $row['Nama'] ?></h6>
                			</div>
                		<?php
                	}
                ?>
                <p style="float:left;margin:15px"><< Sebelum</p>
				<p style="float:right;margin:15px">Sesudah >></p>
            </div>
        </div>
    </div>


    </div>
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
 -->
    <!-- events -->
    <?php mysqli_close($conn);
    include 'footer.php' ?>
