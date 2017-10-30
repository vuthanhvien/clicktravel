<?php
ini_set('display_errors',1);
error_reporting(E_ALL)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Update file</title>
</head>
<body>
<form action="/uploadfile.php" method="POST" enctype="multipart/form-data">
<input type="file" name="photo">
<button type="submit">OK</button>
</form>

<br>

<?php
define('IMAGEPATH', 'public_html/img/');
foreach(glob('IMAGEPATH.'*'') as $filename){
    $imag[] =  basename($filename);
}
print_r($imag);
?>


</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $target = "/public_html/img/"; 
   $target = $target .$_FILES['photo']['name'];
   $pic=($_FILES['photo']['tmp_name']);
   $res = move_uploaded_file($pic, $target);

   var_dump($res);
}
?> 

