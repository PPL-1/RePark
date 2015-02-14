<?php 

	$servername = "akhfa.in";
	$username = "laportaman";
	$password = "RePark";
	$dbname = "laportaman";
	$pengguna = $_POST["user-name"];
	$katapass = $_POST["pass-word"];


	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 

	$sql = "SELECT * FROM Admin Where Username='".$pengguna."' AND Password='".$katapass."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
			header('Location: message.php?username='.$row['Username']);
	    }
	} else {
		echo ("<script type='text/javascript'>alert('Username atau password error cuk');</script>");
	}
	$conn->close();
	echo "<input type=\"hidden\" value=\"".$row['Username']."\" id=\"username\" />";
 ?>

 <script>
$(function() {
    var value = $("input#username").val();;
        console.log("ready!");
    var cookie = $.cookie('name');
    $.cookie('name', value);
});
</script>
