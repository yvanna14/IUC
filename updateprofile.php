
<!DOCTYPE html>
<html>
<head>
<?php
session_start();
?>
	<meta charset="utf-8">
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 <form method="POST" action="update.php">
 <div class="wrapper">
 	<div class="contact-form">
 		<div class="input-fields">

 			<input type="text" name="firstname" class="input" value="<?php echo $_SESSION['first']; ?>">
 			
 			<input type="text" name="lastname" class="input" value="<?php echo $_SESSION['last']; ?>">

         <input type="text" name="email" class="input"  value="<?php echo $_SESSION['email']; ?>">
 			
 			<select name="gender" class="input"> 
			 				<option value="<?php echo $_SESSION['gender']; ?>"> <?php echo $_SESSION['gender']; ?></option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
            
                  </select>
			<input type="text" name="contact" class="input" value="<?php echo $_SESSION['contact']; ?>">
                  
         <input type="text" name="address" class="input" value="<?php echo $_SESSION['address']; ?>">


            
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