<html>
<head>
</head>
<body>
<?php
include "todo.html";
	
$con = mysql_connect("localhost","root","root");
if(!$con){
die ("cannot connect :" . mysql_error());
}
if(isset($_POST['submit'])){

mysql_select_db("vikas",$con);

$sql = "INSERT INTO todo (Date,Time,Activity)  VALUES ('$_POST[date]','$_POST[time]','$_POST[activity]')";

mysql_query($sql,$con);
}

mysql_select_db("vikas",$con);
if(isset($_POST['delete']))
		{
			$delete = "DELETE FROM todo WHERE Date='$_POST[hidden]'";
			mysql_query($delete,$con);
			

		};
		
		
$s = "SELECT * FROM todo";
$mydata = mysql_query($s,$con);


 if(isset($_POST['display']))
	
		{
			echo "<center>";
			echo "<table border=1>
					
					<tr>
					<th>Date</th>
					<th>Time</th>
					<th>Activity</th>
				
					</tr>";
					
			while($record = mysql_fetch_array($mydata))
			{
			
				echo "<form action=createdb.php method=post>";
				echo "<tr>";
				echo "<td>"."<input type=text name=dates value='$record[Date]'"." < /td>";
				echo "<td>"."<input type=text name=time value='$record[Time]'"." < /td>";
				echo "<td>"."<input type=text name=activity value='$record[Activity]'"." < /td>";
				echo "<td>"."<input type=hidden name=hidden value=".$record['Date']." < /td>";
				echo "<td>"."<input type=submit name=delete value=delete"." < /td>";
				echo "</tr>";
				echo"</form>";
				
				
			}
			echo "</table>";
		echo "</center>";
		}


mysql_close($con);


?>

</body>
</html>
