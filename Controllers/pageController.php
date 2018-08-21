<?php 
class pageController extends Controller{
	public function __construct(){
		Controller::__construct();
	}
	public function home(){
		Controller::$view->view('home');

	}
	public function login(){
		Controller::$view->view('login');
	}
	public function about(){
		Controller::$view->view('about',$str);
	}
	public function a_exit(){
		Controller::$view->view('a_exit');
	}
	public function news(){
		Controller::$view->view('news');
	}
	
	public function editnews(){
		Controller::$view->view('editnews');
	}
	public function addnews(){
		Controller::$view->view('addnews');
	}
	public function userlist(){
		Controller::$view->view('userlist');
	}
	public function addadmin(){
		Controller::$view->view('addadmin');
	}
	public function adminlist(){
		Controller::$view->view('adminlist');
	}


	
	public function existsMethod($str){
		if (method_exists($this, $str)) {
			return  true;
		}
		else{
			return false;
		}
	}
}




?>	