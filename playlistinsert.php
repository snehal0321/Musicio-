<?php
			
	$conn=mysqli_connect("localhost","root","","Musicio");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
	
        $P_no = $_POST['P_no'] ;
        $P_name = $_POST['P_name'] ;
        $Lang = $_POST['Lang'];
        $Num = $_POST['Num'];
        $Dur = $_POST['Dur'];
	
	
	$q1="INSERT INTO Playlist(P_no ,P_name,Lang,s_no,dur) values('$P_no', '$P_name', '$Lang', '$Num', '$Dur');";
	
	$r1=mysqli_query($conn,$q1);
	
	if($r1)
	{
		echo "<br> Playlist Added successfully:";
		header("Location: playlistview.php");  
		exit();
	}
	else 
	{
		echo "<br> Failed to Add the Artist";
		header("Location: playlistview.php");
		exit();
	}
	
	mysqli_close($conn);
			
?>