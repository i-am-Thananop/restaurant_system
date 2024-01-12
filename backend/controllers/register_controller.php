<?php
    include('../routes/connection.php');

    $result = mysqli_query($con, "SELECT MAX(UserCode) AS maxUserCode FROM users");
    $row = mysqli_fetch_assoc($result);
    $maxUserCode = $row['maxUserCode'];

    $lastUserNumber = intval(substr($maxUserCode, -2));

    $userNumber = $lastUserNumber + 1;

    $currentDate = date('yd');

    $UserCode = $currentDate . sprintf('%02d', $userNumber);

    // Rest of your code remains unchanged
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $create_user = date('Y-m-d H:i:s');
    $update_user = $create_user;

    $sql = "INSERT INTO users(UserCode, Username, Password, create_user, update_user, USERLEVEL) VALUES ('$UserCode', '$Username', '$Password', '$create_user', '$update_user', 'W')";
    
    $query = mysqli_query($con, $sql);
    
    if($query){
        echo "<script>alert('สมัครสมาชิกเรียบร้อยแล้ว กรุณารอการอนุมัติจาก Admin'); window.location = '../../frontend/view/login/login.php';</script>";
    }
?>
