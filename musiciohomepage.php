<!--YADNESH_G-->
<?php
include('../conn/connect.php');
?>

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
                <a href="../home/musiciohomepage.php">
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
                <a href="../home/playlist.php">
                    <span class="fa fas fa-book"></span>
                    <span>Playlist</span>
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
    <h2>Songs</h2>
        <div class="list">
            <?php
            // Fetching data from the database
            $q1 = "SELECT * FROM musiclist";
            $result = mysqli_query($conn, $q1);

            if ($result && mysqli_num_rows($result) > 0) {
                // Output data of each row
                while ($info = mysqli_fetch_array($result)) {
                    echo '<div class="item">';
                    echo '<img src="img2.jpg" />';
                    echo '<div class="play">';
                    echo '<span class="fa fa-play"></span>';
                    echo '</div>';
                    echo '<h4>' . $info["title"] . '</h4>';
                    echo '<p>' . $info["album"] . '</p>';
                    // You can format and display other columns similarly
                    echo '</div>'; // Close the 'item' div for each song
                }
            } else {
                echo "<p>No results found</p>";
            }
            ?>
        </div>
    </div>
</div>



</div>
</body>

</html>