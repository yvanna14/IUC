<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<title>Admin Dashboard</title>
    <!-- STYLE -->
    <link rel="stylesheet" type="text/css" href="dashboard.css">
    <!-- ICONS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <!-- BARCHART -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<style>
  
  body{
    margin: 0;
    padding: 0;
    height: 100vh;
    /*display: flex;
    align-items: center;*/
    font-family: "Roboto", sans-serif;
    background-color: #EEEEEE;

  }
 /* BARCHART */
  .chart{
    width: 600px;
    height: 300px;
    display: block;
    float: right;
  }

  .numbers{
    color: #000000;
    margin: 0;
    padding: 0;
    width: 50px;
    height: 100%;
    display: inline-block;
    float: left;
  }

  .numbers li{
    list-style: none;
    height: 55px;
    position: relative;
    bottom: 30px;
    color: #000000;
  }

  .numbers span{
    font-size: 12px;
    font-weight: 600;
    position: absolute;
    bottom: 0;
    right: 10px;
  }

  .bars{
    font-size: 12px;
    font-weight: 600px;
    background: #EEEEEE;
    margin: 0;
    padding: 0;
    display: block;
    width: 560px;
    height: 320px;
    box-shadow: 0 0 10px 0 #EEEEEE;
    border-radius: 5px;
  }

  .bars li{
    display: table-cell;
    width: 100px;
    height: 300px;
    position: relative;   
  }

  .bars span{
    width: 100%;
    position: absolute;
    bottom: -20px;
    text-align: center;
  }

  .bars .bar{
    display: block;
    background:#000000;
    width: 30px;
    height: 20px;
    position: absolute;
    bottom: -2px;
    margin-left: 8px;
    text-align: center;
    box-shadow: 0 0 10px 0 rgba(232, 48, 9);
    transition: 0.5s;
    transition-property: background,box-shadow;
  } 

  .bars .bar:hover{
    background: #E83009;
    box-shadow: 0 0 10px 0 rgba(232, 48, 9);
    cursor: pointer;
  }

  .bars .bar:before{
    color: #000000;
    content: attr(data-percentage) '%';
    position: relative;
    bottom: 20px;
  }

  /* END BARCHART */

  
   .box{
    width: calc(370px - 30px);
    height: calc(250px - 30px);
    background: #E83009;
    float: right;
    margin: 45px;
    padding-top: 20px;
    box-sizing: border-box;
    overflow: hidden;
    border-radius: 10px;
     display: inline-block;
   }

  .box .icon{
    position: relative;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%; 
    background: #000000;
    transition: 0.5s;
    z-index: 1;
   }

  .box:hover .icon{
    top: 20px;
    left: : calc(50% - 40px);
    width: 80px;
    height: 80px;
    border-radius: 50px;
   }
   
    .box .icon .fa{
    position: relative;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    font-size: 55px;
    transition: 0.5s;
    color: #FFFFFF;
   }

    .box:hover .icon .fa{
    font-size: 27px;

   }

    .box .content{
    position: relative;
    height: 100%;
    text-align: center;
    box-sizing: border-box;
    transition: 0.5s;
    color: white;
   }


   .box .content h2{
    margin: 0;
    padding: 0;
    font-size: 20px;
  }

  .box .content p{
    margin: 0;
    padding: 0;
    font-size: 17px;
  }
  /* END STATISTICS BOX */

  /* RESPONSIVENESS */


</style>

</head>
<body>
    <!--  NAVIGATION BAR -->
      <nav>
       	<div class="logo"><strong>Employee Management System <!-- <?php echo 'admin' ?> dashboard --></strong>  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;  &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
          <a href="updateadmprofile.php">
              <span class="icon"><i style="color: white;" class="fa fa-user" title="Update Profile" aria-hidden="true"></i></span>
               </a> 
         &nbsp;&nbsp; &nbsp;
          <a href="logout.php" style="text-decoration: none;">
              <span class="icon"><i style="color: white;" class="fa fa-sign-out" title="Logout" aria-hidden="true"></i></span>
               </a>
          </div>
      </nav> 
  <!-- END NAVIGATION BAR -->

    <br><br><br><br>

<!--  SIDE MENU BAR -->
 <div class="navigation">
 	<ul>

        <li>
 			<a href="admindashboard.php">
 				<span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
 				<span class="title">Dashboard</span> 
 			</a>
 		</li>
 		<li>
 			<a href="#">
 				<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
 				<span class="title">Employees &nbsp; <i class="fa fa-angle-down" aria-hidden="true"></i></span>
 		</li>
         
         <li>
 			<a href="addemp.php">
 				<span class="icon1"><i class="fa fa-user-plus" aria-hidden="true"></i></span>
 				<span class="title1">Add Employee</span>
 		</li>

 		<li>
 			<a href="viewingemp.php">
 				<span class="icon1"><i class="fa fa-address-card" aria-hidden="true"></i></span>
 				<span class="title1">View Employees</span>
 		</li>

 		<li>
 			<a href="#">
 				<span class="icon"><i class="fa fa-university" aria-hidden="true"></i></span>
 				<span class="title">Departments &nbsp;<i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </a>
 		</li>

 
         <li>
 			<a href="adddept.php">
 				<span class="icon1"><i class="fa fa-plus" aria-hidden="true"></i></span>
 				<span class="title1">Add Department</span>
 		</li>

 		<li>
 			<a href="viewdepartments.php">
 				<span class="icon1"><i class="fa fa-list-alt" aria-hidden="true"></i></span>
 				<span class="title1">View Departments</span>
 		</li>

 		<li>
 			<a href="viewingleaves.php">
 				<span class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></span>
 				<span class="title">Leaves</span></a>
 		</li>
   <!-- 
        <li>
 			<a href="#">
 				<span class="icon"><i class="fa fa-cogs" aria-hidden="true"></i></span>
 				<span class="title">Session Logs</span></a>
 		</li>
 		<li>
 			<a href="#">
 				<span class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></span>
 				<span class="title">Send Mail</span></a>
 		</li> -->

 	</ul>
 	
 </div>
 <!-- END SIDE MENU BAR -->

