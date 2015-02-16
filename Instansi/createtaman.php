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
				<li><a href="#">Create Taman</a></li>
			</ul>

			<div id="content" class="span10">
			
						
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="halflings-icon white edit"></i><span class="break"></span>Tambah Taman</h2>
					</div>
					<div class="box-content">
						<form class="form-horizontal" action="createtamanhandler.php"method="POST">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="date01">Nama Taman</label>
							  <div class="controls">
								<input type="text" id="date01" name="namataman">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Alamat</label>
							  <div class="controls">
								<input type="text"  id="date02" name="alamattaman">
							  </div>
							</div>

							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Tambah</button>
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
