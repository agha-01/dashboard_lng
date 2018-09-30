<?php 
$basliq=$_POST["basliq"];
$text=$_POST["text"];
$basliqr=$_POST["basliqr"];
$textr=$_POST["textr"];
$basliqen=$_POST["basliqen"];
$texten=$_POST["texten"];
$status=$_POST["status"];
$file=$_FILES["image"];
$kate=$_POST["kate"];
$type=["image/jpg","image/png","image/jpeg","image/psd","image/bmp"];
if (in_array($file["type"],$type)) {
	$rand=rand(999,10000000000);
	$mode=end(explode(",",$file["name"]));
	$filename='images/uploads/'.$rand.".".$mode;
	$size=$file["size"]/1024;
	if ($size<=1024*5) {
		if (move_uploaded_file($file["tmp_name"],$filename)) {
			$sql=Controller::$conn->Insert($filename,$basliq,$text,$status,$kate,$basliqr,$textr,$basliqen,$texten);
			echo "bazaya yazildi";
			// echo "<script>
			// 	setTimeout(function(){
			// 		location.replace('".$site_url."news/'.".$lng.");
			// 		});
			// </script>";
		}
		else{
			echo "sekilde problem var";
			// echo "<script>
			// 	setTimeout(function(){
			// 		location.replace('".$site_url."addnews/'.".$lng.");
			// 		});
			// </script>";
		}
	}else{
		echo "sekil 3mb coxdur";
		// echo "<script>
		// 		setTimeout(function(){
		// 			location.replace('".$site_url."addnews/'.".$lng.");
		// 			});
		// 	</script>";
	}


}else{
	echo "Sekil olsun";
	// echo "<script>
	// 			setTimeout(function(){
	// 				location.replace('".$site_url."addnews/'.".$lng.");
	// 				});
	// 		</script>";
}

















 ?>
