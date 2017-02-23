<?php 

require'functions.php';

require 'Task.php';


try{

   $main_pdo = new PDO('mysql:host=127.0.0.1;dbname=My_TODO','root','');   

}  
catch(PDOException $e){

   die($e->getMessage());

}

$statment = $main_pdo->prepare('SELECT * FROM TO_DO');
$statment->execute();

$var = $statment->fetchALL(PDO::FETCH_CLASS,'Task');


require'index-viev.php';
?>



