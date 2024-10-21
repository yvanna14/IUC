<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add Employee</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
 <div class="wrapper">
 	<div class="contact-form">
 		<div class="input-fields">
 			<form method="POST" action="">
 			<input type="text" name="firstname" class="input" placeholder="First Name" required>
 			<input type="text" name="lastname" class="input" placeholder="Last Name" required>
 			
 			<input type="text" name="matricule" class="input"placeholder="Matricule" required>
 			
 			<input type="email" name="email" class="input" placeholder="Email Address" required>

 			<select name="gender" class="input" required>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
            
                  </select>
			<br>
            <input type="date" name="dob" class="input"  placeholder="Date of Birth" required>
			
 			<input type="text" name="dept" class="input" placeholder="Department" required>
 			
 			<input type="number" name="contact" class="input" placeholder="Phone Number" required>
 			
            <input type="text" name="address" class="input" placeholder="Address" required>
            
            <input type="text" name="password"  class="input" placeholder="Password" required>

            <input type="file" class="input" name="pic" required>
            
            <button type="submit" class="btn" name="submit">Register</button> 

            <br>
            <br>
            <button type="submit" class="btn"> 
            <a href="admindashboard.php" style="text-decoration: none;">Return</a>
            </button>
 		</div>
 	</div>
 	
 </div>
</body>
</html> 

<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "emsdb";
	$conn = mysqli_connect($servername, $username, $password, $database);
	if (!$conn){
		die("connection failed:". mysql_connect_error());
     }else{
	if (isset($_POST['submit'])) {

	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$matricule = $_POST['matricule'];
	$email = $_POST['email'];
	$gender = $_POST['gender'];
	$dob = $_POST['dob'];
	$dept = $_POST['dept'];
	$contact = $_POST['contact'];
	$address = $_POST['address'];
	$password =$_POST['password'];
	$pic = $_POST['pic'];


	$insert = "INSERT INTO tblemployees (firstname,lastname,matricule,email,gender,dob,dept,contact,address,password,pic) VALUES('$firstname','$lastname','$matricule','$email','$gender','$dob','$dept','$contact','$address','$password','$pic')";

	  if(mysqli_query($conn,$insert)){


	echo "<script>
		alert('registration Successful');
	</script>";
}else{
	echo "<script>
		alert('ERROR');
		</script>";

}


}
}
?>
