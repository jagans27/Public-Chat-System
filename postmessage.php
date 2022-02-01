<!DOCTYPE html>
<html lang="en">

<head>
  <!-- TITLE OF THE PAGE -->
  
  <?php
  require_once 'setupindex.php';
  ?>
  <link rel="stylesheet" href="styleshee.css">

</head>

<body>

  <!-- FORM -->

  <div class="container-messages">
    <h2>.. POST YOUR MESSAGE HERE ..</h2>
    <div class="form-input">
      <form method="post" action="insert.php">
        <div class="form-group">
          <!-- input text name -->
          <label class="tag" for="name">NAME</label>
          <input type="text" id="name" autocomplete="off" name="name" class="form-control" maxlength="19" placeholder="your name (Anonymous not required).">
        </div>
        <!-- title -->
        <div class="form-group">
          <!-- input text name -->
          <label class="tag" for="title">TITLE</label>
          <input type="text" id="title" autocomplete="off" name="title" class="form-control" maxlength="99" placeholder="your title" required>
        </div>
        <!-- input textarea message -->
        <div class="form-group">
          <label class="tag" for="message">MESSAGE</label>
          <textarea class="form-control" name="message" id="message" rows="3" placeholder="your message minimum 500 character." maxlength="499" required></textarea>
        </div>
        <!-- button submit reset -->
        <div class="text-center">
          <input type="submit" name="submit" value="Post message" class="btn mb-2 btn-color"></input>
          <button type="reset" class="btn mb-2 btn-color">Clear</button>
        </div>
      </form>
    </div>
  </div>
  <div class="text-center home-button" >
    <button onclick="location.href='index.php'" class="btn mb-2 btn-color home-button" type="button"><i class="fas fa-arrow-alt-circle-left"></i>&nbsp;HOME </button>
  </div>
</body>

</html>