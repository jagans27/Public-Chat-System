<?php

require_once 'function.php';

if (isset($_POST['submit'])) 
{
    $name = $_POST['name'];

    if ($name == '') {
        $name =  "Anonymous";
    }

    $title = $_POST['title'];
    $message = $_POST['message'];

    date_default_timezone_set('Asia/Kolkata');
    $date = date("Y-m-d");
    $time = date('h:i:s');

    $sql = "INSERT INTO newschat  VALUES ('$name','$date','$time','$title','$message')";
    mysqli_query($conn, $sql);
    header('Location: postmessage.php');
    exit;
}

?>