<?php 
$uname=$_POST["uname"];
$sname=$_POST["sname"];
$basliq=$_POST["basliq"];
$status=$_POST["status"];
$text=$_POST["text"];
$file=$_FILES["image"];
$id=$_POST["hidden"];
$uImage=$_POST["uImage"];
$type=["image/jpg","image/png","image/jpeg","image/psd","image/bmp"];
if (in_array($file["type"],$type)) {
	$rand=rand(999,10000000000);
	$mode=end(explode(",",$file["name"]));
	$filename='images/uploads/'.$rand.".".$mode;
	$size=$file["size"]/1024;
	if ($size<=1024*5) {
		if (move_uploaded_file($file["tmp_name"],$filename)) {
			$sql=Controller::$conn->elanUpdate($uname,$sname,$basliq,$text,$filename,$status,$id);	
			echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
			echo "<script>
					setTimeout(function(){
						location.replace('elanlar');
						},1500);
			</script>";
		}
		else{
			echo "<center><h1 class='text-danger'>Yuklediyiniz sekilde problem var</center></h1>";
			echo "<script>
			setTimeout(function(){
				location.replace('elanlar');
						},1500);
		</script>";
		}
	}else{
		echo "<center><h1 class='text-success'>Sekilin yaddasi 5mb cox olmamalidir</center></h1>";
		echo "<script>
			setTimeout(function(){
				location.replace('elanlar');
						},2000);
		</script>";
	}


}else{
	$sql=Controller::$conn->elanUpdate($uname,$sname,$basliq,$text,$uImage,$status,$id);
	echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
	echo "<script>
			setTimeout(function(){
				location.replace('elanlar');
						},1000);
		</script>";
}












 ?>