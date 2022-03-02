<?php

require_once('database.php');
        
class Category {
	
	public $con=null;
	
	public function __construct(){
		$db= new Databases();
       $this->con= $db->con;
	}
	
	
	public function getAllCategories(){
		
		
		$res= mysqli_query($this->con,"SELECT * from categories");
		
	      while($row=mysqli_fetch_assoc($res)){
		    $data[]=$row;
		 }
		return($data);
	}
	
	
	public function addCategory($info){
		
		$title=$info['title'];
		
		mysqli_query($this->con,"insert into categories (title) values ('$title')");
		
		
	}
	
	public function getCategoryoById($id){
		
		$result= mysqli_query($this->con,"SELECT * from categories where id = $id ");
		while($row=mysqli_fetch_assoc($result)){
		    $array[]=$row;
		 }
		return($array);
		
		 
	}
	
	public function updateCategory($info,$id){
		
		$title=$info['title'];
		
        mysqli_query($this->con,"UPDATE categories set title= '$title' where id='$id'");
		 
	}
	
	public function deleteCategory($id){
		 
         mysqli_query	($this->con,"delete from categories where id = $id ");	
		
	}
}
