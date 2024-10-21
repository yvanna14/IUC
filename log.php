<?php

$email =$_POST['email'];
$password =$_POST['password'];

session_start();
$conn = mysqli_connect('localhost', 'root', '', 'emsdb');
if ($conn == false) {
  die("ERROR : impossible to connect." .mysqli_connect_error());
}
$email= stripcslashes($_REQUEST['email']);
$email= mysqli_real_escape_string($conn, $email);
$password= stripcslashes($_REQUEST['password']);
$password= mysqli_real_escape_string($conn, $password);

$query ="SELECT * FROM `users` WHERE email='$email' and password='$password'";
$result =mysqli_query($conn, $query);
$row=mysqli_num_rows($result);

        setcookie('email',$email,time()+3600);
        setcookie('password',$password,time()+3600);
        $_SESSION['email']= $email;
        $_SESSION['password']= $password;
    



if($row == 1){
  $_SESSION['email'] = $email;
  echo "<script>
document.location.href='http://localhost/AEMS/admindashboard.php'

  </script>";
}else{
  $message = "Incorrect details";
  echo "<script>
alert('Invalid Email or Password');
document.location.href='http://localhost/AEMS/adminlogin.php'

  </script>";
}

?>