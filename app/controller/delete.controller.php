
<script>
    const eliminar = (id) => {
        Swal.fire({
            title: 'Estas seguro de eliminar?',
            text: "No se podra revertir esta acción",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Eliminado!'
            }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: "./app/model/process/delete.process.php",
                    data: {
                        id
                    },
                    type: "POST",
                    success: () => {
                        Swal.fire({
                            title: 'Contacto eliminado',
                            text: "El contacto se elimino con exito!",
                            icon: 'success',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'ok'
                            }).then((result) => {
                                location.reload()
                            })
                    },
                    error: () => {
                        Swal.fire({
                            title: 'No se elimino el contacto',
                            text: "contacta con el admin",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'ok'
                            })
                    }
                })
            }
            })
    }
</script>