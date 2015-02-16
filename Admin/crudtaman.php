<?php if(!isset($_COOKIE[ "Username"])) { header( 'Location: index.php'); } else { $username=$_COOKIE[ "Username"]; } ?>

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
                <li><a href="#">Cetak Laporan</a>
                </li>
            </ul>

            <div id="content" class="span10">
				<div class="box black span10" onTablet="span6" onDesktop="<span></span>10">
					<div class="box-header">
						<h2><i class="halflings-icon white user"></i><span class="break"></span>Daftar Taman</h2>
						<div class="box-icon">
							<a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
z						</div>
					</div>
					<div class="box-content">
						<ul class="dashboard-list metro">
						</ul>
					</div>
				</div><!--/span-->
                </div>
                <!--/row-->
                <div style="text-align:center">
					<div style="text-align:center"class="btn btn-large btn-primary add-instansi">Add Taman</div>                	
                </div>


            </div>
            <!--/.fluid-container-->

            <!-- end: Content -->



        </div>
        <!--/.fluid-container-->

        <!-- end: Content -->
    </div>
    <!--/#content.span10-->
</div>
<!--/fluid-row-->

<div class="clearfix"></div>

<?php require "footer.php"; ?>
