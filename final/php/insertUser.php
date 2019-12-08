<?php
	
	require_once('../db/functions.php');

	if(isset($_POST['submit'])){

		$ename = $_POST['ename'];
		$cname = $_POST['cname'];
		$uname = $_POST['uname'];
		$cno = $_POST['cno'];
		$password = $_POST['pass'];
		$utype= $_POST['utype'];
		

		if(empty($ename) == true || empty($cname) == true || empty($uname) == true || empty($cno) == true ||empty($password) == true|| empty($utype) == true ){
			echo "null submission!";
		}else{

			$status = register($ename, $cname,$uname,$cno, $password, $utype);

			if($status){

				header('location: ../views/adduser.php?msg=success');
			}else{
				echo "error";
			}
		}

	}else{
		header('location: ../views/userhome.php');
	}


?>