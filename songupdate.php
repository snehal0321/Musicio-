<?php
	
	$conn=mysqli_connect("localhost","root","","Musicio");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
        $S_no = $_POST["S_no"];
        $S_name = ($_POST["S_name"] != "") ? $_POST["S_name"] : "";
        $Lang = ($_POST["Lang"] != "") ? $_POST["Lang"] : "";
        $A_name = ($_POST["A_name"] != "") ? $_POST["A_name"] : "";
        $Dur = ($_POST["Dur"] != "") ? $_POST["Dur"] : "";
         
         $q1 = "UPDATE songs
                SET S_name = '$S_name',
                    Lang = '$Lang',
                    A_name = '$A_name',
                    dur = '$Dur'
                WHERE S_no = '$S_no'; ";

        $r = mysqli_query($conn, $q1); 
        if($r) 
        { 
            echo "Update Successful !"; 
            header("Location: songview.php");  
            exit();

        }

        else {
            echo "Update Failed !";
        }
	mysqli_close($conn);
			
?>