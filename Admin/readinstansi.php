<?php 
if(!isset($_COOKIE["Username"])) {
    header('Location: index.php');
} else {
    $username=$_COOKIE["Username"];
}
?>

<?php require "header.php"; ?>
	
		<div class="container-fluid-full">
		<div class="row-fluid">
<?php require "sidebar.php"; ?>					
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><a href="#">Delete Taman</a></li>
			</ul>

			<div id="content" class="span10">
			
						
			<div class="row-fluid sortable">
				<div class="box span12">
						  <?php 
								require '../database/config.php';
								$koneksi 	= getConnection();
								//$query 		= "UPDATE `Pengaduan` SET `Tanggal`='2015-02-26 00:00:01' WHERE (mod(Id,2) = 0)";
								$query 		= "SELECT * FROM Instansi";
								$result 	= getResultFromQuery($koneksi, $query);

								if($result->num_rows > 0)
								{
									while($row = $result->fetch_assoc()) {
										echo "<div class=\"box-header\" data-original-title>
											<h2><i class=\"halflings-icon white edit\"></i><span class=\"break\"></span>Update Taman</h2>
											</div>
											<div class=\"box-content\">
											<form class=\"form-horizontal\" action=\"../laporan/index.php\" target=\"_blank\"method=\"GET\">
											<fieldset>
											<div class=\"control-group\">
											  <label class=\"control-label\" for=\"date01\">Username</label>
											  <div class=\"controls\">
												<span class=\"input-xlarge uneditable-input\" type=\"text\" id=\"date01\" name=\"username\">".$row["Username"]."</span>
											  </div>
											</div>

											<div class=\"control-group\">
											  <label class=\"control-label\" for=\"date01\">Email</label>
											  <div class=\"controls\">
												<span class=\"input-xlarge uneditable-input\" type=\"text\" id=\"date01\" name=\"username\">".$row["Email"]."</span>
											  </div>
											</div>

											<div class=\"control-group\">
											  <label class=\"control-label\" for=\"date01\">Password</label>
											  <div class=\"controls\">
												<span class=\"input-xlarge uneditable-input\" type=\"text\" id=\"date01\" name=\"username\">".$row["Password"]."</span>
											  </div>
											</div>";
									}
								}

							closeConnection($koneksi);	
							 ?>

				</div><!--/span-->

			</div><!--/row-->
    

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
			
	<div class="clearfix"></div>
	
<?php require "footer.php"; ?>					
