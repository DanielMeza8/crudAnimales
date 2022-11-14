

<?php 

include "./conexion.php";
$conexion = conexion();
$id = $_GET['idanimal'];
$query = "SELECT * FROM t_animales WHERE id_animal = '$id'";
$respuesta = mysqli_query($conexion, $query);
$item = mysqli_fetch_array($respuesta);
include "./header.php";

?>

    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header text-center">
                <strong>Actualizar Animal</strong> <span class="fa-solid fa-bugs"></span>
            </div>
            <div class="card-body">
                <form action="./backend/actualizar.php" method="post">
                    <div class="mb-3">
                        <input type="text" name="id" value="<?php echo $id; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre"  value="<?php echo $item['nombre']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="region" class="form-label">Region</label>
                        <input type="text" name="region" id="region" value="<?php echo $item['region']; ?>" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="comida" class="form-label">Comida</label>
                        <input type="text" name="comida" id="comida" value="<?php echo $item['comida']; ?>" class="form-control">
                    </div>
                    <div class="d-grid gap-2 text-center">
                        <button type="submit" class="btn btn-primary text-center">Actualizar<i class="fa-solid fa-rabbit-running"></i></button>  
                    </div>
                </form>
            </div>
            <div class="card-footer text-muted">
                <div class="d-flex flex-row-reverse bd-highlight">
                    <a href="./index.php"><i class="fa-solid fa-kiwi-bird"></i></a>
                </div>
            </div>
        </div>
    </div>

<?php include "./footer.php";?>