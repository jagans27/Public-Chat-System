<?php
$host = "localhost";
    $username = "id18373554_jagan143";
    $password = "#J@g@n27022003";
    $database = "id18373554_publicchatsystem";

    $conn = mysqli_connect($host, $username, $password, $database);

    if ($conn === false) {

        die("<script>alert('Sorry Server is not online.');</script>");
        // die("ERROR: Could not connect. ". mysqli_connect_error());
    }
?>
