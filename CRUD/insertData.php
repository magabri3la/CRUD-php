<?php
    include("../config/connection.php");

    $categorie = $_POST["categorieP"];
    $brand = $_POST["brandP"];
    $price = $_POST["price"];
    $description = $_POST["description"];
    $name = $_POST["name"];

    $sql = "INSERT INTO product (categorie_id, brand_id, price, description, name) VALUES ('$categorie', '$brand', '$price', '$description', '$name')";

    $result = mysqli_query($connection, $sql);

    if($result)
    {
        header("Location: ../index.php");
    }
    else
    {
        echo "Datos no insertados";
    }
?>