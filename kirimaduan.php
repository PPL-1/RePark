<?php 
    ini_set('display_errors', 1);
    include 'header.php';
    require 'database/config.php';

    $conn = getConnection();
?>

<body>
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
                        <li class="active"><a href="kirimaduan.php">Kirim Aduan</a>
                        </li>
                        <li><a href="cariaduan.php">Daftar Aduan</a>
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
                <h2>Kirimkan aduan anda</h2>
            </div>
        </div>
    </div>
    <!-- header -->
    <!-- contact -->
    <div class="contact">
        <div class="container">
            <h3>Formulir Pengaduan</h3>
            <div class="col-md-6 contact-form news">
                <form name="kirim_adu" method="post" onsubmit="return is_no_telp_valid()">
                    <input type="text" placeholder="Nama Lengkap" required="true" id="nama" name="nama">
                    <input type="text" placeholder="Nomor Telepon (0xxxxxxxxxxx)" required="true" id="no_telp" name="no_telp">
                    <input type="text" placeholder="Judul Aduan" required="true" id="judul" name="judul">
                    <textarea placeholder="Isi Aduan" required="true" id="isi" name="isi"></textarea>
                    <input type="submit" value="Kirim">
                </form>
                <?php
                    //$query = "INSERT INTO `Pengaduan`(`Judul`,`Nama`,`Telepon`, `Isi`) VALUES (".$_POST["judul"].",".$_POST["nama"].",".$_POST["no_telp"].",".$_POST["isi"].")";
                    //$result = mysqli_query($conn,$query) or die("Unable to execute query");
                ?>
            </div>
            <div class="col-md-6 contact-info">
                <h3>Kirimkan Aduan Anda</h3>
                <p>
	                Masalah di Kota Bandung tidak akan bisa diselesaikan oleh Pemerintah saja. Kami membutuhkan bantuan anda untuk mewujudkan Bandung Juara
                </p>
                <h6>Dinas Pertamanan dan Pemakaman
                    <span>Jalan Ganesha 10 Kelurahan Lebak Siliwangi Kecamatan Coblong</span>
                        Kota Bandung
                    </h6>
                <p>Telephone: +1 234 567 9871
                    <span>FAX: +1 234 567 9871</span> E-mail: <a href="sevenoaks0@example@example.com">mail@user.com</a>
                </p>
            </div>
            <div class="clearfix"> </div>


        </div>
    </div>
    <!-- contact -->
    <?php 
        if(isset($_POST["judul"]) && isset($_POST["nama"]) && isset($_POST["no_telp"]) && isset($_POST["isi"]))
        {
            //$query = "INSERT INTO post (Title, Content, Date) VALUES ('" . $_POST["Judul"] . "', '" . $_POST["Konten"] . "', '" . to_date_type($_POST["Tanggal"]). "')";
            $query = "INSERT INTO Pengaduan(Judul,Nama,Telepon,Isi) VALUES ('".$_POST["judul"]."','".$_POST["nama"]."','".$_POST["no_telp"]."','".$_POST["isi"]."')";
            //$query = "INSERT INTO `Pengaduan`(`Judul`,`Nama`,`Telepon`, `Isi`) VALUES (".$_POST["judul"].",".$_POST["nama"].",".$_POST["no_telp"].",".$_POST["isi"].")";
            $result = mysqli_query($conn,$query) or die("Unable to execute query");
            mysqli_close($conn);
        }
        include 'footer.php'; 
    ?>

<script type="text/javascript">
function is_no_telp_valid()
{
    var no_telp = document.forms["kirim_adu"]["no_telp"].value;
    var regex = /(0([0-9])+)/;
    if(!no_telp.match(regex))
    {
        alert("Cek kembali nomor telepon Anda");
        return false;
    }
    alert("Terima kasih atas inputan Anda\n Pengaduan Anda akan kami proses secepatnya")
    
}
</script>