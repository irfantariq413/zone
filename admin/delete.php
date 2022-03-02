<?php
	 require('inc/portfolio.php');
	 

     $id= $_GET['id'];

	 $delete= new Portfolio();
	 
	 $delete->deletePortfolio($id);	

     header('location:homee.php');
?>
