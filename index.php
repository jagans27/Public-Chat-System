<!DOCTYPE html>
<html lang="en">

<head>
    <!-- TITLE OF THE PAGE -->
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="styleshee.css">

</head>

<body style="background-color:#e9fcfc">

    <?php

    require_once 'function.php';
    require_once 'setupindex.php';

    $sql = "SELECT * FROM newschat";
    $result = mysqli_query($conn, $sql);
    ?>

  

    <!-- VIEW MESSAGES -->

    <div class="container-messages">
        <h2>.. MESSAGE FEEDS ..</h2>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
                <div class="messages_output">
                    <span><strong class="view_name"><?php echo $row["name"] ?></strong></span>
                    <em>&nbsp;&nbsp;&nbsp;[<?php echo $row["date"] ?>][<?php echo $row["time"] ?>]</em>
                    <div class="inside_messages">
                        <span><strong class="view_title"><?php echo $row["title"] ?></strong></span>
                        <p><?php echo $row["message"] ?></p>
                    </div>
                </div>
    </div>
<?php
            }
        }
?>
<h2>.. END ..</h2>
<!-- END VIEW MESSAGES -->
</body>
<footer class="footer">
        <p>Created by Jagan.</p>
        <p>Simple public news chat.</p>
    </footer>

</html>
