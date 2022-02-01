<!DOCTYPE html>
<html lang="en">

<head>
    <!-- TITLE OF THE PAGE -->
    <title>Public News Chat</title>

    <!-- BOOTSTRAP CSS LINK-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- BOOTSTRAP JAVASCRIPT LINK-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- ICON LINK -->
    <link rel="icon" href="images/icon.png">
    <link rel="stylesheet" href="styleshee.css">
    <script src="https://kit.fontawesome.com/36e63c0b5c.js" crossorigin="anonymous"></script>

</head>

<body style="background-color:#e9fcfc">
    <!-- NAVIGATION -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="images/icon.png" alt="" width="25" height="30" class="d-inline-block align-top" alt="">
            &nbsp;&nbsp;Public News Chat
        </a>
        <!-- RIGHT LOGIN SIGNUP BUTTON -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Search
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="bydate.php">Search by date</a>
                        <a class="dropdown-item" href="bymessage.php">Search by message</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="postmessage.php">Post Message&nbsp;</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php">View Message&nbsp;</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- END NAVIGATION -->
   
</body>

</html>