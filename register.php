<?php
include 'db.php';

if(isset($_POST['register'])){

$name = $_POST['name'];
$email = $_POST['email'];

$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$role = "user";

$query = "INSERT INTO users(name,email,password,role)
VALUES('$name','$email','$password','$role')";

mysqli_query($conn,$query);

echo "Registration Successful";

}
?>

<form method="POST">

<input type="text" name="name" placeholder="Name"><br><br>

<input type="email" name="email" placeholder="Email"><br><br>

<input type="password" name="password" placeholder="Password"><br><br>

<button name="register">Register</button>

</form>