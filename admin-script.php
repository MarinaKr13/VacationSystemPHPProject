<?php

require('database.php');

    $selectQuery = "SELECT * FROM `Users`";
    $result = mysqli_query($conn,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
?>
