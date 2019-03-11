<?php
$i=$_REQUEST['id'];


$fileFromSystem = file_get_contents("saved.txt");
$todoCollection = unserialize($fileFromSystem);


 array_splice($todoCollection , $i,1);

 $fileFromSystem = serialize($todoCollection);

 file_put_contents('saved.txt',$fileFromSystem);

 header("Location:index.php");
?>