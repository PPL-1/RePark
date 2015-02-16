<?php 

require '../database/config.php';

      $conn = getConnection();

      $pengguna = $_POST['user-name'];
      $katapass = $_POST['pass-word'];

	$sql = "SELECT * FROM Admin Where Username='".$pengguna."' AND Password='".$katapass."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	$cookie_name = "Username";
			$cookie_value = $pengguna;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
			header('Location: message.php');
	    }
	} else {
		echo ("<script type='text/javascript'>alert('Username atau password error cuk');</script>");
		// header('Location: index.php');
	}
	$conn->close();
 ?>