<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Employee Dashboard</title>

    <link rel="stylesheet" type="text/css" href="dashboard.css">


     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

   <style>

    body{
      background: url(home2.jpg);
      background-size: cover;
      height: 100vh;
    }
   .container{
    width: 1362px;
    height: 300px;
    background: transparent;
    padding-left: 50px;
    display: inline-block;
   }

   .container .box{
    width: calc(385px - 30px);
    height: calc(280px - 30px);
    background: #E83009;
    float: right;
    margin: 8px;
    padding-top: 20px;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 10px;
     display: inline-block;
   }

   .container .box .icon{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; 
    background: #000000;
    transition: 0.5s;
    z-index: 1;
   }

   .container .box:hover .icon{
    top: 20px;
    left: : calc(50% - 40px);
    width: 80px;
    height: 80px;
    border-radius: 50px;
   }
   
   .container .box .icon .fa{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-size: 55px;
    transition: 0.5s;
    color: #FFFFFF;
   }

   .container .box:hover .icon .fa{
    font-size: 27px;

   }

   .container .box .content{
    position: relative;
    height: 100%;
    text-align: center;
    padding: 20px;
    box-sizing: border-box;
    transition: 0.5s;
    color: white;
   }


  .container .box .content h2{
    margin: 0;
    padding: 0;
    font-size: 24px;
  }

  .container .box .content p{
    margin: 0;
    padding: 0;
    font-size: 20px;
  }

   </style>



</head>
<body>
 
      <nav>
     	<!--<input id="nav-toggle"> -->
       	<div class="logo"><strong>Employee Management System || <?php echo $_SESSION['first']; ?> Dashboard</strong> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
          <a href="updateprofile.php">
             <span class="icon"><i style="color: white;" class="fa fa-user" title="Update Profile" aria-hidden="true"></i></span>
          </a> 
               &nbsp;&nbsp; &nbsp;
          <a href="logout.php" style="text-decoration: none;">
            <span  class="icon"><i style="color: white;" class="fa fa-sign-out" title="Logout" aria-hidden="true"></i></span>
            </a>

             </div>

    </nav> 
    <br><br><br><br><br>
 <div class="navigation">
 	<ul>

      <li>
 			<a href="employeedashboard.php">
 				<span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
 				<span class="title">Dashboard</span></a>
 		</li>
 		<li>
 			<a href="applyleave.php">
 				<span class="icon"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>
 				<span class="title">Apply Leave</span></a>
 		</li>
 		<li>
 			<a href="leavereport.php">
 				<span class="icon"><i class="fa fa-tasks" aria-hidden="true"></i></span>
 				<span class="title">Leave History</span></a>
 		</li>

   <li>
      <a href="changepassword.php">
        <span class="icon"><i class="fa fa-lock" aria-hidden="true"></i></span>
        <span class="title">Change Password</span></a>
    </li>
 	</ul>
 	
 </div>
 <br><br><br><br><br>
 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

<div class="container">

  <div class="box"> 
     <div class="icon">
         <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
     </div>
     <div class="content">
       <h2> My Leave </h2>
       <p> Apply for leave </p>
     </div>
  </div>

  <div class="box"> 
      <div class="icon">
        <i class="fa fa-tasks" aria-hidden="true"></i>
      </div>
      <div class="content">
        <h2> Leave History </h2>
        <p> View Report of all applied leaves </p>
      </div>

  </div>

  <div class="box"> 
     <div class="icon">
         <i class="fa fa-lock" aria-hidden="true"></i>
     </div>
     <div class="content">
       <h2> Change Password </h2>
       <p> Modify the default password given by the admin </p>
     </div>
  </div>


</div>

</body>
</html>
<!-- <?php


  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "emsdb";

  if(isset($_SESSION['password']) && isset($_SESSION['email'])){

if(isset($_COOKIE['email'])) $email = $_COOKIE['email'];

else if(isset($_SESSION['email']))  $id=$_SESSION['email'];
else $email= '';

if(isset($_COOKIE['password'])) $password = $_COOKIE['password'];

else if(isset($_SESSION['password'])) $password= $_SESSION['password'];
else $password ='';

$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
$query= "SELECT * FROM tblemployees";
$resource= mysqli_query($conn,$query) or die("problem executing query");

}
 else{
  header('Location: employeelogin.php');
 }

?> -->