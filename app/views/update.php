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
                    <hr>
                    <a id="update" class="btn btn-primary" >Actualizar</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(() => {
        $("#update").click(() => {
            let id = $("#id").val()
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            $.ajax({
                url: "./app/model/process/update.process.php",
                data: {
                    id,
                    nombre,
                    telefono,
                    email,
                },
                type: "POST",
                success: (a,b,c) => { //para  checar errores se dan parametros a esta funcion flecha *success: (a,b,c) => {
                    //console.log(a,b,c)
                    Swal.fire({
                        title: 'Contacto actualizado!',
                        text: "Contacto actualizado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location = "./read"
                        })  
            },
            error:() => {
                console.log("Error")
            }
            })
        })
    })
</script>