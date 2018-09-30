<?php 
$basliq=$_POST["basliq"];
$text=$_POST["text"];
$basliqr=$_POST["basliqr"];
$textr=$_POST["textr"];
$basliqen=$_POST["basliqen"];
$texten=$_POST["texten"];
$status=$_POST["status"];
$file=$_FILES["image"];
$id=$param;
$uImage=$_POST["uImage"];
$type=["image/jpg","image/png","image/jpeg","image/psd","image/bmp"];
if (in_array($file["type"],$type)) {
	$rand=rand(999,10000000000);
	$mode=end(explode(",",$file["name"]));
	$filename='images/uploads/'.$rand.".".$mode;
	$size=$file["size"]/1024;
	if ($size<=1024*5) {
		if (move_uploaded_file($file["tmp_name"],$filename)) {
			$sql=Controller::$conn->newsUpdate($filename,$basliq,$text,$status,$id,$basliqr,$textr,$basliqen,$texten);
			echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
			echo "<script>
					setTimeout(function(){
						location.replace(".$site_url."'news/'".$lng.");
						},1000);
			</script>";
		}
		else{
			echo "<center><h1 class='text-danger'>Yuklediyiniz sekilde problem var</center></h1>";
			echo "<script>
			setTimeout(function(){
				location.replace('".$site_url."news/'".$lng.");
						},1000);
		</script>";
		}
	}else{
		echo "<center><h1 class='text-success'>Sekilin yaddasi 5mb cox olmamalidir</center></h1>";
		echo "<script>
			setTimeout(function(){
				location.replace('".$site_url."news/'".$lng.");
						},1000);
		</script>";
	}


}else{
		$sql=Controller::$conn->newsUpdate($uImage,$basliq,$text,$status,$id,$basliqr,$textr,$basliqen,$texten);
	echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
	echo "<script>
			setTimeout(function(){
				location.replace('".$site_url."news/'".$lng.");
						},1000);
		</script>";
}

















 ?>





