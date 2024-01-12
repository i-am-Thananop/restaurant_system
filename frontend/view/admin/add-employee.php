<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Employee Page</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
</head>
<body>

    <form action="../../../backend/controllers/add_controller.php" method="POST">
        <label class="form-label">Username</label>
        <input type="text" name="Username" class="form-control border-dark">
        <label class="form-label">Password</label>
        <input type="text" name="Password" class="form-control border-dark">
        <hr>
        <label class="form-label">กำหนดสถานะ</label>
        <select class="form-select" name="Level">
            <option selected>เลือกตำแหน่งของผู้ใช้ที่เพิ่ม</option>
            <?php
            $sql_levels = "SELECT * FROM levels";
            $query_levels = mysqli_query($con, $sql_levels);
            while ($result_levels = mysqli_fetch_array($query_levels)) {
                ?>
                <option value="<?php echo $result_levels["Initial"] ?>">
                    <?php echo $result_levels["Initial"] . ' - ' . $result_levels["NameLevel"]; ?>
                </option>
            <?php } ?>
        </select>

        <hr>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success form-control border-dark" onclick="location.href='login.php';">เพิ่มพนักงาน</button>
            </div>
        </div>
    </form>

    <script src="../../asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>