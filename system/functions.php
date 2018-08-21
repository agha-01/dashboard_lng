<?php 
class Functions{
	public static $url;
	public function __construct(){

	}
	public function start(){
		if (isset($_GET[self::$url])) {
			$contUrl= explode('/',$_GET[self::$url]);
			if ($this->existsController($contUrl[0])) {
				$contUrl[0].='Controller';
				$pageController = new $contUrl[0]();
				if ($pageController->existsMethod($contUrl[1])) {
					if (isset($contUrl[2])) {
						$pageController->$contUrl[1]($contUrl[2]);
					}
					else{
						$pageController->$contUrl[1]();
					}
				}
				else{
					echo "Bele sehife yoxdur";
				}
			}
			else{
				 
				include 'Controllers/pageController.php';
				$pController = new pageController();
				if($pController->existsMethod($contUrl[0])){
					if (isset($contUrl[1])) {
						$pController->$contUrl[0]($contUrl[1]);
					}
					else{
						$pController->$contUrl[0]();
					}
				}
				else{
					echo "bele sehife yoxdur";
				}
			}
		}
		else{
	
			if (@$_SESSION["email"]==null) {
				include 'Controllers/pageController.php';
				$pController = new pageController();
				$pController->login();
			}
			else{
				include 'Controllers/pageController.php';
				$pController = new pageController();
				$pController->home();
			}
		}
	}
	public function existsController($str){
		$contName = 'Controllers/'.$str.'Controller.php';
		if (file_exists($contName)) {
			include $contName;
			return true;
		}
		else{
			return false;
		}
	}
}



?>