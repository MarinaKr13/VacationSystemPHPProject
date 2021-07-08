<!DOCTYPE html>
<html lang="gr">
   <head>
      <title>Login</title>
	  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
	   <!-- BEGIN OF CSS STYLES REFFERENCE -->
      <link rel="stylesheet" type="text/css" href="./assets/styles.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	   
	   <!-- BEGIN OF FAVICON ICON -->
      <link rel="shortcut icon" href="./assets/images/favicon.png"/>
	   
	   <!-- BEGIN OF JACASCRIPT REFFERENCE -->
      <script type="text/javascript" src="./assets/js/jquery-3.3.1.min.js"></script>
	</head>
	
   <body>
      <?php
         include('login-script.php');
         ?>
      <div class="main_content">
         <p class="header">Welcome to vacation system</p>
		  
           <center>
               <form class="form_login" action="" method="post" name="login" >
                  
                  <table class="form-table">
                     <tr class="form-table-row">
                        <td class="form-table-cell-left">
                           <i class="fa fa-user"></i>
                        </td>
                        <td class="form-table-cell-right">
                           <input class="form_login_input" type="text" name="email" placeholder="Email" required />
                        </td>
                     </tr>

                     <tr class="form-table-row"> 
                        <td class="form-table-cell-left">
                           <i class="fa fa-user"></i>
                        </td>
                        <td class="form-table-cell-right">

                           <input class="form_login_input" type="password" name="password" placeholder="Password" required />
                        </td>
                     </tr>

                     <tr>
                        <td colspan="2">
                           <center><input class="form_login_submit" name="submit" type="submit" value="Login" /></center>
                        </td>
                     </tr>
                     
                  </table>                   
                     
                  

                  
                  <br><br><br>
                  
               </form>
         </center>
      </div>
   </body>
</html>