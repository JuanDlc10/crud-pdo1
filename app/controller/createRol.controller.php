<script>
    $(document).ready(() => {
        $("#createRol").click(() => {
            let rol = $("#rol").val()
            if (!rol) {
                Swal.fire({
                    icon: "error",
                    text: "No escribiste un rol",
                    timer: 2000
                })
                $("#rol").focus()
                return false
            }  
            $.ajax({
                url: "./app/model/process/createRol.process.php",
                data: {
                    rol,
                },
                type: "POST",
                success: () => {
                    Swal.fire({
                        title: 'Rol creado!',
                        text: "El Rol se guardado con exito!",
                        icon: 'success',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Ok!'
                        }).then((result) => {
                            window.location.reload();
                        })  
            },
            error:() => {
                console.log("Error") //Sweetalert Error
            }
            })
        })
    })
</script>