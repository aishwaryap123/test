<?php
   session_start();
   include 'config.php';


      $role="user";
         $flag=1;
      
   
         if(isset($_POST['Submit'])){
            if(isset($_POST['username'])){
               
                  $user=$_POST['username'];
            }
               if(isset($_POST['password'])){
                  
                   $pass=$_POST['password'];
               }
           
                   $stmt= $conn->prepare("SELECT * FROM login where name=? AND password=? ");
                     $stmt->bind_param("ss",$user,$pass);
                        $stmt->execute();
                           $stmt->bind_result($i,$n,$p,$r);
                              while($stmt->fetch()){
                                 if($n==$user && $p==$pass){
                                 
                                    $_SESSION['role']=$r;
                                    $flag=0;
                                 }
                                 
                                    
                                 
                              }
                                 if($flag==0){
                                    header("location:task12.php");
                                 }
                                 else if($flag==1){
                                    echo "Please go to register page <a href='register.php'>register</a>";
                                 }

            }  

?>
<html>
	<head>
		<title>LogIn</title>
			<link rel="stylesheet" type="text/css" href="login.css">
	</head>
		<body bgcolor="#FFFFFF">
			<div align="center">
			<div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>LOGIN</b></div>
				
            <div style = "margin:30px">
               
               <form action = "" method = "post"  enctype="multipart/form-data">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br/>
                 
                  <input type = "submit" name="Submit" value = " Submit "/><br />
               </form>
               
               
               <div style = "font-size:11px; color:#cc0000; margin-top:10px"></div>
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>