<?php 
    include('../routes/connection.php');

    $sql = "UPDATE users SET 
    Username = '".$_POST["Username"]."',
    Password = '".$_POST["Password"]."',
    USERLEVEL = '".$_POST["level"]."'
    WHERE ID = '".$_POST["ID"]."'";
    $query = mysqli_query($con,$sql);
    if($query){
        header("location: ../../frontend/view/admin/index.php");
    } 
?>