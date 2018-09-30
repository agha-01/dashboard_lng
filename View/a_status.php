<?php 

$exp = explode('_', $param);
if ($exp[1]==1) {
	$status=2;
}
else{
	$status=1;
}
Controller::$conn->update_admin_status($status,$exp[0]);



?>
<script>
	location.replace('<?php echo "$site_url"."adminlist/$lng"; ?>');
</script>

