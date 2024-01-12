<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SideBar</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav id="sidebar" class="col-md-6 col-lg-8 d-md-block bg-success sidebar">
                <h1 class="text-white">Restaurant</h1>
                <hr class="border border-dark border-2 opacity-50">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active text-white" href="#">
                            <img src="../asset/image/food.png" style="height: auto; width: 50px;">
                            &nbsp;&nbsp;หน้าการสั่งอาหาร
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <img src="../asset/image/table.png" style="height: auto; width: 50px;">
                            &nbsp;&nbsp;หน้าการจองที่นั่ง/โต๊ะ
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">
                            <img src="../asset/image/calendar.png" style="height: auto; width: 50px;">
                            &nbsp;&nbsp;การจองล่วงหน้า
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>

    <!-- Bootstrap JS (Popper.js and Bootstrap JS) -->
    <script src="path/to/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
    #sidebar {
        height: 100vh;
    }
</style>
