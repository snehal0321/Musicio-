<?php

	$P_name=$_POST["P_name"];
	
	
	$conn=mysqli_connect("localhost","root","","Musicio");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
	
	$q1="DELETE FROM playlist WHERE P_name='$P_name' ";
	
	$r1=mysqli_query($conn,$q1);
	
	if($r1)
	{
		echo "<br> Playlist deleted:";
		header("Location: playlistview.php");  
		exit();
	}
	else 
	{
		echo "<br> Deletion Failed ";
	}
		
	
	
	
	mysqli_close($conn);
			
?>