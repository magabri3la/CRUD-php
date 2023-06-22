<?php
    include("../config/connection.php");

    $id = $_GET["id"];

    $sql = "DELETE FROM product WHERE id = '$id'";

    $result = mysqli_query($connection, $sql);

    if($result)
    {
        header("Location: ../index.php");
    }

    error_log("id: " . $id . " sql: " . $sql . " result: " . $result);
?>