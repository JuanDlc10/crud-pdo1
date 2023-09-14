
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