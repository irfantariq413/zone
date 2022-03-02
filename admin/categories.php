<?php
	 
	 require('inc/category.php');
	 
	 $getCate= new Category();
	 
	 $showCate=$getCate->getAllCategories();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Panel</title>
    
    <style>
		@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
		body{
			font-family: 'Poppins';
			margin: 0;
			padding: 0;
		}
	  	div.logo{
	        width: 80%;
	        margin-left: auto;
	        margin-right: auto;
			
}
div.logo h1{
	display: inline-block;
}
div.logo a{
	float: right;
	font-size: 20px;
	margin-top: 25px;
	margin-left: 20px;
	border: 2px solid rgba(0,68,100,1.00);
	border-radius: 5px;
	padding: 5px 10px;
	font-weight: bold;
	text-decoration: none;
	color: rgba(0,68,100,1.00);
}
	 ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color:rgba(0,68,100,1.00);
}

.active {
 background-color:rgba(0,68,100,1.00);
}
      .head{
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
			width: 70%;
			margin-left: auto;
			margin-right: auto;
			margin-top: 30px;
			margin-bottom: 15px;
		}	
		.head h1{
			display: inline;
		}
		.head a{
			float: right;
			border: 2px solid rgba(0,68,100,1.00);
			font-weight: bold;
			padding: 10px;
			border-radius: 5px;
			color:rgba(0,68,100,1.00) ;
			text-decoration: none;
		}
		
		table {
          font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
          border-collapse: collapse;
          width: 70%;
			margin-left: auto;
			margin-right: auto;
			
}

table td, table th {
  border: 1px solid #ddd;
  padding: 13px;
}

table tr:nth-child(even){background-color: #f2f2f2;}

table tr:hover {background-color: #ddd;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color:rgba(0,68,100,1.00);
  color: white;
}

.but{
			border:2px solid rgba(0,68,100,1.00);
			font-weight: bold;
			padding: 4px 10px;
			border-radius: 5px;
			color:rgba(0,68,100,1.00) ;
			text-decoration: none;
		}	
 </style>
    
  </head>

  <body>
   <div class="logo">
	<h1>Admin Panel</h1>
	<a href="logout.php">Logout</a>
	<a href="homee.php">Portfolio</a>
	
</div>
 <table>
 	<div class="head">
 	<h1>Category</h1>
 	<a href="add_category.php">Add Category</a></div>
 	<tr>
 		<th>Id</th>
 		<th>Title</th>
 		<th>Delete</th>
 		<th>Update</th>
 	</tr>
 	<?php
	 
	 foreach($showCate as $data){
		 ?>
		 
		 <tr>
 	         <td> <?php echo $data['id'];   ?></td>
	         <td> <?php echo $data['title'];   ?></td>
 	         <td><a class="but" href="delete_category.php?id=<?php  echo $data['id'];?>">Delete</a></td>
	         <td><a onClick="myFuncion()" class="but" href="update_category.php?id=<?php  echo $data['id'];?>">Update</a></td>
	     </tr>  
		 
		<?php 
	 }
 	?>
 
 </table>
 <script>
function myFunction() {
  var r = confirm("Are you sure you want to delete it!");
  if (r == true) {
	  //delete record
  } 
	else {
		//don't delete
  }
}
</script>
  </body>
</html>
