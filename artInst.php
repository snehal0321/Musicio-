<?php
			
	$conn=mysqli_connect("localhost","root","","Musicio");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
	
        $A_no = $_POST["A_no"] ;
        $A_name = $_POST["A_name"] ;
        $Genre = $_POST["Genre"];
        $S_no = $_POST["S_no"];

	
	$q1="INSERT INTO Artist(A_no ,A_name,Genre,s_no) values('$A_no', '$A_name', '$Genre', '$S_no');";
	
	$r1=mysqli_query($conn,$q1);
	
	if($r1)
	{
		echo "<br> Artist Added successfully:";
		header("Location: artistview.php");  
		exit();
	}
	else 
		echo "<br> Failed to Add the Artist";
	
	
	
	mysqli_close($conn);
			
?>