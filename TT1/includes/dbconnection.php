<?php  
	$conn = mysqli_connect('localhost', 'root', 'root','scheduling');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	//echo 'Connected successfully' . 'iancuello';
	mysqli_select_db( $conn,"scheduling");
?>