
<!doctype html>
<html>
    <head>
        <title>input</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
<body>
  <form action="save.php" method="POST">
 
  <div class="form-row">
    <div class="col">
      <input type="text" class="form-control"  name="nam" placeholder="Type">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
  </div>
</form>   
<?php 
  $fileFromSystem = file_get_contents("saved.txt");
   $todoCollection = unserialize($fileFromSystem);
?>
<div style="margin:20px;">
<?php for($x=0;$x<count($todoCollection);$x++){ ?>
    <li class="list-group-item"  style="border:none">
    <input type="text" class="data" value="<?= $todoCollection[$x]['caption'] ?>" style="border:none">
    <a href="delete.php?id=<?= $x ?>" style="float:right">
        <button class="btn btn-dark">Delete</button>
    </a>

     </li>          
<?php  
  }
  ?>
</div>
</body>
</html>
