<?php   
 //database.php

 class Databases{
	
	protected $host="localhost";
	protected $user="root";
	protected $password="";
	protected $database="home_page";
	 
	public $con= null;
	
	public function __construct(){
		$this->con= mysqli_connect($this->host,$this->user,$this->password,$this->database);
		
		if($this->con->connect_error){
			echo "Fail" . $this->con->connect_error;
		}	
	}
 }
