<?php

	$aname=$_POST["A_name"];
	
	
	$conn=mysqli_connect("localhost","root","","MusicDatabase");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
	
	$q1="DELETE FROM Artist WHERE A_name=$aname ";
	
	$r1=mysqli_query($conn,$q1);
	
	if($r1)
	{
		echo "<br> Artist deleted:";
		header("Location: artistview.php");  
		exit();
	}
	else 
		echo "<br> Deletion Failed ";
	
	
	
	mysqli_close($conn);
			
?>