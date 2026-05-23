<?php
session_start();

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<h1>Welcome <?php echo $_SESSION['user']; ?></h1>

<a href="logout.php">Logout</a>
<?php
include 'db.php';

$result = mysqli_query($conn,"SELECT * FROM foods");

while($row = mysqli_fetch_assoc($result)){
?>

<div>

<h3><?php echo $row['food_name']; ?></h3>

<p>₹<?php echo $row['price']; ?></p>

<img src="uploads/<?php echo $row['image']; ?>" width="100">

<br><br>

<a href="edit-food.php?id=<?php echo $row['id']; ?>">Edit</a>

<a href="delete-food.php?id=<?php echo $row['id']; ?>">Delete</a>

</div>

<?php } ?>