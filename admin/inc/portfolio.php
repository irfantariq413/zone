<?php

require_once('database.php');
        
class Portfolio {
	
	public $con=null;
	
	public function __construct(){
		$db= new Databases();
       $this->con= $db->con;
	}
	
	
	public function doLogin($email,$password){
		$res= mysqli_query($this->con,"SELECT * from admin where email='$email' and password='$password'");
	        if(mysqli_num_rows($res)>0){
		         $_SESSION['email'] = $_POST['email'];
	       }
	}
	
	public function getAllPortfolio(){
		
		
		$res= mysqli_query($this->con,"SELECT * from website");
		
	      while($row=mysqli_fetch_assoc($res)){
		    $data[]=$row;
		 }
		return($data);
	}
	
	
	public function addPortfolio($info){
		
		$title=$info['title'];
		$link=$info['link'];
		$cate_id=$info['cate_id'];
		$img=$info['img'];
		mysqli_query($this->con,"insert into website (name,title,link,category_id) values ('$img','$title','$link','$cate_id')");
		
	}
	
	public function getPortfolioById($id){
		
		$result= mysqli_query($this->con,"SELECT * from website where id = $id ");
		while($row=mysqli_fetch_assoc($result)){
		    $array[]=$row;
		 }
		return($array);
		
		 
	}
	
	public function updatePortfolio($info,$id){
		
		$img= $info['img'];
		$title=$info['title'];
		$link=$info['link'];
		$cate_id=$info['cate_id'];
		
        mysqli_query($this->con,"UPDATE website set name= '$img', title= '$title' , link= '$link' , category_id= '$cate_id' where id='$id'");
		 
	}
	
	public function deletePortfolio($id){
		 
         $res= mysqli_query($this->con,"SELECT * from website where id = $id ");
         $row= mysqli_fetch_assoc($res);
         unlink("images/".$row['name']);
         mysqli_query	($this->con,"delete from website where id = $id ");	
		
	}

}
