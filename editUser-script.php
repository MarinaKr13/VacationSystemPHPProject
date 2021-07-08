<?php
require('database.php');
// If form submitted, insert values into the database.
if (isset($_POST['email'])){

$name = $_POST['name'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$password = $_POST['password'];
$type = $_POST['type'];
$ID = $_POST['userid'];





if($password == $confirmpassword){
             
         
// assign Query
             
             
$sql = "UPDATE `Users` SET Name = '$name' , LastName= '$lastname' , Email ='$email' ,Password ='$password', Type = '$type' WHERE UserId = $ID ";



if ($conn->query($sql) === TRUE) {
  echo "User updated successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

}

else{
echo "<div class='form'><h3>Passwords do not match.</h3></div>";
}
}
?>
