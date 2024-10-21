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

$query ="SELECT * FROM `tblemployees` WHERE email='$email' and password='$password'";
$result =mysqli_query($conn, $query);
$row=mysqli_num_rows($result);
try {

  $bdd = new PDO("mysql:host=localhost;dbname=emsdb",
      "root", "");

}catch (Exception $e){
  die('Erreur : ' . $e->getMessage());

  //die('Erreur : impossible de se connecter à la base de donnée');
}
$emp = $bdd->prepare("SELECT * FROM tblemployees WHERE email=?");
$emp->execute(array($email));
    while($result=$emp->fetch()){
  $mat = $result['matricule'];
  $dept = $result['dept'];
  $last= $result['lastname'];
  $cont = $result['contact'];
  $gender = $result['gender'];
  $add = $result['address'];
 }
        setcookie('email',$email,time()+3600);
        setcookie('password',$password,time()+3600);
      
        $_SESSION['email']= $email;
        $_SESSION['password']= $password;
        $_SESSION['matricule']=$mat;
        $_SESSION['dept'] = $dept;
        $_SESSION['last'] = $last;
        $_SESSION['contact'] = $cont;
        $_SESSION['gender'] = $gender;
        $_SESSION['address'] = $add;

try
{
  $bdd = new PDO("mysql:host=localhost;dbname=emsdb", "root", "");
}
catch(Exception $e)
{
  die('Erreur : '. $e->getMessage());
}

$stmt = $bdd->prepare("SELECT * FROM tblemployees WHERE email=?");
$stmt->execute(array($email));
while($find = $stmt->fetch())
{
  $mail = $find['firstname'];
  $_SESSION["first"] = $mail;
}






if($row == 1){
  $_SESSION['email'] = $email;
  echo "<script>
  document.location.href='http://localhost/AEMS/employeedashboard.php'
  
    </script>
  >";
}else{
  $message = "Incorrect details";
  echo "<script>
alert('Invalid Email or Password');
document.location.href='http://localhost/AEMS/employeelogin.php'

  </script>";
}

?>
