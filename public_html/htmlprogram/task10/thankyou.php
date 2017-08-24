<?php
session_start();

  echo "<h1 style='color:red;font-size:20px'>Thank you for shoping!!!have a good day!!!".$_SESSION['name']."</h1>";
       unset($_SESSION['cart']);

?>