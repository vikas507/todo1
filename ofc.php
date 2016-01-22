<?php
include 'connection.php';
include 'login.html';
if(isset($_POST['login']))
	{
		if($_POST['mail']!=null && $_POST['pwd']!=null) {
			
			$mail=$_POST['mail'];
			$pwd=$_POST['pwd'];
			
			mysql_select_db("users",$connect);
			$k = "SELECT * FROM register WHERE email='$mail' && password= '$pwd'";
			
			$res= mysql_query($k,$connect);
			$row = mysql_fetch_array($res);
			
			if ($row['email']==$mail && $row['password']==$pwd){
			
			header ("Location:createdb.php");
			
			} else echo"enter valid email and password";
		
		
			
			
			}else echo"enter userid and password";
	}
			
			
			
		
	
	
if(isset($_POST['signup'])){

	header("Location:reg.html");
}
?>