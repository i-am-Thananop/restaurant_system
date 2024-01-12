<?php
    session_start();
    include('../routes/connection.php');

    $sql = "SELECT * FROM users WHERE Username = '".$_POST["Username"]."' AND Password = '".$_POST["Password"]."'";
    $query = mysqli_query($con, $sql);
    if(mysqli_num_rows($query)==1){
        $result = mysqli_fetch_array($query);

        $_SESSION["ID"] = $result['ID'];
        $_SESSION["UserCode"] = $result['UserCode'];
        $_SESSION["Username"] = $result['Username'];
        $_SESSION["Password"] = $result['Password'];
        $_SESSION["USERLEVEL"] = $result['USERLEVEL'];

        if($_SESSION["USERLEVEL"]=="A"){
            header('location: ../../frontend/view/admin/index.php');
        }
        if($_SESSION["USERLEVEL"]=="E"){
            header('location: ../../frontend/view/admin/food.php');
        }
    }else{
        echo "<script>alert('Username หรือ Password ของคุณผิด'); window.location = '../../frontend/view/login/login.php';</script>";
    }
?>