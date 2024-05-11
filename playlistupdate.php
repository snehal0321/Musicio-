<?php	
	$conn=mysqli_connect("localhost","root","","Musicio");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
            $P_no = $_POST["P_no"];
            $P_name = ($_POST["P_name"] != "") ? $_POST["P_name"] : "";
            $Lang = ($_POST["Lang"] != "") ? $_POST["Lang"] : "";
            $Num = ($_POST["Num"] != "") ? $_POST["Num"] : "";
            $Dur = ($_POST["Dur"] != "") ? $_POST["Dur"] : "";

            $q1 =" UPDATE playlist
                SET P_name = '$P_name',
                    Lang = '$Lang',
                    s_no = '$Num',
                    dur = '$Dur'
                WHERE P_ID = '$P_no';";
            $r = mysqli_query($conn, $q1);
            if($r) 
            { 
                echo "Update Successful !"; 
                header("Location: playlistview.php");  
		        exit();
            }

            else 
            {
                echo "Update Failed !";
            }
	mysqli_close($conn);
			
?>