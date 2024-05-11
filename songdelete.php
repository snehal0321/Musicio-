<?php

	$S_name=$_POST["S_name"];
	
	$conn=mysqli_connect("localhost","root","","Musicio");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
	
	$q1="DELETE FROM songs WHERE S_name='$S_name' ";
	
	$r1=mysqli_query($conn,$q1);
	
	if($r1)
		{ 
			echo "<br> Song deleted:";
			header("Location: songview.php");  
			exit();
		}
	else 
		echo "<br> Deletion Failed ";
	
	
	mysqli_close($conn);
			
?>