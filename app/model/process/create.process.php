<?php 
require "../crud.class.php";
$crud = new Crud();

$crud->create([
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "email" => $_POST["email"]
]);

?>