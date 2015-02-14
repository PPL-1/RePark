<html>

<body>

    <script type="text/javascript">
    function ajaxFunction() {
        var httpxml;
        try {
            // Firefox, Opera 8.0+, Safari
            httpxml = new XMLHttpRequest();
        } catch (e) {
            // Internet Explorer
            try {
                httpxml = new ActiveXObject("Msxml2.XMLHTTP");
            } catch (e) {
                try {
                    httpxml = new ActiveXObject("Microsoft.XMLHTTP");
                } catch (e) {
                    alert("Your browser does not support AJAX!");
                    return false;
                }
            }
        }

        function stateChanged() {
            if (httpxml.readyState == 4) {
                var width = httpxml.responseText;
                myForm.width.value = width;
                document.getElementById("txtHint").innerHTML = "<img src=images/bar.gif height=10 width=" + width + "><br>width=" + width;
                document.getElementById("p1").value = width;

            }
        }

        function getFormData(myForm) {
            var myParameters = new Array();
            for (var i = 0; i < myForm.elements.length; i++) {
                var sParam = encodeURIComponent(myForm.elements[i].name);
                sParam += "=";
                sParam += encodeURIComponent(myForm.elements[i].value);
                myParameters.push(sParam);
            }
            return myParameters.join("&");
        }



        var url = "progress-bar.php";
        var myForm = document.forms[0];

        var parameters = getFormData(myForm);
        //alert(parameters);
        httpxml.onreadystatechange = stateChanged;
        httpxml.open("POST", url, true)
        httpxml.setRequestHeader("Content-type", "application/x-www-form-urlencoded")
        httpxml.send(parameters)
            ///////////////////////////////////////////////////////////


        //////////////////////////////////////////////////////////
    }

    /////////////////////////

    function timer() {
        ajaxFunction();
        if (myForm.width.value < 180) {
            setTimeout('timer()', 1000);
        }
    }
    </script>
</body>
<form name="myForm" onsubmit="timer(); return false">
    <input type=hidden name=width value=20>
    <input type=submit value=Start>
</form>

<div id="txtHint"><img src=images/bar.gif height=10 width=10>
</div>
<br>
<br>
<progress value="0" max="200" id=p1>50% </progress>
</body>

</html>

Same way here is our progressbar.php file.
<?Php $width=$_POST[ 'width']; $width=$width+20; echo $width; ?>
