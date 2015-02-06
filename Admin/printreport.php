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
						<form class="form-horizontal">
						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Nama File</label>
							  <div class="controls">
								<input type="text" size="35">
							  </div>
							</div>
							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal awal</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date01" value="02/16/12">
							  </div>
							</div>

							<div class="control-group">
							  <label class="control-label" for="date01">Tanggal akhir</label>
							  <div class="controls">
								<input type="text" class="input-xlarge datepicker" id="date02" value="02/16/12">
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
