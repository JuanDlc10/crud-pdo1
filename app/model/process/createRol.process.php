<?php 
require "../crud.class.php";
$crud = new Crud();

$crud->createRol([
    "rol" => $_POST["rol"],
]);

?>