<<<<<<< HEAD
<?php 
if(!isset($_COOKIE["Username"])) {
    header('Location: index.php');
} else {
    $username=$_COOKIE["Username"];
}
?>

=======
<?php $username =  $_GET['username'] ?>
>>>>>>> 8fd45e4cd168b7bfee389a8cc44383f359402f20
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
				<li><a href="#">Cetak Laporan</a></li>
			</ul>

			<div id="content" class="span10">
			
						
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Form Cetak Laporan</h2>
					</div>
					<div class="box-content">
<<<<<<< HEAD
						<form class="form-horizontal" action="printdummy.php" method="GET">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nama File</label>
							  <div class="controls">
								<input type="text" size="35" name="filename">
							  </div>
							</div>
							<div class="control-group">
=======
						<form class="form-horizontal" action="../laporan/index.php" method="GET">
						  <fieldset>
							<div class="control-group">
>>>>>>> 8fd45e4cd168b7bfee389a8cc44383f359402f20
							  <label class="control-label" for="date01">Tanggal awal</label>
							  <div class="controls">
								<input type="date" id="date01" name="startdate" value="02/16/14">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal akhir</label>
							  <div class="controls">
								<input type="date"  id="date02" name="finishdate" value="02/16/15">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Cetak Laporan</button>
							  <button type="reset" class="btn">Batal</button>
							</div>
						  </fieldset>
						</form>   

					</div>
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
