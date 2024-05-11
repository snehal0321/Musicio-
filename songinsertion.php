<?php
			
	$conn=mysqli_connect("localhost","root","","Musicio");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
	
        $S_no = $_POST["S_no"] ;
        $S_name = $_POST["S_name"] ;
        $Lang = $_POST["Lang"];
        $A_name = $_POST["A_name"];
        $Dur = $_POST["Dur"];
	
	
	$q1="INSERT INTO songs(S_no,S_name,Lang,A_name,dur) values('$S_no', '$S_name', '$Lang', '$A_name', '$Dur');";
	
	$r1=mysqli_query($conn,$q1);
	
	if($r1)
	{
		echo "<br> song Added successfully:";
		header("Location: songview.php");  
		exit();
	}
	else 
		echo "<br> Failed to Add the song";
	
	
	
	mysqli_close($conn);
			
?>