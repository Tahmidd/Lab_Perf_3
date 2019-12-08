<?php
	//session_start();
	if(isset($_COOKIE['uname'])){
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome Home Employee!! <?=$_COOKIE['uname']?></h1> 
	
	<a href="addjob.php">Job list</a> | 
	<a href="../php/logout.php">logout</a>

</body>	
</html>


<?php		
	}else{
		header('location: login.php');
	}

?>

