<?php 
session_start();
include("connection.php");
include("functions.php");

if($_SERVER['REQUEST_METHOD'] == "POST"){
  //Somthing was posted
  $user_name = $_POST['user_name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  
  if(!empty($user_name) && !empty($password && !is_numeric($user_name))){
    // save to database
    $user_id = random_num(20);
    $query ="insert into users (user_id,username,email,password) values ('$user_id','$user_name','$email','$password')";
    mysqli_query($conn, $query);
    header("location: login.php");
    die; 
  }else{
    echo "entrez des informations valides";
  }
} 
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/Applications/MAMP/htdocs/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
  <title>Login</title>
</head>
<body>
<section class="signup_form">
      <h2> Sign up!</h2>
      <form action="" method="post">
        <div>
          <input type="text" name="user_name" placeholder="Nom d'utilisateur">
        </div></br>
        <div>
          <input type="email" name="email" placeholder=" Email">
        </div></br>
        <div>
          <input type="password" name="password" placeholder=" Votre mot de passe">
        </div></br>
      
        <div>
          <button type="submit" value="Login"> Log In </button>
        </div></br>
        <a href="login.php">Click to Login</a>
      </form>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" 
integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" 
integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" 
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" 
integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" 
crossorigin="anonymous"></script>
<script src="script.js"></script>
</body>
</html>
