
<?php
 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "emsdb";


$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
/*
$firstname=$_POST['firstname'];
$query= "SELECT * FROM tblemployees WHERE firstname='".$firstname."'";
$resource= mysqli_query($conn,$query) or die("problem executing query");
$result=mysqli_fetch_array($resource);*/

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Change Password</title> 
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <form method="POST" action="changepass.php">
 <div class="wrapper">
 	<div class="contact-form">
 		<div class="input-fields">

        <input type="text" name="password" class="input" placeholder="Enter actual password"><br>

        <input type="text" name="password" class="input" placeholder="Enter new password"><br> 

			
          <input type="text" name="password" class="input" placeholder="Confirm password"><br>

            
            <button style="text-decoration: none;" type="submit" class="btn" name="submit">Save</button>

            <br>
             <button type="submit" class="btn"> 
            <a href="employeedashboard.php" style="text-decoration: none;">Return</a>
            </button>
 		</div>
 	</div>
 	
 </div>
</body>
</html> 