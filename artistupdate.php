<?php

	$A_name=$_POST("A_name");
	
	
	$conn=mysqli_connect("localhost","root","","");
	if($conn)
		echo "<br>Connection successful:";
	else 
		echo "<br>Connection Failed";
	
            $A_no = $_POST["A_no"];
            $A_name = ($_POST["A_name"] != "") ? $_POST["A_name"] : "";
            $Genre = ($_POST["Genre"] != "") ? $_POST["Genre"] : "";

            $q1 = "  UPDATE ARTIST
                SET A_name = '$A_name',
                    Genre = '$Genre'
                WHERE A_no = '$A_no';
            ";
            $r = mysqli_query($conn, $query);
            if($r) 
            {
                 echo "Update Successful !";
                 header("Location: artistview.php");  
                 exit();
            }
            else
             {

                echo "Update Failed !";
                exit();
            }
	
	mysqli_close($conn);
			
?>