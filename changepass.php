<?php

  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "emsdb";

  $conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
if (!$conn){
    die("connection failed:". mysql_connect_error());
     }else{
  if (isset($_POST['submit'])) {


  $firstname=$_REQUEST['firstname'];
  $password=$_REQUEST['password'];

  
    $query= "UPDATE tblemployees SET password='".$password."'  WHERE  firstname='".$firstname."'" or die("problem executing query");

 
    if(mysqli_query($conn,$query)){


  echo "<script>
    alert('Successful');
    document.location.href='http://localhost/AEMS/employeedashboard.php'
  </script>";
}else{
  echo "<script>
    alert('ERROR');
    </script>";

}


}
}
?>