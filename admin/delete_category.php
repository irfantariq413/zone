<?php
	 require('inc/category.php');

     $id= $_GET['id'];

	 $delete= new Category();
	 
	 $delete->deleteCategory($id);	

     header('location:categories.php');
?>
