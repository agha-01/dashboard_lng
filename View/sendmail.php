<?php

if ($_POST["email"]!=null) {
	$to = $_POST["email"];
	$subject = $_POST["subject"];
	$txt = $_POST["text"];
	$headers = "From: agaverdi0123@mail.ru";
	mail($to,$subject,$txt,$headers);

}
else{
	echo "<center>Mesaji kime gonderdiyinizi qeyd edin.</center>";
}
?>