<?php

require_once('database.php');
        
class showPortfolio {
	
	public $con=null;
	
	public function __construct(){
		$db= new Databases();
       $this->con= $db->con;
	}
	
	public function showAllCategories(){
		$result= mysqli_query($this->con,"SELECT * from categories");
			while ($row=mysqli_fetch_assoc($result)){
				$data[]=$row;
			}
		return($data);
	}
	
	
	public function showAllPortfolio($id = ''){
		if($id>0){
			$sql = "SELECT * from website where category_id= '$id'";
		}
		else{
			$sql = "SELECT * from website";
		}
		
		
		$res= mysqli_query($this->con,$sql);
		  while($row=mysqli_fetch_assoc($res)){
			  
		    $dataa[]=$row;
			  
		 }
		
		return($dataa);
	}
	
	/*
	public function showAndroidPortfolio(){
		
		
		$res= mysqli_query($this->con,"SELECT * from website where category_id='Android app'");
		
	      while($row=mysqli_fetch_assoc($res)){
		    $data[]=$row;
		 }
		return($data);
	}
	
	public function showIphonePortfolio(){
		
		
		$res= mysqli_query($this->con,"SELECT * from website where category_id='Iphone app'");
		
	      while($row=mysqli_fetch_assoc($res)){
		    $data[]=$row;
		 }
		return($data);
	}
	
	public function showWordpressPortfolio(){
		
		
		$res= mysqli_query($this->con,"SELECT * from website where category_id='Wordpress'");
		
	      while($row=mysqli_fetch_assoc($res)){
		    $data[]=$row;
		 }
		return($data);
	}
	
	public function showWixPortfolio(){
		
		
		$res= mysqli_query($this->con,"SELECT * from website where category_id='Wix'");
		
	      while($row=mysqli_fetch_assoc($res)){
		    $data[]=$row;
		 }
		return($data);
	}
	
	*/
	
}
