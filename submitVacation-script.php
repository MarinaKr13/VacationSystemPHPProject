<?php
require('database.php');
// If form submitted, insert values into the database.

function dateDifference($start_date, $end_date)
{
    // calulating the difference in timestamps 
    $diff = strtotime($start_date) - strtotime($end_date)+1;
      
    // 1 day = 24 hours 
    // 24 * 60 * 60 = 86400 seconds
    return ceil(abs($diff / 86400));
}

if (isset($_POST['submit'])){

$datefrom = $_POST['datefrom'];
$dateto = $_POST['dateto'];
$reason = $_POST['reason'];
$userid = $_COOKIE['userid'];
$duration = dateDifference($datefrom, $dateto);









$sql = "INSERT INTO `Vacations` (`VacationStart`, `VacationEnd`, `DaysRequested`, `Reason`, `EmployeeId`) VALUES ('$datefrom', '$dateto', '$duration','$reason','$userid')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
  header('Location: employee-page.php');

 $selectQuery = "SELECT * FROM `Users` WHERE UserId = '$userid'";
 $result = mysqli_query($conn,$selectQuery);
 while($rows = mysqli_fetch_assoc($result)){
         
   $s_name = $rows['Name'];
   $s_lastName = $rows['LastName'];
                                        
     }



 $variables = array();

 $variables['name'] =  $s_name;
 $variables['lastname'] = $s_lastName;
 $variables['vacation_start'] = $datefrom;
 $variables['vacation_end'] = $dateto;
 $variables['reason'] = $reason;
 $variables['approve_link'] = "approve";
 $variables['reject_link'] = "reject";

 $template = file_get_contents("template.php");

 foreach($variables as $key => $value)
 {
    $template = str_replace('{{ '.$key.' }}', $value, $template);
 }
 $selectmailQuery = "SELECT * FROM `Users` WHERE Type = 'admin'";
 $result = mysqli_query($conn,$selectmailQuery);
 while($rows = mysqli_fetch_assoc($result)){
         
   $to = $rows['Email'];
   mail($to,"New application for vacation",$template,"Dear supervisor,");
                                        
     }

  

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



}
?>
