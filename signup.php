<?php 
require "classes/Database.php";
require "classes/User.php";


$database = new Database();
$conn = $database->getdb(); 


$message = "";
if ( $_SERVER['REQUEST_METHOD'] == "POST" ){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $c_password = $_POST['password_confirm'];

    $result =  User::create( $conn , $name , $email , $password  );

    if ( $result ){
        $message = "New User is created";
    }

}


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
      defer
    ></script>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <h3 class="text-center"> SignUp Here! </h3>
        <div class="col-md-4 m-auto">
            <?php if ( $message != "" )
            { echo "<p class='text-center text-success border border-success' > 
            $message </p>";  
            }  ?>
            <form method="POST" action="">
                <div class="my-3">
                   <input class="form-control" placeholder="Enter Name" type="text" name="name" id=""> 
                </div>
                <div class="my-3">
                   <input class="form-control" placeholder="Enter email" type="email" name="email" id=""> 
                    
                </div>
                <div class="my-3">
                   <input class="form-control" placeholder="Enter Passcode" type="password" name="password" id=""> 
                    
                </div>
                <div class="my-3">
                   <input class="form-control" placeholder="Enter Confirmation Passcode" type="password" name="password_confirm" id=""> 
                    
                </div>
                <div class="my-3">
                    <button type="submit" class="btn btn-secondary">Sign Up</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </body>
</html>
