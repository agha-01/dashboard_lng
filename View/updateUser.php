<?php 
$name=$_POST["name"];
$sname=$_POST["sname"];
$phone=$_POST["phone"];
$b_day=$_POST["b_day"];
$email=$_POST["email"];
$status=$_POST["status"];
$gender=$_POST["gender"];
$confirm=$_POST["confirm"];
$file=$_FILES["image"];
$id = $_POST["hidden"];
$uImage = $_POST["uImage"];
$type=["image/jpg","image/png","image/jpeg","image/psd","image/bmp"];
if (in_array($file["type"],$type)) {
	$rand=rand(999,10000000000);
	$mode=end(explode(",",$file["name"]));
	$filename='images/uploads/'.$rand.".".$mode;
	$size=$file["size"]/1024;
	if ($size<=1024*5) {
		if (move_uploaded_file($file["tmp_name"],$filename)) {
			$sql=Controller::$conn->usersUpdate($name,$sname,$b_day,$email,$phone,$filename,$gender,$confirm,$status,$id);	
			echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
			?>
		     <script>
		      setTimeout(function(){
		        location.replace('<?php echo "$site_url"."userlist/$lng"; ?>');
		      },1000);
		    </script> 

    		<?php
		}
		else{
			echo "<center><h1 class='text-danger'>Yuklediyiniz sekilde problem var</center></h1>";
			?>
		     <script>
		      setTimeout(function(){
		        location.replace('<?php echo "$site_url"."userlist/$lng"; ?>');
		      },1000);
		    </script> 

    		<?php
		}
	}else{
		echo "<center><h1 class='text-success'>Sekilin yaddasi 5mb cox olmamalidir</center></h1>";
		?>
		     <script>
		      setTimeout(function(){
		        location.replace('<?php echo "$site_url"."userlist/$lng"; ?>');
		      },1000);
		    </script> 

    		<?php
	}


}else{
	$sql=Controller::$conn->usersUpdate($name,$sname,$b_day,$email,$phone,$uImage,$gender,$confirm,$status,$id);
	echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
	?>
		     <script>
		      setTimeout(function(){
		        location.replace('<?php echo "$site_url"."userlist/$lng"; ?>');
		      },1000);
		    </script> 

    		<?php
}




 ?>