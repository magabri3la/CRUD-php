<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Producto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center" style="background-color: black; color:white; border-radius: 5px;">EDITAR PRODUCTOS</h1>
    <br>
    <form class="container" action="../CRUD/editData.php" method="POST">
        <?php
            include("../config/connection.php");
            
            $id = $_GET["id"];
            
            $sql = "SELECT * FROM product WHERE id = ".$id;
            
            $result = $connection->query($sql);

            if ($result) {
                if ($result->num_rows > 0) {
                    $row = $result->fetch_assoc();
                } 
            }

        ?>

        <input type="Hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">

        <!--TRAER DATOS CATEGORIAS-->
        <label>Categorias</label>
        <select class="form-select mb-3" aria-label="Default select example" name="categorieP">
            <option selected disabled>--Seleccione Categorias--</option>
            <?php
                include ("../config/connection.php");

                $sql1 = "SELECT * FROM categorie WHERE id=".$row['categorie_id']."";
                $resultado1 = $connection->query($sql1);

                $row1 = $resultado1->fetch_assoc();

                echo "<option selected value='".$row1['id']."'>".$row1['name_categorie']."</option>";

                $sql2 = "SELECT * FROM categorie";
                $resultado2 =$connection->query($sql2);

                while ($result = $resultado2->fetch_array()) {
                    echo "<option value='".$result['id']."'>".$result['name_categorie']."</option>";
                }
            ?>   
        </select>

        <label>Marcas</label>
        <select class="form-select mb-3" aria-label="Default select example" name="brandP">
            <option selected disabled>--Seleccione marcas--</option>
            <?php
                include ("../config/connection.php");

                $sql3 = "SELECT * FROM brand WHERE id=".$row['brand_id'];
                $resultado3 = $connection->query($sql3);

                $row3 = $resultado3->fetch_assoc();

                echo "<option selected value='".$row3['id']."'>".$row3['name_brand']."</option>";

                $sql4 = "SELECT * FROM brand";
                $resultado4 = $connection->query($sql4);

                while ($Fila = $resultado4->fetch_array()) {
                    echo "<option value='".$Fila['id']."'>".$Fila['name_brand']."</option>";
                }
            ?>   
        </select>

        <div class="mb-3">
            <label class="form-label">Precio</label>
            <input type="text" class="form-control" name="price" value="<?php echo $row['price']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Descripcion</label>
            <input type="text" class="form-control" name="description" value="<?php echo $row['description']; ?>">
        </div>
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-danger">Agregar</button>
            <a href="../Index.php" class="btn btn-dark">Regresar</a>
        </div>
    </form>

</body>