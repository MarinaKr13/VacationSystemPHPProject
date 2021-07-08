<!DOCTYPE html>
<html lang="gr">

<head>
	<title>Vacation System - Admin Mode</title>
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
include('createUser-script.php');
?>
		<div class="main_content">
			<p class="header">Create User</p>
             <div class="table_content">
			<center>
				<form  class="form_login" action="" method="post" name="register">
					<table class="form-table">
						<tr class="form-table-row">
							<td class="form-table-cell-left"> Name: </td>
							<td class="form-table-cell-right">
								<input class="form_login_input" type="text" name="name" placeholder="Name" required /> </td>
						</tr>
						<tr class="form-table-row">
							<td class="form-table-cell-left"> Last Name: </td>
							<td class="form-table-cell-right">
								<input class="form_login_input" type="text" name="lastname" placeholder="Last Name" required /> </td>
						</tr>
						<tr class="form-table-row">
							<td class="form-table-cell-left"> Email: </td>
							<td class="form-table-cell-right">
								<input class="form_login_input" type="text" name="email" placeholder="Email" required /> </td>
						</tr>
						<tr class="form-table-row">
							<td class="form-table-cell-left"> Password: </td>
							<td class="form-table-cell-right">
								<input class="form_login_input" type="text" name="password" placeholder="Password" required /> </td>
						</tr>
						<tr class="form-table-row">
							<td class="form-table-cell-left"> Confirm Password: </td>
							<td class="form-table-cell-right">
								<input class="form_login_input" type="text" name="confirmpassword" placeholder="Confirm Password" required /> </td>
						</tr>
						<tr class="form-table-row">
							<td class="form-table-cell-left"> Type: </td>
							<td class="form-table-cell-right">
								<select name="type" class="form_login_input">
									<option value="admin">admin</option>
									<option value="employee">employee</option>
								</select>
							</td>
							<br>
							<br>
							<br>
							<tr class="form-table-row">
								<td class="form-table-cell-left">
									<input class="form_create_submit" name="submit" type="submit" value="Create" /> </td>
								<td class="form-table-cell-right">
									<input class="form_create_submit" name="back" style=" float: right;" type="submit" value="Back" onClick="document.location.href='admin-page.php'" /> </td>
							</tr>
				</form>
				</table>
			</center>
		</div>
</div>
</body>

</html>