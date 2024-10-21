
<?php

    $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "emsdb";

$matricule=$_REQUEST['matricule'];

$conn= new mysqli($servername, $username, $password, $database) or die ("Connection failed: ".$conn->connect_error);
$query= "SELECT * FROM tblemployees WHERE matricule='".$matricule."'" or die("problem executing query");
$resource= mysqli_query($conn,$query);
$result=mysqli_fetch_array($resource);


?> 

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Employee</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="editemployee1.php" method="post">
 
 <div class="wrapper">
 	<div class="contact-form">
 		<div class="input-fields">
 			<input type="text" name="firstname" class="input" placeholder="First Name" value="<?php echo $result['firstname']; ?>"/>
 			<input type="text" name="lastname" class="input" placeholder="Last Name" value="<?php echo $result['lastname']; ?>"/>
 			
 			<input type="text" name="matricule" class="input"placeholder="Matricule" value="<?php echo $result['matricule']; ?>"/>
 			
 			<input type="text" name="email" class="input" placeholder="Email Address" value="<?php echo $result['email']; ?>"/>
 			

 			<select name="gender" class="input">
           <option value="<?php echo $result['gender']; ?>"><?php echo $result['gender']; ?></option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
            
                  </select>
			<br>
            <input type="date" name="dob" class="input"  placeholder="Date of Birth" value="<?php echo $result['dob']; ?>"/>
			
 			<input type="text" name="dept" class="input" placeholder="Department" value="<?php echo $result['dept']; ?>"/>
 			
 			<input type="text" name="contact" class="input" placeholder="Phone Number" value="<?php echo $result['contact']; ?>"/>
 			
            <input type="text" name="address" class="input" placeholder="Address" value="<?php echo $result['address']; ?>"/>

            <input type="file" class="input" name="pic" value="<?php echo $result['pic']; ?>"/>
            
            <button type="submit" class="btn" name="submit">Update</button> 

            <br>
            <button type="submit" class="btn"> 
            <a href="viewingemp.php" style="text-decoration: none;">Return</a>
            </button>
 		</div>
 	</div>
 	
 </div>
</body>
</html> 
