<?php 
class Model{
	public $conn;
	public $host="localhost";
	public $username ="root";
	public $pass = "";
	public $dbname="dashboard";
	public $nSelect;


	public function __construct(){
		$this->conn = mysqli_connect($this->host,$this->username,$this->pass,$this->dbname);

		if (!$this->conn) {

			echo "xeta";
		}
		else{
			 mysqli_set_charset($this->conn,"utf8");

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

				$_SESSION["Dashboardemail"]=$email;
				
				echo "<script>
        location.replace('home/az');
    </script>";
    return true;
			}

		}
	}
	
	public $nInsert;
	public function nInsert($name,$sname,$email,$pass,$status){
		$this->nInsert=mysqli_query($this->conn,"INSERT INTO `admin`(`name`, `sname`, `email`, `password`, `r_date`, `status`, `save_me`, `lng`) VALUES ('$name','$sname','$email','$pass','".date("Y-m-d h:i:s")."','$status','1','az')");
		return $this->nInsert;
	}
	
	public $select;
	public function select($strr,$lng="az",$id=1){
		$this->select=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE ".$id." AND lng = '$lng'");
		return $this->select;
	}

	public $Userselect;
	public function Userselect($strr,$id=1){
		$this->Userselect=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE ".$id."");
		return $this->Userselect;
	}

	public $selectForEditt;
	public function selectForEdit($strr,$id){
		$this->selectForEditt=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE id ='$id'");

		return $this->selectForEditt;
	}



	public $selectOrder;
	public function selectOrder($strr,$id1,$id2){
		$this->selectOrder=mysqli_query($this->conn,"SELECT * FROM ".$strr." WHERE page_id ='$id1' AND admin_id = '$id2'");

		return $this->selectOrder;
	}


	public function nSelect($email){
		$this->nSelect=mysqli_query($this->conn,"SELECT * FROM admin WHERE email='$email'");
		return $this->nSelect;
	}

	public $Insert;
	public function Insert($filename,$basliq,$text,$status,$kate,$basliqr,$textr,$basliqen,$texten){
		$this->Insert=mysqli_query($this->conn,"INSERT INTO `news`(`image`, `basliq`, `text`, `tarix`,`status`, `kate`, `lng`, `n_id`) VALUES ('$filename','$basliq','$text','".date("Y-m-d h:i:s")."','$status','$kate','az',0)");
		$n_id = mysqli_insert_id($this->conn);
		
			$this->Insert=mysqli_query($this->conn,"INSERT INTO `news`(`image`, `basliq`, `text`, `tarix`,`status`, `kate`, `lng`, `n_id`) VALUES ('$filename','$basliqr','$textr','".date("Y-m-d h:i:s")."','$status','$kate','ru','$n_id')");
			$this->Insert=mysqli_query($this->conn,"INSERT INTO `news`(`image`, `basliq`, `text`, `tarix`,`status`, `kate`, `lng`, `n_id`) VALUES ('$filename','$basliqen','$texten','".date("Y-m-d h:i:s")."','$status','$kate','en','$n_id')");
			
		
		return true;
	}
	public $adminUpdate;
	public function adminUpdate($name,$sname,$email,$pass,$status,$id){
		$this->adminUpdate=mysqli_query($this->conn,"UPDATE `admin` SET `name`='$name',`sname`='$sname',`email`='$email',`password`='$pass',`status`='$status',`save_me`='1' WHERE id='$id'");
		return $this->adminUpdate;
	}

	public $newsUpdate;
	public function newsUpdate($filename,$basliq,$text,$status,$id,$basliqr,$textr,$basliqen,$texten){
		$this->newsUpdate=mysqli_query($this->conn,"UPDATE `news` SET `image`='$filename',`basliq`='$basliq',`text`='$text',`status`='$status' WHERE id='$id'");
		$id+=1;
		$this->newsUpdate=mysqli_query($this->conn,"UPDATE `news` SET `basliq`='$basliqr',`text`='$textr' WHERE id='$id'");
		$id+=1;
		$this->newsUpdate=mysqli_query($this->conn,"UPDATE `news` SET `basliq`='$basliqen',`text`='$texten' WHERE id='$id'");
		return true;
	}


	public $delete;
	public function delete($table,$id){
		$this->delete=mysqli_query($this->conn,"DELETE FROM ".$table." WHERE id = '$id'");
		$this->delete=mysqli_query($this->conn,"DELETE FROM ".$table." WHERE n_id = '$id'");
		return true;
	}
	public $cixis;
	public function cixis(){
		$this->cixis=mysqli_query($this->conn,"UPDATE `admin` SET `cixis`=now() WHERE email='".@$_SESSION["email"]."'");
		return $this->cixis;
	}

	public $giris;
	public function giris(){
		$this->cixis=mysqli_query($this->conn,"UPDATE `admin` SET `giris`=now() WHERE email='".@$_SESSION["email"]."'");
		return $this->giris;
	}
	public $update_admin_status;
	public function update_admin_status($status,$id){
		$this->update_admin_status=mysqli_query($this->conn,"UPDATE `admin` SET status ='$status'  WHERE id='$id'");
		return $this->update_admin_status;
	}

	public $eUpdate;
	public function eUpdate($uname,$sname,$basliq,$text,$filename,$status){
		$this->eUpdate=mysqli_query($this->conn,"UPDATE `elanlar` SET `uname`=$uname,`sname`='$sname',`basliq`='$basliq',`text`='$text',`image`='$filename',`status`='$status' WHERE id");
		return $this->eUpdate;
	}
	public $elanUpdate;
	public function elanUpdate($uname,$sname,$basliq,$text,$filename,$status,$id){
		$this->elanUpdate=mysqli_query($this->conn,"UPDATE `elanlar` SET `uname`='$uname',`sname`='$sname',`basliq`='$basliq',`text`='$text',`image`='$filename',`status`='$status' WHERE id='$id'");
		return $this->elanUpdate;
	}


	public $usersUpdate;
	public function usersUpdate($name,$sname,$b_day,$email,$phone,$filename,$gender,$confirm,$status,$id){
		$this->usersUpdate=mysqli_query($this->conn,"UPDATE `users` SET    `name`='$name',`sname`='$sname',`b_day`='$b_day',`email`='$email',`phone`='$phone',`image`='$filename',`gender`='$gender',`confirm`='$confirm',`status`='$status' WHERE id ='$id' ");
		return $this->usersUpdate;
	}
	public $order;
	public function Order($pages,$id){
		$sql = mysqli_query($this->conn,"DELETE FROM `order_pages` WHERE  admin_id = '$id'");
			foreach ($pages as $key ) {
				$insert = mysqli_query($this->conn,"INSERT INTO `order_pages`(`admin_id`, `page_id`) VALUES ('$id','$key')");
			}
	}
	public $checkOrder;
	public function checkOrder($p_id){
		$sadmin = mysqli_query($this->conn,"SELECT  * FROM admin WHERE email = '".$_SESSION["Dashboardemail"]."'");
		$row= mysqli_fetch_assoc($sadmin);
		$id = $row["id"];
		$sql = mysqli_query($this->conn,"SELECT * FROM order_pages WHERE page_id = '$p_id' AND admin_id = '$id'");
		if (mysqli_num_rows($sql)>0) {
			return true;
		}
		else{
			return false;
		}
	}

	public $sidebar;
	public function sidebar($lng){
		$this->sidebar = mysqli_query($this->conn,"SELECT * FROM pages WHERE l_id = '$lng' AND s_id=0");
		while($row = mysqli_fetch_assoc($this->sidebar)){
			$sql2 = mysqli_query($this->conn,"SELECT * FROM pages WHERE l_id='$lng' AND s_id = '".$row["id"]."'");
			if (mysqli_num_rows($sql2)==0) {
				echo '<li>
                        <a href="'.'http://localhost/dashboard/'.$row["url"].$lng.'"> <i class="menu-icon fa fa-user"></i>'.$row["name"].'</a>
                    </li>';
			}
			else{
				
					
				
				echo '<li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="menu-icon  fa fa-newspaper-o"></i>'.$row["name"].'</a>
                        <ul class="sub-menu children dropdown-menu">';
                        while ($row2 = mysqli_fetch_assoc($sql2)) {
                         echo   '<li><i class="menu-icon fa fa-newspaper-o"></i><a href="http://localhost/dashboard/'.$row2["url"].$lng.'/'.$row2["type"].'">'.$row2["name"].'</a></li>';
                     }
                           echo  '                                                      
                        </ul>
                    </li>';
                    
			}
		}

	}
	


}


?>