<?php  

if(isset($_POST['login'])){
	
	require('inc/portfolio.php');
	
    $email= $_POST['email'];
	$password= $_POST['password'];
	
    $db= new Portfolio();
	$db->doLogin($email,$password);	
	header('location:homee.php');
}
 
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Innovative Zone</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br />  
           <div class="container" style="width:500px;">  
                <h3 align="">Login Form</h3><br />  
                
                <form action="index.php" method="post">  
                     <label>Username</label>  
                     <input type="email" name="email" class="form-control" />  
                     <br />  
                     <label>Password</label>  
                     <input type="password" name="password" class="form-control" />  
                     <br />  
                     <input type="submit" name="login" class="btn btn-info" value="Login" />  
                </form>  
           </div>  
           <br />  
      </body>  
 </html>  