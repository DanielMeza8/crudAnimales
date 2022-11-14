<?php
    require_once "./conexion.php";
    require_once "./header.php";
    $conexion = conexion(); 
    $sql = "SELECT * FROM t_animales"; 
    $respuesta = mysqli_query($conexion, $sql);
?>
    <div class="container-fluid mt-4">
        <h2 class="title text-center text-white">Animales del mundo</h2>
        <p>
            <a href="agregar.php" class="btn btn-primary">Agregar nuevo animal</a>
        </p>

        <table class="table table-success table-striped">
            <thead>
                <tr>
                    <!-- <th>ID</th> -->
                    <th>Nombre</th>
                    <th>Region</th>
                    <th>Comida</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php while($ver = mysqli_fetch_array($respuesta)): ?> 
                <tr> 
                    <!-- <td><?php echo $ver['id_animal']; ?></td> -->
                    <td><?php echo $ver['nombre']; ?></td>
                    <td><?php echo $ver['region']; ?></td>
                    <td><?php echo $ver['comida']; ?></td>
                    <td><a href="./editar.php?idanimal=<?php echo $ver['id_animal']; ?>" class="btn btn-warning">Editar</a></td>
                    <td><a href="./backend/eliminar.php?idanimal=<?php echo $ver['id_animal']; ?>" class="btn btn-danger">Eliminar</a></td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </div>
<?php require_once "./footer.php";?>