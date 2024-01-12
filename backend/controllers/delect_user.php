<?php 
    include('../routes/connection.php');

    $sql = "DELETE FROM users 
    WHERE ID = '".$_GET["ID"]."'";
    $query = mysqli_query($con,$sql);
    if($query){
        header("location: ../../frontend/view/admin/index.php");
    } 
?>