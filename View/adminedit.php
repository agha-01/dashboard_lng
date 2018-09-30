<?php 
$name=$_POST["name"];
$sname=$_POST["sname"];
$email=$_POST["email"];
$pass=md5(sha1($_POST["pass"]));
$repass=md5(sha1($_POST["repass"]));
$status=$_POST["status"];
$id=$_POST["hidden"];
if ($pass!=$repass) {
	echo "<center><h1 class='text-warning'>parol eyni deyil</h1></center>";
		?>
     <script>
      setTimeout(function(){
        location.replace('<?php echo "$site_url"."adminlist/$lng"; ?>');
      },1000);
    </script> 

    <?php
}
else{
	$sql=Controller::$conn->adminUpdate($name,$sname,$email,$pass,$status,$id);
	if ($sql) {
		echo "<center><h1 class='text-primary'>Melumat deyisdi</h1></center>";
		?>
		     <script>
		      setTimeout(function(){
		        location.replace('<?php echo "$site_url"."adminlist/$lng"; ?>');
		      },1000);
		    </script> 

    <?php
	}
	else{
		echo "error";
	}

}









 ?>