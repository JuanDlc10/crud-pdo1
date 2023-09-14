<div class="container">
    <div class="row">
        <div class="col">
            <a href="./create" class="btn btn-outline-primary mt-5" >Agregar</a>
            <h1 class="mt-4 text-center" >Agenda</h1>
            <hr>
            <table class="table text-center table-secundary table-striped table-bordered table-sm table-hover table-responsive" >
                <thead>
                        <th>Nombre</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Actualizar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php 
                        foreach ($contactos as $contacto):
                        ?>
                        <td> <?php echo $contacto["nombre"] ?></td>
                        <td> <?php echo $contacto ["telefono"]?> </td>
                        <td> <?php echo $contacto ["email"]?> </td>
                        <td>
                            <a href="./update&id=<?php echo $contacto["id"] ?>" class="btn btn-outline-warning" >Actualizar</a>
                        </td>
                        <td>
                            <button onclick="eliminar(<?php echo $contacto['id']?>)" class="btn btn-outline-danger">Eliminar</button>
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