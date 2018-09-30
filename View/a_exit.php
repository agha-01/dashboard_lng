<?php 
$cixis=Controller::$conn->cixis();
session_unset();
session_destroy();

?>
<script>
	location.replace('login');
</script>