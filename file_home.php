<html>
    <h1>PHP/MySQL File Repository</h1>
    <br>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        Upload file: <input type="file" name="file"><br><br>
        File description: <input type="text" name="description"><br>
        <input type="submit" value="Upload"><br>
    </form>
    <?php  
    $user='root';
    $pass='';
    $dbname='file_repository';
    $db=new mysqli('localhost',$user,$pass,$dbname);
    $sql="SELECT * FROM files";
    $result=$db->query($sql,MYSQLI_STORE_RESULT);
    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
         $filename=$row['filename'];
         $description=$row['discription'];
         $path=$row['path'];
         echo "$filename $description $path";
         echo "<a href=download.php?path1=$filename>DOWNLOAD</a>";
         echo "<a href=delete.php?path1=$filename>DELETE</a><br>";
         }
    }
   ?>
  </html>