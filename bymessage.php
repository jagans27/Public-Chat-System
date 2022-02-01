<?php
require_once 'setupindex.php';
require_once 'function.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search message by date</title>
</head>

<body>
    <div class="container-messages">
        <h2>.. SEARCH BY MESSAGES ..</h2>
        <div class="form-input">
            <form method="get" action="bymessage.php">
                <div class="form-group">
                    <!-- input text name -->
                    <label class="tag" for="date">Select date</label>
                    <input type="text" id="message" name="message" class="form-control" maxlength="19">
                </div>
                <div class="text-center">
                <input type="submit" name="submit" value="SEARCH" class="btn mb-2 btn-color"></input>
                
            </div>
            </form>
        </div>
    </div>
    <div class="text-center home-button" >
    <button onclick="location.href='index.php'" class="btn mb-2 btn-color home-button" type="button"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;HOME </button>
  </div>
    <?php

    if (isset($_GET['submit'])) {
        $sub = $_GET['message'];
        $query = "SELECT * FROM newschat WHERE message RLIKE '[[:<:]]" . $sub . "[[:>:]]' GROUP BY message";
        $result = mysqli_query($conn, $query);
    ?>
        <div class="container-messages">
            <h2>.. MESSAGES OF INPUTED TEXT..</h2>
            <?php
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {

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
            } else {

    ?>
    <div class="messages_output">
        <div class="inside_messages">
            <p style="text-align:center"><strong>..NO RESULT FOUND..</strong></p>
        </div>
    </div>
<?php
            }
        }
?>
</body>

</html>