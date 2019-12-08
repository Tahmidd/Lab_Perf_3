<?php
	session_start();
	require_once('../db/functions.php');
	//define(name, value)
	
	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			$count = validate($uname, $password);

			if($count > 0 && $utype='Admin'){
				
				$_SESSION['uname'] = $uname;
				$_SESSION['password'] = $password;

				setcookie("uname", $uname, time()+3600, "/");
				header('location: ../views/home.php');

			}
			elseif($count > 0 && $utype!='Employee'){
				
				$_SESSION['uname'] = $uname;
				$_SESSION['password'] = $password;

				setcookie("uname", $uname, time()+3600, "/");
				header('location: ../views/userhome.php');

			}else{
				echo "invalid username/password";
			}
		}
	}else{
		header('location: ../views/login.php');
	}


?>