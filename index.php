<?php 
session_start();
if ( !$_SESSION['logged_in'] ){
  header( "Location: login.php" ); 
  die();
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
        <div class="col">
          <h1
            class="text-center text-success my-3 border-bottom border-success"
          >
            Welcome! to Index.php File
          </h1>
          <p>
            This page can only be accessed by logged in users
            <a href="logout.php">Logout</a>
          </p>
        </div>
      </div>
    </div>
  </body>
</html>
