<?php 
@$name=$_POST["name"];
@$sname=$_POST["sname"];
@$email=$_POST["email"];
@$status=$_POST["status"];
@$pass=md5(sha1($_POST["pass"]));
@$repass=md5(sha1($_POST["repass"]));

if ($pass!=$repass) {
  echo "<center><h1 class='text-warning'>parol sehvdir</h1></center>";
      ?>
     <script>
      setTimeout(function(){
        location.replace('<?php echo "$site_url"."addadmin/$lng"; ?>');
      },1000);
    </script> 

    <?php
}
else{
  $esql=Controller::$conn->nSelect($email);
  if (mysqli_num_rows($esql)!=0) {
    echo "<center><h1 class='text-warning'>Bu email qeydiyyatdan kecib</h1></center>";

    ?>
     <script>
      setTimeout(function(){
        location.replace('<?php echo "$site_url"."addadmin/$lng"; ?>');
      },1000);
    </script> 

    <?php

  }
  else{
    $sql=Controller::$conn->nInsert($name,$sname,$email,$pass,$status);
    if (!$sql) {
      echo "error";
    }
    else{
      // echo "Qeydiyyatdan ugurla kecdi";
      require 'adminlist.php';
      // header("Location:adminlist");
    }
  }

}

 ?>   
    

