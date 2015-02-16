<?php 

	$servername = "localhost";
	$usernamedb = "root";
	$passworddb = "";
	$dbname = "laportaman";
	$id = $_GET["id"];


	// Create connection
	$conn = new mysqli($servername, $usernamedb, $passworddb, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM Pengaduan WHERE Id=".$id;
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo ("<div class=\"span5 noMarginLeft\">
					
					<div class=\"message dark\">
						
						<div class=\"header\">
							<h1>".$row["Judul"]."</h1>
							<div class=\"from\"><i class=\"halflings-icon user\"></i> <b>".$row["Nama"]."</b> /".$row["Telepon"]."</div>
							<div class=\"date\"><i class=\"halflings-icon time\"></i><b>".$row["Tanggal"]."</b></div>
							
							<div class=\"menu\"></div>
							
						</div>
						
						<div class=\"content\">
							<p>
							".$row["Isi"]."
							</p>
						</div>
						
						<div class=\"attachments\">
							<ul>
								<li>
									<span class=\"label label-important\">jpg</span> <b>foto orang pacaran.jpg</b> <i>(2,5MB)</i>
									<span class=\"quickMenu\">
										<a href=\"#\" class=\"glyphicons search\"><i></i></a>
										<a href=\"#\" class=\"glyphicons share\"><i></i></a>
										<a href=\"#\" class=\"glyphicons cloud-download\"><i></i></a>
									</span>
								</li>
							</ul>		
						</div>
						
						<form class=\"replyForm\"method=\"post\" action=\"jawabpengaduanhandler.php\">
						<input name=\"idpengaduan\" type=\"hidden\" value=\"".$row["Id"]."\">


						");
						if ($row["Status"]=="Proses Moderasi")
						{
							echo ("<fieldset>
							  <div class=\"control-group\">
								<label class=\"control-label\" for=\"selectError2\">Kirim Pengaduan</label>
								<div class=\"controls\">
									<select data-placeholder=\"Masukkan instansi terkait\" id=\"selectError2\" data-rel=\"chosen\" name=\"instansi\">
										<option value=\"\"></option>
										  <option>Dinas Pemakaman dan Pertamanan</option>
										  <option>Dinas Kebakaran</option>
										  <option>Dinas Kebersihan</option>
  										  <option>Dinas Pariwisata dan Kebudayaan</option>
										  <option>Dinas Komunikasi dan Informasi</option>  										  
										  <option>Satpol PP</option>
										  <option>Kepolisian</option>										  
								  </select>
								</div>
							  </div>
								<div class=\"actions\">									
									<button tabindex=\"3\" type=\"submit\" class=\"btn btn-success\">Kirim Pengaduan</button>
								</div>
							</fieldset>");
						}
						if ($row["Status"]=="Terkirim")
						{
							echo "<p> Jawab Pengaduan </p>";
							echo "<textarea name=\"jawaban\" style=\"width:100%\" rows=\"15\" placeholder=\"Tuliskan Jawaban Pengaduan disini\"></textarea>";
							echo "<div class=\"actions\">									
									<button tabindex=\"3\" type=\"submit\" class=\"btn btn-success\">Jawab Pengaduan</button>
								</div>";
						}
						if ($row["Status"]=="Terjawab")
						{
							echo $row["Status"]." oleh ".$row["Instansi"];							
						}
						echo	("</form>	
						
					</div>");
	    }
	} else {
		echo ("<script type='text/javascript'>alert('Error cuk');</script>");
	}
	$conn->close();
 ?>