<!DOCTYPE html>
<html lang="gr">

<head>
	<title>Vacation System</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- BEGIN OF CSS STYLES REFFERENCE -->
	<link rel="stylesheet" type="text/css" href="./assets/styles.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- BEGIN OF FAVICON ICON -->
	<link rel="shortcut icon" href="./assets/images/favicon.png" />
	<!-- BEGIN OF JACASCRIPT REFFERENCE -->
	<script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js">
	</script>
</head>
<body>
 <?php
include('submitVacation-script.php');
?>
<div class="main_content">
			<p class="header">Submit New Application</p>
             <div class="table_content">
			<center>
<form class="form_login" action="" method="post" name="register">
	<table class="form-table">
						<tr class="form-table-row">
							<td class="form-table-cell-left">
								Date From: </td>
							<td class="form-table-cell-right">
							<input class="form_login_input" type="date" name="datefrom" placeholder="dd-mm-yyyy" value=""
								   min="1997-01-01" max="2030-12-31" required /></td></tr>
		<tr class="form-table-row">
							<td class="form-table-cell-left">
								Date To:</td>
			<td class="form-table-cell-right">
			<input class="form_login_input"  type="date" name="dateto" placeholder="dd-mm-yyyy" value=""
				   min="1997-01-01" max="2030-12-31" required /></td></tr>
	<tr class="form-table-row">
							<td class="form-table-cell-left">
								Reason:</td>
		<td class="form-table-cell-right">
		<textarea class="form_login_input" style ="width:700px; height:300px;" rows="50" cols="50" name="reason" placeholder="Reason" required > </textarea>
		</td></tr>
	<tr class="form-table-row">
								<td class="form-table-cell-left">
									<input class="form_create_submit" name="submit" type="submit" value="Submit" /></td>
		<td class="form-table-cell-right">
<input class="form_create_submit" name="back" style=" float: right;" type="submit" value="Back" onClick="document.location.href='employee-page.php'"/></td>
		</tr>
	</table>
</form>
				 </center>
	</div>
</div>


</body>
</html>
