<?php 
class Model{
	public $conn;
	public $host="localhost";
	public $username ="root";
	public $pass = "";
	public $dbname="dashboard";


	public function __construct(){
		$this->conn = mysqli_connect($this->host,$this->username,$this->pass,$this->dbname);
		if (!$this->conn) {
			echo "xeta";
		}
		else{
			return $this->conn;
			
		}
	}
	public function a_login($email,$pass){
		$sql = mysqli_query($this->conn,"SELECT * FROM admin WHERE email = '$email'");
		if (mysqli_num_rows($sql)==0) {
			echo "<h1>bele istifaci yoxdur</h1>";
			echo '<script type="text/javascript">
				setTimeout(function(){
					location.replace("index.php");
				},1000);
			</script>';
				}
		else{
			$row = mysqli_fetch_assoc($sql);
			if (md5(sha1($pass)) != $row["password"]) {
				echo "<h1>parol sehvdir</h1>";
				echo '<script type="text/javascript">
				setTimeout(function(){
					location.replace("index.php");
				},1000);
			</script>';
			}
			else{

				$_SESSION["email"]=$email;
				
				echo "<script>
        location.replace('home');
    </script>";
    return true;
			}

		}
	}
	
	

}


?>