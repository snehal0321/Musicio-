<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MUSIC.IO</title>
    <link rel="stylesheet" href="style2.css">
    <script src="https://kit.fontawesome.com/1049b012a5.js" crossorigin="anonymous"></script>
</head>

<body>
<div class="s1">
    <a href="#">
        <h1 style="text-align: left;display:inline;">MUSIC.IO</h1>
        <h3>Made with love</h3> 
    </a>
</div>

<div class="sidebar">

<div class="navigation">
        <ul>
            <li>
                <a href="../Songs/songview.php">
                    <span class="fa fa-home"></span>
                    <span>Home</span>
                </a>
            </li>
            <li>
                <a href="../login/adminlogin.php">
                    <span class="fa fa-user"></span>
                    <span>Admin</span>
                </a>
            </li>
            <li>
                <a href="../playlist/playlistview.php">
                    <span class="fa fas fa-book"></span>
                    <span>Playlist</span>
                </a>
            </li>
            <li>
                <a href="../Songs/songview.php">
                    <span class="fa fas fa-book"></span>
                    <span>Songs</span>
                </a>
            </li>
            <li>
                <a href="../artist/artistview.php">
                    <span class="fa fas fa-book"></span>
                    <span>Artist</span>
                </a>
            </li>
            <li>
                <a href="../DBMS PROJECT/artistviewop.php">
                    <span class="fa fas fa-book"></span>
                    <span>VIEW OPERATION</span>
                </a>
            </li>
            <li>
                <a href="../DBMS PROJECT/artist_join_song.php">
                    <span class="fa fas fa-book"></span>
                    <span>JOIN OPERATION</span>
                </a>
            </li>
        </ul>
    </div>

    <div class="policies">
        <ul>
            <li>
                <a href="../login/login.php">
                    <span class="fa fa-right-from-bracket"></span>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>


</div>

<div class="item">

</div>

<div class="main-container">
    <div class="spotify-playlists">
        <h2>PLAYLIST</h2>
            <div class="list" id="alllist">
                <?php
                $conn=mysqli_connect("localhost","root","","Musicio");
                if($conn)
                { 
            
                    // Fetching data from the database
                    $query = "SELECT * FROM artist a 
                    natural join songs s";

                    $result = mysqli_query($conn, $query);
                    if ($result && mysqli_num_rows($result) > 0) {
                        echo'<table border="2" >';
                        echo'<tr>';
                            echo '<th>ANO </th>';
                            echo '<th>ANAME</th>';
                            echo '<th>GENRE</th>';
                            echo '<th>SNO</th>';
                            echo '<th>SNAME</th>';
                            echo '<th>Duration</th>';
                         echo'</tr>';
                        while ($info = mysqli_fetch_array($result)) {
                            echo '<div>';
                                echo '<tr>';
                                    echo '<td>' .$info['A_no'] . '</td>';
                                    echo '<td>'  .$info['A_name']. '</td>';
                                    echo '<td>'  .$info['Genre']. '</td>';
                                    echo '<td>' .$info['S_no']. '</td>';
                                    echo '<td>' .$info['S_name']. '</td>';
                                    echo '<td>' .$info["dur"]. '</td>';
                                   
                                echo '</tr>';
                            // You can format and display other columns similarly
                            echo '</div>'; // Close the 'item' div for each song
                        }
                        echo '</table>';
                    }
                    else
                     {
                        echo "<p>No results found</p>";
                     }
                }
                    else 
                    echo "<br>Connection Failed";
                ?>
            </div>
    </div>
</div>

</body>

</html>


