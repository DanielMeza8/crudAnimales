<?php include "./header.php";?>

    <div class="container-fluid mt-4">
        <div class="card">
            <div class="card-header text-center">
                <strong>Ingresa nuevo Animal</strong> <span class="fa-solid fa-bugs"></span>
            </div>
            <div class="card-body">
                <form action="./backend/agregar.php" method="post">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="region" class="form-label">Region</label>
                        <input type="text" name="region" id="region"class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="comida" class="form-label">Comida</label>
                        <input type="text" name="comida" id="comida" class="form-control">
                    </div>
                    <div class="d-grid gap-2 text-center">
                        <button type="submit" class="btn btn-primary text-center">Agregar<i class="fa-solid fa-rabbit-running"></i></button>  
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