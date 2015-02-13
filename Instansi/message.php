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
				<li><a href="#">Pengaduan</a></li>
			</ul>

			<div class="row-fluid">
				
				<div class="span7">
					<h1>Inbox</h1>
					
					<ul class="messagesList">
						
						<li>
							<span class="from"><span class="glyphicons star"><i></i></span> Tegar <span class="glyphicons paperclip"><i></i></span></span><span class="title"> Ditemukan orang pacaran di taman jomblo.</span><span class="date">Today, <b>3:47 PM</b></span>
						</li>
						
					</ul>
					<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
						<div class="modal-content">
							<ul class="list-inline item-details">
								<li><a href="http://themifycloud.com">Admin templates</a></li>
								<li><a href="http://themescloud.org">Bootstrap themes</a></li>
							</ul>
						</div>
					</div>	
				</div>
				<div class="span5 noMarginLeft">
					
					<div class="message dark">
						
						<div class="header">
							<h1>"Ditemukan orang pacaran di taman jomblo."</h1>
							<div class="from"><i class="halflings-icon user"></i> <b>Tegar</b> / 13512061@std.stei.itb.ac.id</div>
							<div class="date"><i class="halflings-icon time"></i> Today, <b>3:47 PM</b></div>
							
							<div class="menu"></div>
							
						</div>
						
						<div class="content">
							<p>
								Lapor pak, sore hari tanggal 27 Januari 2015 saya menemukan sepasang kekasih memadu cinta di taman jomblo. Saya sebagai pengunjung setia taman jomblo merasa resah. Tolong ditindaklanjuti segera. Saya sudah melampirkan barang bukti
							</p>
						</div>
						
						<div class="attachments">
							<ul>
								<li>
									<span class="label label-important">jpg</span> <b>foto orang pacaran.jpg</b> <i>(2,5MB)</i>
									<span class="quickMenu">
										<a href="#" class="glyphicons search"><i></i></a>
										<a href="#" class="glyphicons share"><i></i></a>
										<a href="#" class="glyphicons cloud-download"><i></i></a>
									</span>
								</li>
							</ul>		
						</div>
						
						<form class="replyForm"method="post" action="">

							<fieldset>
							  <div class="control-group">
								<label class="control-label" for="selectError2">Kirim Pengaduan</label>
								<div class="controls">
									<select data-placeholder="Masukkan instansi terkait" id="selectError2" data-rel="chosen">
										<option value=""></option>
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
							  <br><br><br><br>
								<div class="actions">									
									<button tabindex="3" type="submit" class="btn btn-success">Kirim Pengaduan</button>
								</div>

							</fieldset>

						</form>	
						
					</div>	
					
				</div>
						
			</div>
			
       

	</div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
<?php require "footer.php"; ?>					
