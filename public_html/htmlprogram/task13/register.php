<?php

	session_start();
	include 'config.php';


		$role="user";
		
	
			if(isset($_POST['Submit'])){
				if(isset($_POST['username'])){
					
					$name=$_POST['username'];
				}
					if(isset($_POST['password'])){
				
						$password=$_POST['password'];
					}
			}	
	

						$stmt=$conn->prepare("INSERT INTO login (name,password,role) values (?,?,?)");
							$stmt->bind_param("sss",$name,$password,$role);
								$stmt->execute();
									$stmt->close();

?>
<html>
	<head>
		<title>Register</title>
			<link rel="stylesheet" type="text/css" href="login.css">
	</head>
		<body bgcolor="#FFFFFF">
			<div align="center">
			<div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post"  enctype="multipart/form-data">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br/>
                 
                  <input type = "submit" name="Submit" value = " Submit "/><br />
               </form>
               <a href="login.php">Login</a> 
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>