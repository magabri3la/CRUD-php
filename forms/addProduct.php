<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Producto</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br/>
        <h1 class="text-center">Agregar Producto</h1>
        <br/>
    </div>

    <div class="container" style="max-width:500px">
        <form action="../CRUD/insertData.php" method="POST">
            <label class="form-label">Categorias</label>
            <select name="categorieP" class="form-select mb-3">
                <option selected disabled>--Seleccionar Categoria--</option>
                <?php
                    include("../config/connection.php");
                    $sql = $connection->query("SELECT * FROM categorie");
                    while($result = $sql->fetch_assoc())
                    {
                        echo "<option value='".$result['id']."'>".$result['name_categorie']."</option>";
                    }
                ?>
            </select>

            <label class="form-label">Marcas</label>
            <select name="brandP" class="form-select mb-3">
                <option selected disabled>--Seleccionar Marca--</option>
                <?php
                    include("../config/connection.php");
                    $sql = $connection->query("SELECT * FROM brand");
                    while($result = $sql->fetch_assoc())
                    {
                        echo "<option value='".$result['id']."'>".$result['name_brand']."</option>";
                    }
                ?>
            </select>

            <div class="mb-3">
                <label class="form-label">Precio</label>
                <input type="text" class="form-control" name="price">
            </div>

            <div class="mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="description">
            </div>

            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-success">Agregar</button>
                <a href="../index.php" class="btn btn-danger">Regresar</a>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>