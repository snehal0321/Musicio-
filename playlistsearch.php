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
    <form action="playlistsearch.php" method="GET">
            <div class="search-container">
                <input type="text" id="search-bar" name="q" placeholder="Search...">
                <button type="submit" id="btn">Search</button>
            </div>
     </form>
        <div class="list">
            <?php
            $P_name=$_GET["q"];
            $conn=mysqli_connect("localhost","root","","Musicio");
            if($conn)
            { 
                $q1 = "SELECT * FROM playlist WHERE P_name='$P_name'";
                $result = mysqli_query($conn, $q1);

                if ($result && mysqli_num_rows($result) > 0) {
                    // Output data of each row
                    while ($info = mysqli_fetch_array($result)) {
                        echo '<div class="item">';
                        echo '<img src="img2.jpg" />';
                        echo '<div class="play">';
                        echo '<span class="fa fa-play"></span>';
                        echo '</div>';
                        echo '<h4>' . $info["P_name"] . '</h4>';
                        echo '<p>' . $info["Lang"] . '</p>';
                        echo '<p>' . $info["dur"] . '</p>';
                        // You can format and display other columns similarly
                        echo '</div>'; // Close the 'item' div for each song
                    }
                }
                else {
                    echo "<p>No results found</p>";
            }
          }
            else 
            echo "<br>Connection Failed";
            ?>
        </div>


<div class="policies">
    <a href="playlistview.php">
        <input type="button" id="btn" name="button"    value="BACK">
    </a> 
    <a href="playlistinsertion.html">
         <input type="button" id="btn" name="button"    value="INSERT">
    </a> 
    
</div>



</div>
</body>

</html>