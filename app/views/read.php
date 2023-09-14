<div class="container">
    <div class="row">
        <div class="col">
            <a href="./create" class="btn btn-outline-primary mt-5" >Agregar</a>
            <h1 class="mt-4 text-center" >Agenda</h1>
            <hr>
            <table class="table text-center table-secundary table-striped table-bordered table-sm table-hover table-responsive" >
                <thead>
                        <th hidden></th>
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
                        <td hidden> <input type="text" id="id" value=" <?php echo $contacto["id"] ?>" readonly></td>
                        <td> <?php echo $contacto["nombre"] ?></td>
                        <td> <?php echo $contacto ["telefono"]?> </td>
                        <td> <?php echo $contacto ["email"]?> </td>
                        <td>
                            <a href="./update&id=<?php echo $contacto["id"] ?>" class="btn btn-outline-warning" >Actualizar</a>
                        </td>
                        <td>
                            <a href="./delete&id=<?php echo $contacto["id"] ?>" class="btn btn-outline-danger">Eliminar</a>
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
