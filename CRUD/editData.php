<?php
    include("../config/connection.php");

    $id = $_POST["id"];
    $categorie = $_POST["categorieP"];
    $brand = $_POST["brandP"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $name = $_POST["name"];

    $sql = "UPDATE product SET categorie_id = '$categorie', brand_id = '$brand', price = '$price', description = '$description', name = '$name' WHERE id = '$id'";
    $result = mysqli_query($connection, $sql);

    if($result)
    {
        header("Location: ../index.php");
    }
    else
    {
        echo "Datos no actualizados";
    }
?>