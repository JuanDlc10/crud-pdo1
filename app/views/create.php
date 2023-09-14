<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-5" >Crear contacto</h1>      
                <div>
                    <div class="mb-3">
                        <label for="" class="form-label" >Nombre</label>
                        <input type="text" class="form-control" id="nombre" aria-describedby="nombreHelp" >
                        <div class="form-text" >Ingresa el nombre</div>
                    </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="text" class="form-control"  id="telefono" aria-describedby="telefonoHelp"  >
                    <div id="" class="form-text" >Ingresa el telefono</div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label" >Email</label>
                    <input type="email" class="form-control"  id="email" aria-describedby="emailHelp"  >
                    <div id="" class="form-text" >Ingresa el email</div>
                    <hr>
                    <button id="crear" class="btn btn-success" >Crear</button>
                </div>
                </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(() => {
        $("#crear").click(() => {
            let nombre = $("#nombre").val()
            let telefono = $("#telefono").val()
            let email = $("#email").val()
            if (!nombre) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un nombre",
                    timer: 2000
                })
                //$("#nombre").focus()
                return false
            }
            if (!telefono) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un telefono",
                    timer: 2000
                })
                //$("#nombre").focus()
                return false
            }
            if (!email) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un email",
                    timer: 2000
                })
                //$("#nombre").focus()
                return false
            }
            
            //Validaciones de nombre, email, telefono Sweetalert
            $.ajax({
                url: "./app/model/process/create.process.php",
                data: {
                    nombre,
                    telefono,
                    email,
                },
                type: "POST",
                success: () => { //TAREA
                    Swal.fire({
                        title: 'Contacto guardado!',
                        text: "Contacto guardado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location = "./read"
                        })  
            },
            error:() => {
                console.log("Error") //Sweetalert Error
            }
            })
        })
    })
</script>