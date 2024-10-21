<?php
session_start();
session_unset();
session_destroy();

 echo "<script>
alert('Logout Successful');
document.location.href='http://localhost/AEMS/homepage.php'

  </script>";
?>