<?php 
try{
$dns='mysql:host=localhost; dbname:mydatabase';
$con=new PDO($dns, 'root', '');
echo 'connection success';
} catch(PDOException $e) {
  die 'not success'.$e->getMessage();
}

?>
