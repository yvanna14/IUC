<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Admin Login</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }
      body{
        background: #E83009;
      }
      .row{
        background: #FFFFFF;
        border-radius: 30px;
        box-shadow: 12px 12px 22px black;
      }
      img{
        border-top-left-radius: 30px;
        border-bottom-left-radius: 30px;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        width: 400px;
        height: 500px;
        padding-left: 80px;
        padding-top: 50px;
       }
      .btn1{
        border: none;
        outline: none;
        height: 50px;
        width: 100px;
        background-color: #000000;
        color: #FFFFFF;
        border-radius: 4px;
        font-weight:bold;
      }
       .btn1:hover{
       background: #FFFFFF;
       border: 1px solid;
       color: #000000;
      }

         .btn2{
        border: none;
        outline: none;
        height: 50px;
        width: 100px;
        background-color: #000000;
        color: #FFFFFF;
        border-radius: 4px;
        font-weight:bold;
      }

s

    </style>

  </head>
  <body>
    <form method="POST">    
    <section class="Form my-4 mx-8">
      <div class="container">
         <form action="admindashboard.php" method="post"></form>
        <div class="row no-gutters">
          <div class="col-lg-5">
            <img src="adminimage.png" class="img-fluid">
          </div>
          <div class="col-lg-7 px-5 pt-5">

            <h1 class="font-weight-bold py-3">Admin Login</h1>
             <form method="POST" action="log.php">
               <div class="form-row">
                 <div class="col-lg-7">
                   <input type="email" name="email" class="form-control my-2 p-3" placeholder="Email-Address" required>
                 </div>
               </div>
               <div class="form-row">
                 <div class="col-lg-7">
                   <input type="password" name="password" class="form-control my-2 p-3" placeholder="*******" required>
                 </div>
               </div>
               <div class="form-row">
                 <div class="col-lg-7">
                   <button type="submit" name="submit" class="btn1 mt-2 mb-4">
                     Login
                   </button>
                 </div>
               </div>
                <div class="form-row">
                 <div class="col-lg-7">
                  <button class="btn2 mt-2 mb-4 "> 
                    <a style="color: white; text-decoration: none;" href="homepage.php"> 
                     Home
                    </a>
                    </button> 
                 </div>
               </div>
          
              <!-- <a href="#">Forgot Password?</a> -->
               <br>
             </form>
             <br>
             <br>
          </div>

          </div>
          </div> 
      
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>

