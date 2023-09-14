<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5" >¿Deseas eliminar el contacto?</h1>      
                <div>
                <input type="text" id="id" value="<?php echo $contacto['id']; ?>" hidden>
                    <div class="mb-3">
                        <label for="" class="form-label" >Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="<?php echo $contacto['nombre']; ?>"readonly>
                    </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control" id="telefono" value="<?php echo $contacto['telefono']; ?>" readonly>

                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control" id="email" value="<?php echo $contacto['email']; ?>" readonly>
                    <hr>
                    <button id="delete" class="btn btn-outline-danger" >eliminar</button>
                    <a href="./read" class="btn btn-outline-primary" >Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(() => {
        $("#delete").click(() => {
            let id = $("#id").val()
            console.log(id)

            $.ajax({
                url: "./app/model/process/delete.process.php",
                data: {
                    id
                },
                type: "POST",
                success: (a) => { //para  checar errores se dan parametros a esta funcion flecha *success: (a,b,c) => 
                    console.log(a)
                    Swal.fire({
                        title: 'Usuario eliminado',
                        text: "El usuario se elimino con exito!",
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