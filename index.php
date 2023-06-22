<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <br/>
        <h1 class="text-center">Listado productos</h1>
        <br/>
    </div>

    <div class="container">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descripcion</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    require("config/connection.php");

                    $sql = $connection->query("SELECT 
                            product.id as id,
                            categorie.name_categorie as name_categorie,
                            brand.name_brand as name_brand,
                            product.price as price,
                            product.description as description,
                            product.name as name
                        FROM product
                        INNER JOIN categorie
                        ON product.categorie_id = categorie.id
                        INNER JOIN brand
                        ON product.brand_id = brand.id
                    ");

                    while ($result = $sql->fetch_assoc()) {
                    ?>
                        <tr>
                            <th scope="row"><?php echo $result["id"]?></th>
                            <td><?php echo $result["name_categorie"]?></td>
                            <td><?php echo $result["name_brand"]?></td>
                            <td><?php echo $result["price"]?></td>
                            <td><?php echo $result["description"]?></td>
                            <td><?php echo $result["name"]?></td>
                            <td>
                                <a href="forms/editProduct.php?id=<?php echo $result['id']?>" class="btn btn-info">Editar</a>
                                <a href="CRUD/deleteData.php?id=<?php echo $result['id']?>" class="btn btn-danger">Eliminar</a>
                            </td>
                        </tr>

                        <?php
                    }
                    ?>
            </tbody>
        </table>
    </div>

    <div class="container">
        <a href="forms/addProduct.php" class="btn btn-success">Agregar producto</a>
    </div> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
</body>
</html>