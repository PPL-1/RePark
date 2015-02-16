<?php 
    ini_set('display_errors', 1);
    include 'header.php';
      require 'database/config.php';

      $conn = getConnection();
      
      function write_date($date) {
		$num_to_mon = array(
		"01" => "Januari",
		"02" => "Februari",
		"03" => "Maret",
		"04" => "April",
		"05" => "Mei",
		"06" => "Juni",
		"07" => "Juli",
		"08" => "Agustus",
		"09" => "September",
		"10" => "Oktober",
		"11" => "November",
		"12" => "Desember"
		);					
		$splitted = explode("-",$date);
		$splittedHD = explode(" ",$splitted[2]);
		$result = $splittedHD[0]." ".$num_to_mon[$splitted[1]]." ".$splitted[0]." ".$splittedHD[1];
		//$result = $splitted[2]."  ";
		echo $result;
	  }
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
                <div class="searchaduan">
                    <label for="Cari"> Cari Aduan</label>
                    <input id="query" type="text" placeholder="Masukkan kata kunci">
                    <button onclick="searchpengaduan()"> Cari </button>
                </div>
                <div id="aduans">
                    <?php
                        $query = "SELECT * FROM Pengaduan LIMIT 5";
                        $q_result = mysqli_query($conn,$query);
                        if (!$q_result) 
                        {
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
                                        write_date($row["Tanggal"]);
                                     ?> | <?php echo $row['Lokasi'] ?></h6>
                                     <h6><b><?php echo "Status : ".$row['Status']?></b></h6>
                                     <?php echo "<a style=\"text-decoration:none\"href=\"detailpengaduan.php?id=".$row['Id']."\"><h3>".$row['Judul']."</h3></a>" ?>
                                    <p><?php echo implode(' ', array_slice(explode(' ', $row['Isi']), 0, 20))."....."; ?></p>
                                    <br>
                                    <h6>Oleh : <?php echo $row['Nama'] ?></h6>
                                </div>
                            <?php
                        }
                    echo "<div style=\"text-align:center;margin:1em;\"><a onclick=\"showpengaduan(10)\"><input class=\"Selanjutnya\"type=\"submit\" value=\"Selanjutnya\"></a></div>";
                    ?>
                </div>
            </div>
        </div>
    </div>


    </div>
    <!-- events -->
    <!--    <div class="events">
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
    <script>
    function showpengaduan(n) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("aduans").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "showpengaduan.php?jumlah="+n, true);
    xmlhttp.send();
}
</script>
    <script>
    function searchpengaduan() {
        var query = document.getElementById("query").value;
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("aduans").innerHTML = xmlhttp.responseText;
        }
    }
    console.log(query);
    xmlhttp.open("GET", "searchpengaduan.php?query="+query, true);
    xmlhttp.send();
}
</script>


    <?php mysqli_close($conn);

    include 'footer.php' ?>
