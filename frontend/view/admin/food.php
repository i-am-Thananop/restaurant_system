<?php
    session_start();

    include('../../../backend/routes/connection.php');

    if (!isset($_SESSION["Username"])) {
        header('location: ../login/login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Page</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
            <?php include('../../dashboard/sidebar_admin.php'); ?>
        </div>
        <div class="col-9">
            <div class="container">
                <br>
                <h1>การเพิ่มเมนูอาหารและเครื่องดื่ม</h1>
                <button type="button" class="btn-order btn btn-outline-success border-dark" data-bs-toggle="modal" data-bs-target="#ModalAddFood">
                    <img src="../../asset/image/order-food.png" class="img-order">
                </button>
                <label class="label-order">ปุ่มการเพิ่มอาหาร</label>
                <div class="vertical-line"></div>
                <button type="button" class="btn-water btn btn-outline-success border-dark" data-bs-toggle="modal" data-bs-target="#ModalAddDrink">
                    <img src="../../asset/image/water.png" class="img-water">
                </button>
                <label class="label-water">ปุ่มการเพิ่มอาหาร</label>
            </div>
            <br>
            <br>
            <?php 
                include('../../../backend/routes/connection.php');
                
                $sql = "SELECT FoodID, NameFood, Price, Image FROM menus";
                $query = mysqli_query($con, $sql);
                while($result = mysqli_fetch_array($query)){?>
            <div class="row">
                <div class="col-3">
                    <div class="card border-dark shadow p-3 mb-5 bg-body-tertiary rounded text-center">
                        <img src="../../../backend/image/<?php echo $result["Image"] ?>" alt="<?php echo $result["NameFood"] ?>" style="height: auto; width: 200px;" class="mx-auto d-block">
                        <div class="card-body">
                            <label class="fw-bold"><?php echo $result["NameFood"] ?></label> <br>
                            <label class="fw-semibold"><?php echo $result["Price"] ?></label> <br>
                            <hr>
                            <div class="row">
                                <div class="col-6">
                                    <button class="btn btn-warning border-dark form-control text-white">แก้ไข</button>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-danger border-dark form-control text-white">ลบ</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>

    <!-- ModalAddFood -->
    <div class="modal fade" id="ModalAddFood" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Add Oder Food</h5>
                </div>
                <div class="modal-body">
                    <?php include('add-food.php'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.href='food.php';">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- ModalAddDrink -->
    <div class="modal fade" id="ModalAddDrink" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Add Oder Drink</h5>
                </div>
                <div class="modal-body">
                    <?php include('add-drink.php'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.href='food.php';">Close</button>
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<style>
    .label-order {
        position: absolute;
        margin-top: 15px;
        margin-left: 900px;
    }

    .btn-order {
        position: absolute;
        margin-top: -50px;
        margin-left: 930px;
        height: 50px;
        width: 50px;
    }

    .img-order {
        width: 40px;
        height: 40px;
        margin-left: -7px;
    }

    .label-water {
        position: absolute;
        margin-top: -10px;
        margin-left: 1100px;
    }

    .btn-water {
        position: absolute;
        margin-top: -75px;
        margin-left: 1130px;
        height: 50px;
        width: 50px;
    }

    .img-water {
        width: 40px;
        height: 40px;
        margin-left: -7px;
    }

    .vertical-line {
      border-left: 2px solid #333;
      height: 100px;
      margin-top: -75px;
      margin-left: 1060px;
    }
</style>