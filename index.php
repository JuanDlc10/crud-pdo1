<!DOCTYPE html>
<html lang="en">
<head>
    <?php 
        require "./app/views/includes/metatags.php" 
    ?>
</head>
<body>
    <?php
    require "./app/model/crud.class.php";
    $crud = new Crud;
        if (isset($_GET["vista"])) {
            switch ($_GET["vista"]) {
                case 'home':
                    include "./app/views/home.php";
                    break;
                case 'read':
                    $contactos = $crud -> read();
                    include "./app/views/read.php";
                    break;
                case 'create':
                    include "./app/views/create.php";
                    break;
                case 'update':
                    $contacto = $crud->show($_GET["id"]);
                    include "./app/views/update.php";
                    break;
                case 'createRol':
                    include "./app/views/createRol.php";
                    break;
                default:
                    header("location: ./read");
                    break;
            }
            
        } else {
            print("Tenemos que redireccionar a una ruta valida");
        }
   ?>
    <?php 
        require "./app/views/includes/scripts.php" 
    ?>
</body>
</html>