<?php
require('database.php');
// If form submitted, insert values into the database.
if (isset($_POST['email'])){

$password = $_POST['password'];
$email = $_POST['email'];

//Checking is user existing in the database or not
$query = "SELECT * FROM `Users` WHERE Email='$email'AND Password='$password'";
$result = mysqli_query($conn,$query) or die(mysqli_error());
$rows = mysqli_num_rows($result);

if($rows==1){
   while ($row = mysqli_fetch_row($result)) {
    $userid = $row['0'];
    $type = $row['5'];
if($type == 'admin'){
header("location:admin-page.php");
}
else{
header("location:employee-page.php");
}

setcookie(userid, $userid);

   }

}else{
echo "<div class='form'><h3>Username/password is incorrect.</h3></div>";
}
}
?>
