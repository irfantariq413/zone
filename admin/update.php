<?php
$title_error = $link_error = $img_error = $error = $category_error = "";

require('inc/portfolio.php');

require('inc/category.php');

$obj_update= new Portfolio();

$obj_update2= new Category();

$all_cate=$obj_update2->getAllCategories();

$id= $_GET['id'];

$value = $obj_update->getPortfolioById($id);

foreach($value as $name){

$image_name= $name['name'];
	
}
if(isset($_FILES['files'])){
	
	$errors= array();
	
	$file_name= $_FILES['files']['name'];
	$file_size= $_FILES['files']['size'];
	$file_temp= $_FILES['files']['tmp_name'];
	$file_type= $_FILES['files']['type'];
	$file_ext= end(explode('.',$file_name));
	$extensions= array("jpeg","jpg","png");
	$random= rand(0,100000);
	$new_file_name = $random . "." . $file_ext;
	
	if(in_array($file_ext,$extensions)===false){
		$errors[]="This extension is not allowed, Please upload jpeg,jpg or png file.";
	}
	
	if ($file_size > 2097152){
		$errors[]="File size must be 2mb or lower.";
	}
	if(empty($errors)==true){
		unlink("images/".$image_name);
		move_uploaded_file($file_temp,"images/".$new_file_name);
	}
	
	$id= $_GET['id'];
	$info=$_POST;
	
	$info['img']=$new_file_name;
	
    if (empty($info['title'])) {
    $title_error= "Title is required";
  }
	
  elseif(empty($info['link'])) {
    $link_error = "Link is required";
  }
	elseif(empty($info['cate_id'])) {
    $category_error = "Category is required";
  }
	
	elseif(empty($file_ext)) {
    $img_error = "Image is required";
  }
    else{
		
	
	$obj_update->updatePortfolio($info,$id);
	
	header('location:homee.php');
		}
	}	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Update Portfolio</title>
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
                   
                    <h2 class="text-center">Update Portfolio</h2>
                    
                   
                    <div class="form-group">
                    
                        <input class="form-control" type="text" name="title" value="<?php echo $data['title']; ?>" >
                         <span class="text-danger"><?php echo $title_error; ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="link" value="<?php echo $data['link'];  ?>">
                        <span class="text-danger"><?php echo $link_error; ?></span>
                    </div>
                    
                    <div class="form-group">
   
                            <select class="form-control" name="cate_id">
                                   <option value="">--- --- </option>
                                   <?php
					                  foreach($all_cate as $list)	{
						             ?>
                                    <option value="<?php echo $list['id'];   ?>"><?php echo $list['title'];   ?></option>
                                    <?php
						
					}
						?>
                      </select>
                       
                        <span class="text-danger"><?php echo $category_error; ?></span>
                   </div>
                    
                    <div class="form-group">
                       <img src="images/<?php echo $data['name'];?>" width="100px" height="70px">
                        <input class="form-control" type="file" name="files">
                        <span class="text-danger"><?php echo $img_error; ?></span>
                    </div>
                    
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="insert" value="Update Portfolio">
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
