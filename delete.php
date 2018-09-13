<?php
     $user='root';  
    $pass='';
    $dbname='file_repository';
    $db= new mysqli('localhost',$user,$pass,$dbname) ;
$path=$_GET['path1'];
 $sql="DELETE FROM files WHERE filename LIKE '$path'";
   $db->query($sql);
$db->close();
header("location:file_home.php");
?>
