 <!DOCTYPE html>
  <html>
  <head>
  	<title>Employee</title>
  </head>
  <body>

  	<?php

  	 header('Location: viewingemp.php');

  	?>

  </body>
  </html>

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
  $lastname=$_REQUEST['lastname'];
  $matricule=$_REQUEST['matricule'];
  $email=$_REQUEST['email'];
  $gender=$_REQUEST['gender'];
  $dob=$_REQUEST['dob'];
  $dept=$_REQUEST['dept'];
  $contact=$_REQUEST['contact'];
  $address=$_REQUEST['address'];
  $pic=$_REQUEST['pic'];


    
    $query="UPDATE tblemployees SET firstname='".$firstname."',lastname='".$lastname."',email='".$email."',gender='".$gender."',dob='".$dob."',dept='".$dept."',contact='".$contact."',address='".$address."',pic='".$pic."' WHERE  matricule='".$matricule."'" or die("problem executing query");

 
    if(mysqli_query($conn,$query)){


  echo "<script>
    alert('Successful');
    document.location.href='http://localhost/AEMS/viewingemp.php'
  </script>";
}else{
  echo "<script>
    alert('ERROR');
    </script>";

}


}
}
?>