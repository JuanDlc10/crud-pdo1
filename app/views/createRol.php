<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5">Crear Rol</h1>      
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label" >Nombre del rol</label>
                        <input type="text" class="form-control" id="rol" aria-describedby="nombreHelp" >
                        <div class="form-text" >Ingresa el nombre del rol</div>
                    </div>
                    <button id="createRol" class="btn btn-outline-primary" >Crear Rol</button>
                </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col">
        <div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-4 text-center" >Categorias</h1>
            <hr>
            <table class="table text-center table-secundary table-striped table-bordered table-sm table-hover table-responsive" >
                <thead>
                        <th>Nombre</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        foreach ($roles as $rol):
                        ?>
                        <td> <?php echo $rol["rol"] ?></td>
                        <td>
                            <a href="./updateRol&id=<?php echo $rol["id"] ?>" class="btn btn-outline-warning" >Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminarRol(<?php echo $rol["id"]?>)" class="btn btn-outline-danger">Eliminar</button>
                        </td>
                    </tr>
                    <?php 
                        endforeach;
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php
    require "./app/controller/deleteRol.controller.php"
?>
        </div>
    </div>
</div>

<?php
    require "./app/controller/createRol.controller.php"
?>