<br>
 <!-- CARDS --> 
 <?php
  try{
    $bdd = new PDO("mysql:host=localhost;dbname=emsdb", "root", "");
  }
  catch(Exception $e)
  {
    die('Erreur : ' . $e->getMessage());
  }

  $emp = $bdd->query("SELECT * FROM tblemployees"); 
  $numEmp = 0;
  while($en = $emp->fetch()){
    $numEmp = $numEmp  + 1;
  } 

  $emp = $bdd->query("SELECT * FROM tbldepartments"); 
  $numDep = 0;
  while($en = $emp->fetch()){
    $numDep = $numDep  + 1;
  }

  $emp = $bdd->query("SELECT * FROM tbleaves"); 
  $numLea = 0;
  while($en = $emp->fetch()){
    $numLea = $numLea  + 1;
  }

  ?>
<div class="card-body1">
	            <div>
                <h3>
                  <span class="Leaves"></span>
                </h3>
                <p><b>Leaves</p></b> &nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  
                  <div class="float-right">
              <i style="font-size: 32px;" class="fa fa-calendar fa-10x" aria-hidden="true"></i>
                  </div> 
                <h2 style="position: bottom-left;"><?php echo $numLea; ?></h2>
              </div>
</div>
<div class="card-body2">
              <div>
                <h3>
                  <span class="Departments"></span>
                </h3>
                <p><b>Departments</p></b>  &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                  <div class="float-right">
              <i style="font-size: 32px;" class="fa fa-university fa-10x" aria-hidden="true"></i>
                 </div>
                <h2 style="position: bottom-left;"><?php echo $numDep; ?> </h2>
              </div>
</div>
<div class="card-body3">
	        <div>
              <h3>
               <span class="employees"></span>
              </h3>
               <p><b>Employees</p></b>    &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; 
                  <div class="float-right">
              <i style="font-size: 32px;" class="fa fa-users fa-10x" aria-hidden="true"></i>
                  </div>
                   <h2 style="position: bottom-left;"><?php echo $numEmp; ?></h2>
          </div>
</div>
<!-- CARDS --> 
<br><br><br><br><br><br><br><br>
<div class="chart">
  <ul class="numbers">
    <li><span>100</span></li>
    <li><span>80</span></li>
    <li><span>60</span></li>
    <li><span>40</span></li>
    <li><span>20</span></li>
    <li><span>0</span></li>
  </ul>
  <ul class="bars">
    <li><div class="bar" data-percentage="50"></div><span>Jan</span></li>
    <li><div class="bar" data-percentage="70"></div><span>Feb</span></li>
    <li><div class="bar" data-percentage="80"></div><span>Mar</span></li>
    <li><div class="bar" data-percentage="10"></div><span>Apr</span></li>
    <li><div class="bar" data-percentage="50"></div><span>May</span></li>
    <li><div class="bar" data-percentage="30"></div><span>Jun</span></li>
    <li><div class="bar" data-percentage="10"></div><span>Jul</span></li>
    <li><div class="bar" data-percentage="60"></div><span>Aug</span></li>
    <li><div class="bar" data-percentage="50"></div><span>Sep</span></li>
    <li><div class="bar" data-percentage="30"></div><span>Oct</span></li>
    <li><div class="bar" data-percentage="8"></div><span>Nov</span></li>
    <li><div class="bar" data-percentage="5"></div><span>Dec</span></li>

  </ul>
</div>

<script type="text/javascript">
  $(function() {
   $('.bars li .bar').each(function(key,bar){
     var percentage = $(this).data('percentage');
     $(this).animate({
        'height' : percentage + '%'
     },1000);
   });
  });

</script>

 <div class="box"> 
    <div class="icon">
      <i class="fa fa-bar-chart" aria-hidden="true"></i>
    </div>
     <div class="content">
       <i style="font-size: 24px; color: black; "class="fa fa-arrow-right fa-10x" aria-hidden="true"></i>
       <h2> Statistics </h2>
       <p> View Statistics of Leaves applied by employees </p>
  </div>
</body>
</html>

<?php

session_start();
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
$query= "SELECT * FROM users";
$resource= mysqli_query($conn,$query) or die("problem executing query");

}
 else{
  header('Location: adminlogin.php');
 }

?>