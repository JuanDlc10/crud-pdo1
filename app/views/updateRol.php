<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5" >Actualizar contacto</h1>      
                <div>
                <input type="text" id="id" value="<?php echo $rol['id']; ?>" hidden>
                <div class="mb-3">
                    <label for="email" class="form-label" >Rol</label>
                    <input type="text" class="form-control" id="rol" value="<?php echo $rol['rol']; ?>">
                        <div class="form-text" >Ingresa el rol a actualizar</div>
                </div>
                <a id="updateRol" class="btn btn-primary" >Actualizar</a>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/update.controller.php"
?>