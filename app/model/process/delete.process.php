<?php
require "../crud.class.php";
$crud = new Crud();
$crud->delete(
    $_POST["id"]
);
?>