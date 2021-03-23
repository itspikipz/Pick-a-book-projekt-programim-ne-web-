<?php

  $username = "ergys";
  $connection = mysqli_connect('localhost', 'root', '', 'Database1');
  $query = "select username from Perdorues";

  $result = mysqli_query($connection, $query);

  while($row = mysqli_fetch_array($result)){
      echo "name: ".$row[0];

      if($username == $row[0]){
        echo "success";
        break;
      }else{
        echo "error";
      }
      echo "<br>";
  }

 ?>
