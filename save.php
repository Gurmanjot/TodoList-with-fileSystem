<?php
$fileFromSystem = file_get_contents("saved.txt");
$todoCollection = unserialize($fileFromSystem);

if (filesize('saved.txt') == 0){
  $todoCollection = [];
}
 array_push($todoCollection , ['caption' => $_POST['nam'] , 'is_completed' => "false"]);

 $fileFromSystem = serialize($todoCollection);

 file_put_contents('saved.txt',$fileFromSystem);

 header("Location:index.php");
?>
