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
<?php
    require "./app/controller/createRol.controller.php"
?>
