<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-12">
            <img src="../../asset/image/RE.png">
            <div class="form-frame">
            <form action="../../../backend/controllers/login_controller.php" method="POST">
                <label class="form-label-Username">Username</label>
                <input type="text" name="Username" class="form-control input-username border-dark">
                <label class="form-label-Password">Password</label>
                <input type="password" name="Password" class="form-control input-password border-dark">
                <button type="submit" class="btn btn-success btn-fix">Sign In</button>
                <a href="register.php" class="btn btn-primary btn-fix-regis">Register</a>
            </div>
        </div>
    </div>
    <script src="../../asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<style>
    body, html {
        height: 100%;
        margin: 0;
    }

    .row {
        display: flex;
    }

    .col-12 {
        display: flex;
        flex-direction: column;
        align-items: flex-start; /* Align items to the start (left side) of the column */
    }

    img {
        height: 100vh;
        width: auto;
    }

    .input-username {
        margin-top: -130px;
        position: absolute;
        left: 1000px;
        width: 200px;
    }

    .input-password {
        margin-top: -30px;
        position: absolute;
        left: 1000px;
        width: 200px;
    }

    .btn-fix {
        margin-top: 80px;
        position: absolute;
        left: 1000px;
        width: 200px;
    }

    .btn-fix-regis {
        margin-top: 130px;
        position: absolute;
        left: 1000px;
        width: 200px;
    }

    .form-label-Username {
        margin-top: -170px;
        position: absolute;
        left: 1000px;
        font-size: 24px;
    }

    .form-label-Password {
        margin-top: -70px;
        position: absolute;
        left: 1000px;
        font-size: 24px;
    }

    .form-frame {
        border: 2px solid #000;
        padding: 210px;
        width: 300px;
        left: 1200px;
        margin: auto;
        margin-top: -590px;
        margin-left: 880px;
        border-radius: 15px;
    }

</style>