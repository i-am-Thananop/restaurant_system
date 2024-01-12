<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SideBar Admin</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-6 col-lg-8 d-md-block bg-success sidebar">
                <div class="restaurant-info">
                    <span>Restaurant</span><br>
                    <span>System Admin</span>
                </div>
                <hr class="border border-dark border-2 opacity-50">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="food.php">
                            <img src="../../asset/image/order-food.png" class="image-food">
                            &nbsp;&nbsp;หน้าการเพิ่มเมนู  <br> &nbsp;&nbsp;อาหารและเครื่องดื่ม
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="table.php">
                            <img src="../../asset/image/table.png" style="height: auto; width: 50px;">
                            &nbsp;&nbsp;&nbsp;หน้าการเพิ่มที่นั่ง/โต๊ะ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="index.php">
                            <img src="../../asset/image/employee.png" class="image-employee" style="height: auto; width: 50px;">
                            &nbsp;&nbsp;หน้าการจัดการ <br>&nbsp;&nbsp;พนักงาน
                        </a>
                    </li>
                    <li class="nav-item-order">
                        <a class="nav-link text-white" href="order.php">
                            <img src="../../asset/image/order-food (1).png" style="height: auto; width: 50px;">
                            &nbsp;&nbsp;&nbsp;&nbspหน้าการรับออเดอร์
                        </a>
                    </li>
                    <li class="nav-item-bill">
                        <a class="nav-link text-white" href="bill.php">
                            <img src="../../asset/image/bill.png" style="height: auto; width: 50px;">
                            &nbsp;&nbsp;&nbsp;&nbspหน้าบิลสินค้า
                        </a>
                    </li>
                </ul>
            </nav>
            <nav-footer class="navbar col-md-6 col-lg-8 d-md-block bg-success">
                <div class="container-fluid">
                    <span class="navbar-text text-white">
                        <img src="../../asset/image/customer.png" style="height: auto; width: 50px;"> &nbsp;&nbsp;&nbsp;<?php echo $_SESSION["Username"]; ?>
                    </span>
                    <button type="button" class="btn btn-outline-danger text-white border-dark custom-button" onclick="logout()">
                        <img src="../../asset/image/logout.png" style="height: auto; width: 30px;">
                    </button>
                </div>
            </nav-footer>
        </div>
    </div>

    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script>
    function logout() {
        var button = document.querySelector('.custom-button');
        button.classList.add('clicked');

        setTimeout(function () {
            button.classList.remove('clicked');
            // Redirect to the logout page
            window.location.href = '../../../backend/controllers/logout.php';
        }, 500);
    }
</script>

<style>
    #sidebar {
        height: 100vh;
    }

    .restaurant-info {
        margin-top: 20px;
        font-size: 30px;
        color: white;
        font-family: 'Arial', sans-serif;
        text-align: center;
    }

    .image-food {
        height: auto;
        width: 50px;
        float: left;
        margin-right: 10px;
    }

    .image-employee {
        height: auto;
        width: 50px;
        float: left;
        margin-right: 10px;
    }

    .image-group {
        height: auto;
        width: 50px;
        float: left;
        margin-right: 10px;
    }

    .nav-link {
        font-size: 16px;
    }

    .nav-item-order {
        margin-top: 20px;
    }

    .nav-item-bill {
        margin-top: 20px;
    }

    .nav-item-customer {
        margin-top: 20px;
    }

    .custom-button {
      background-color: white;
      transition: background-color 0.3s ease;
    }

    .custom-button.clicked {
      background-color: red;
    }
</style>
