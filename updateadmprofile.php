<!DOCTYPE html>
<?php
session_start(); 
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Update Profile</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php
      try {

            $bdd = new PDO("mysql:host=localhost;dbname=emsdb",
                "root", "");
          
          }catch (Exception $e){
            die('Erreur : ' . $e->getMessage());
          
            //die('Erreur : impossible de se connecter à la base de donnée');
          }
          $emp = $bdd->prepare("SELECT * FROM users WHERE email=?");
          $emp->execute(array($_SESSION['email']));
              while($result=$emp->fetch()){
            $mail = $result['email'];
            $pas = $result['password'];
            $fname = $result['firstname'];
            $lname = $result['lastname'];
            $gen = $result['gender'];
            $cont = $result['contact'];
            $address= $result['address'];
           }
?>

  <form method="POST" action="updateadm.php">
 <div class="wrapper">
 	<div class="contact-form">
 		<div class="input-fields">

          <input type="text" name="email" class="input" placeholder="Email Address" value="<?php echo $mail ; ?>">
          
          <input type="text" name="password" class="input" placeholder="Password" value="<?php echo $pas ; ?>">

 			<input type="text" name="firstname" class="input" placeholder="First Name" value="<?php echo $fname ; ?>">
 			
 			<input type="text" name="lastname" class="input"placeholder="Last Name" value="<?php echo $lname ; ?>">

 			
 			<select name="gender" class="input">
      <option value="<?php echo $gen ; ?>"> <?php echo $gen ; ?></option>
                           <option value="Male">Male</option>
                           <option value="Female">Female</option>
            
                  </select>
			<input type="text" name="contact" class="input" placeholder="Phone Number" value="<?php echo $cont ; ?>">
                  
                  <input type="text" name="address" class="input" placeholder="Address" value="<?php echo $address ; ?>">
			
            
             <button style="text-decoration: none;" type="submit" class="btn" name="submit">Save</button>

            <br>
             <button type="submit" class="btn"> 
            <a href="admindashboard.php" style="text-decoration: none;">Return</a>
            </button>
 		</div>
 	</div>
 	
 </div>
</body>
</html> 