<?php
session_start();
session_destroy();
setcookie("nama",$row['nama'], time()-600);
header("location:index.php");
?>