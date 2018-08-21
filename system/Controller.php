<?php 
class Controller{
	public static $view;
	public static $conn;
	public function __construct(){
		
		self::$conn = new Model();
		session_start();
		self::$view = new Viewer();
		
	}
}


?>