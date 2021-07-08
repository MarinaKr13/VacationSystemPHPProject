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





if($password == $confirmpassword){



$sql = "INSERT INTO `Users` (`UserId`, `Name`, `LastName`, `Email`, `Password`, `Type`) VALUES (NULL,'$name', '$lastname', '$email','$password','$type')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
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
