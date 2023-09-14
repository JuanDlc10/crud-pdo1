<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5" >Actualizar contacto</h1>      
                <div>
                <input type="text" id="id" value="<?php echo $contacto['id']; ?>" hidden>
                    <div class="mb-3">
                        <label for="" class="form-label" >Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="<?php echo $contacto['nombre']; ?>">
                        <div class="form-text" >Ingresa el nombre a actualizar</div>
                    </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" value="<?php echo $contacto['telefono']; ?>" >
                    <div id="" class="form-text" >Ingresa el telefono a actualizar</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $contacto['email']; ?>" >
                    <div id="" class="form-text" >Ingresa el email a actualizar</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" >Rol</label>
                    <select class="form-select" name="rol" id="rol">
                        <?php echo $roles['rol']; ?>
                    </select>
                    <div id="" class="form-text" >selecciona el rol</div>
                    <hr>
                </div>
                <a id="update" class="btn btn-primary" >Actualizar</a>
            </div>
        </div>
    </div>
</div>

<?php 
    require "./app/controller/update.controller.php"
?>