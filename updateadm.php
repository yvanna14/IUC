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


  $email=$_REQUEST['email'];
  $password=$_REQUEST['password'];
  $firstname=$_REQUEST['firstname'];
  $lastname=$_REQUEST['lastname'];
  $gender=$_REQUEST['gender'];
  $contact=$_REQUEST['contact'];
  $address=$_REQUEST['address'];


  
    $query= "UPDATE users SET email='".$email."',password='".$password."',firstname='".$firstname."',lastname='".$lastname."',gender='".$gender."',contact='".$contact."',address='".$address."' WHERE  firstname='".$firstname."'" or die("problem executing query");

 
    if(mysqli_query($conn,$query)){


  echo "<script>
    alert('Successful');
    document.location.href='http://localhost/AEMS/admindashboard.php'
  </script>";
}else{
  echo "<script>
    alert('ERROR');
    </script>";

}


}
}
?>