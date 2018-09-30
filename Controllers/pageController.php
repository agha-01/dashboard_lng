<?php 
class pageController extends Controller{
	public function __construct(){
		Controller::__construct();
	}
	public function home($lng){
		Controller::$view->view('home',$lng);

	}
	public function login($lng=null){
		Controller::$view->view('login',$lng);
	}
	public function about($lng){
		Controller::$view->view('about',$lng,$str);
	}
	public function a_exit($lng){
		Controller::$view->view('a_exit',$lng);
	}
	public function news($lng,$str){
		Controller::$view->view('news',$lng,$str);
	}
	
	public function editnews($lng,$str){
		Controller::$view->view('editnews',$lng,$str);
	}
	public function addnews($lng){
		Controller::$view->view('addnews',$lng);
	}
	public function userlist($lng,$str){
		Controller::$view->view('userlist',$lng,$str);
	}
	public function addadmin($lng){
		Controller::$view->view('addadmin',$lng);
	}
	public function adminlist($lng){
		Controller::$view->view('adminlist',$lng);
	}
	public function editusers($lng,$str){
		Controller::$view->view('editusers',$lng,$str);
	}
	public function elanlar($lng,$str){
		Controller::$view->view('elanlar',$lng,$str);
	}
	public function updateUser($lng){
		Controller::$view->view('updateUser',$lng);
	}
	public function editelanlar($lng,$str){
		Controller::$view->view('editelanlar',$lng,$str);
	}
	public function editadmin($lng,$str){
		Controller::$view->view('editadmin',$lng,$str);
	}
	public function adminadd($lng){
		Controller::$view->view('adminadd',$lng);
	}
	public function newsadd($lng){
		Controller::$view->view('newsadd',$lng);
	}
	public function adminedit($lng){
		Controller::$view->view('adminedit',$lng);
	}
	public function a_status($lng,$str){
		Controller::$view->view('a_status',$lng,$str);
	}
	public function newsedit($lng,$str=null){
		Controller::$view->view('newsedit',$lng,$str);
	}
	public function delete($lng,$str=null){
		Controller::$view->view('delete',$lng,$str);
	}
	public function elanlaredit($lng){
		Controller::$view->view('elanlaredit',$lng);
	}
	public function order_pages($lng,$str){
		Controller::$view->view('order_pages',$lng,$str);
	}
	public function orderSave($lng){
		Controller::$view->view('orderSave',$lng);
	}
	public function mail($lng){
		Controller::$view->view('mail',$lng);
	}
	
	public function sendmail(){
		Controller::$view->view('sendmail');
	}
	public function mesaj($lng){
		Controller::$view->view('mesaj',$lng);
	}
	public function addmail($lng,$str){
		Controller::$view->view('addmail',$lng,$str);
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