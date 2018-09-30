<?php 

$explode =explode("_", $param);
$sql=Controller::$conn->delete($explode[0],$explode[1]);
if ($sql) {
	echo "<center><h1 class='text-primary'>Melumat Silindi</h1></center>";
}
else{
	echo "error";
}








 ?>
<!-- <script>
	setTimeout(function(){
		location.replace()
	},1000);
</script> -->