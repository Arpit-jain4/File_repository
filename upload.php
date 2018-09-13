<?php
    $description=$_POST["description"];
     $user='root';  
    $pass='';
    $dbname='file_repository';
    $db= new mysqli('localhost',$user,$pass,$dbname) ;
    if($_FILES["file"]["error"]>0)
    {
         echo "Error: " . $_FILES["file"]["error"] . "<br />"; 
    }
    else
    {
        move_uploaded_file($_FILES["file"]["tmp_name"],"E:/upload/".$_FILES["file"]["name"] );
        $name=($_FILES["file"]["name"]);
        $path=("E:/upload/".$_FILES["file"]["name"]); 
             $sql="INSERT INTO files  VALUES ('$name','$description','$path')";
       $db->query($sql);
           }
           header("location:file_home.php");
           $db->close();
    ?>
     