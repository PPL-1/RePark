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
                <li><a href="#">Pengaduan</a>
                </li>
            </ul>

            <div class="row-fluid">

                <div class="span7">
                    <h1>Inbox</h1>
                    <ul class="messagesList">
                        <?php require ( 'getpengaduan.php'); ?>

                    </ul>
                    <div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-content">
                            <ul class="list-inline item-details">
                                <li><a href="http://themifycloud.com">Admin templates</a>
                                </li>
                                <li><a href="http://themescloud.org">Bootstrap themes</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div id="contentpengaduan">


                </div>

            </div>

        </div>



    </div>
    <!--/.fluid-container-->

    <!-- end: Content -->
</div>
<!--/#content.span10-->
</div>
<!--/fluid-row-->

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
<script src="js/jquery-1.9.1.min.js"></script>

<script>
$(function() {
    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return sParameterName[1];
            }
        }
    }
    var value = getUrlParameter('username');
        console.log("ready!");
    var cookie = $.cookie('name');
    $.cookie('name', value);
    var cookie = $.cookie('name');
    $('#username').html(cookie);
        console.log(cookie);
});
</script>

<script>
function showpengaduan(id) {
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp = new XMLHttpRequest();
    } else {
        // code for IE6, IE5
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("contentpengaduan").innerHTML = xmlhttp.responseText;
        }
    }
    xmlhttp.open("GET", "showpengaduan.php?id="+id, true);
    xmlhttp.send();
}
</script>

<?php require "footer.php"; ?>
