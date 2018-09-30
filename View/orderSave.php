<?php

Controller::$conn->Order($_POST["page"], $_POST["id"]);


 ?>
 <script>
 	location.replace("adminlist");
 </script>