<?php 
	ini_set('display_errors', 1);
	include 'header.php';
	  require 'database/config.php';
	  $conn = getConnection();
	  //test();
	  ?>
<body>
<?php 
$id = $_GET['id'];
 ?>
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
                        <li class="active"><a href="cariaduan.php">Daftar Aduan</a>
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
                <h2>Daftar aduan</h2>
            </div>
        </div>
    </div>
    <!-- header -->
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <?php
                	$query = "SELECT * FROM Pengaduan WHERE Id=".$id;
                	$q_result = mysqli_query($conn,$query);
			if (!$q_result) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
}
                	$arr_adu = array();
                	while($row = mysqli_fetch_array($q_result))
                	{
                		array_unshift($arr_adu, $row);
                	}
                	foreach ($arr_adu as $row) 
                	{
                		?>
                            <div class="aduan">
                                <h6><?php 
                                    $time = strtotime($row["Tanggal"]);
                                    $myFormatForView = date("l jS F Y", $time);
                                    echo $myFormatForView;
                                 ?> | <?php echo $row['Lokasi'] ?></h6>
                                 <?php echo "<a style=\"text-decoration:none\"href=\"detailpengaduan.php?id=".$row['Id']."\"><h3>".$row['Judul']."</h3></a>" ?>
                                <p><?php echo $row['Isi'] ?></p>
                                <br>
                                <h6>Oleh : <?php echo $row['Nama'] ?></h6>
                            </div>
                		<?php
                	}
                ?>
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
