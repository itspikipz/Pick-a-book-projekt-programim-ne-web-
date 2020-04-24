<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  </head>
  <body>
    <?php
      session_start();
      if(isset($_SESSION['username']) && isset($_SESSION['password'])){
        ?>
          <h2>CLIENT</h2>
        <?php
        echo $_SESSION['username'];
      }else{
        header("Location: login.php");
      }
     ?>
     <a href="logout.php">Logout</a>

  </body>
</html>
