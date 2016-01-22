<?php
include 'connection.php';
include 'reg.html';

mysql_select_db("users",$connect);
$b = "CREATE TABLE register (
		email varchar(25),
		name  text,
		mobile int(11),
		password varchar(20),
		retype varchar(20)
		
		)";
		mysql_query($b,$connect);
		
		if(isset($_POST['register'])){
		
		
				if($_POST['pwd']==$_POST['rpwd']){
					
		
	$c = "INSERT INTO register (email,name,mobile,password,retype) VALUES ('$_POST[mail]','$_POST[rname]','$_POST[number]','$_POST[pwd]','$_POST[rpwd]')";

	mysql_query($c,$connect);
	
	header ("Location:login.html");
			}
			else echo "enter valid password";
			
		}
		
?>