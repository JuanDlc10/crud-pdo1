<?php 
require "../crud.class.php";
$crud = new Crud();

$crud->update([
    "id" => $_POST["id"],
    "nombre" => $_POST["nombre"],
    "telefono" => $_POST["telefono"],
    "email" => $_POST["email"],
    "rol" => $_POST["rol"],
]);

?>