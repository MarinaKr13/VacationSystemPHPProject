<?php

require('database.php');
    $userid = $_COOKIE['userid'];

    $selectQuery = "SELECT * FROM `Vacations`WHERE EmployeeId = '$userid' ORDER BY DateSubmitted DESC ";
    $result = mysqli_query($conn,$selectQuery);
    if(mysqli_num_rows($result) > 0){
    }else{
        $msg = "No Record found";
    }
?>
	<!DOCTYPE html>
<html lang="gr">
  <head>
    <title>Vacation System </title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BEGIN OF CSS STYLES REFFERENCE -->
    <link rel="stylesheet" type="text/css" href="./assets/styles.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- BEGIN OF FAVICON ICON -->
    <link rel="shortcut icon" href="./assets/images/favicon.png"/>
    <!-- BEGIN OF JACASCRIPT REFFERENCE -->
    <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js">
    </script>
  </head>
	<body>
     <div class = "main_content">
      <p class="header">Vacation Applications List</p>
          <input class="form_create_submit"  name="addbtn" type="submit" value="Submit Request" onClick="document.location.href='submitVacation-form.php'" />
          <input class="form_create_submit" style=" float: right;" name="logoutbtn" type="submit" value="Log out" onClick="document.location.href='logout.php'" />
		 <div class="table_content">
        <center>
          <form >
            <table border="1px" style="width:40%; line-height:40px; border-collapse: collapse;">
			<thead>
				<tr>
					<th>Date Submitted</th>
					<th>Dates Requested</th>
					<th>Days Requested</th>
					<th>Status</th>
				</tr>
			</thead>
			<tbody>
				<?php
                while($row = mysqli_fetch_assoc($result)){?>
					<tr>
						<td>
							<?php echo $row['DateSubmitted']; ?>
						</td>
						<td>
							<?php echo $row['VacationStart']." to ".$row['VacationEnd']; ?>
						</td>
						<td>
							<?php echo $row['DaysRequested']; ?>
						</td>
						<td>
							<?php echo $row['Status']; ?>
						</td>
						<tr>
							<?}?>
			</tbody>
		</table>
</form>
</center>
</div>
</div>
	</body>

	</html>