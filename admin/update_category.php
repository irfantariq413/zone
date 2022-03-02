<?php

require('inc/category.php');

$title_error = "";

$id= $_GET['id'];

$obj_update= new Category();
	
$value = $obj_update->getCategoryoById($id);

if(isset($_POST['insert'])){
	
	
	$id= $_GET['id'];
	$info=$_POST;
	
    if (empty($info['title'])) {
    $title_error= "Title is required";
  }
    else{
		
	$obj_update->updateCategory($info,$id);
	
	header('location:categories.php');
		}
	}	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Categories</title>
 <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <style>
    @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
		body{
			font-family: 'Poppins';
			background-color:rgba(0,68,100,1.00);
		}
			.container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
.container .form{
    background-color:#fff;
    padding: 30px 35px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container .form form .form-control{
    height: 40px;
    font-size: 15px;
}
.container .form form .button{
    background-color:rgba(0,68,100,1.00);
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.container .form form .button:hover{
    background-color:rgba(0,68,100,1.00);
}
.container .form form .link{
    padding: 5px 0;
}
.container .form form .link a{
    color:rgba(0,68,100,1.00);
}
.container .login-form form p{
    font-size: 14px;
}
.container .row .alert{
    font-size: 14px;
}
		
    </style>


</head>

<body>


  
   <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form login-form">
               <?php
					foreach ($value as $data){
						
                   //  unlink("images/".$data['name']);
						
					?>
                <form method="POST" enctype="multipart/form-data">
                   
                    <h2 class="text-center">Update Category</h2>
                    
                   
                    <div class="form-group">
                    
                        <input class="form-control" type="text" name="title" value="<?php echo $data['title']; ?>" >
                         <span class="text-danger"><?php echo $title_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="insert" value="Update Category">
                    </div>
     
                </form>
                 <?php
					}
					?>
            </div>
        </div>
    </div>

</body>
</html>
