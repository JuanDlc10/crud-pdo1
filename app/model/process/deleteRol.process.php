<?php
require "../crud.class.php";
$crud = new Crud();
$crud->deleteRol(
    $_POST["id"]
);
?>