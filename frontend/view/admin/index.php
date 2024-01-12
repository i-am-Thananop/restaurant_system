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
    <title>Admin Page</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
</head>
<body>
    <div class="row no-gutters">
        <div class="col-3">
            <?php include('../../dashboard/sidebar_admin.php'); ?>
        </div>
        <div class="col-9 mx-auto">
            <div class="container">
                <br>
                <h1>ระบบสมาชิก</h1>
                <label class="label-add">ปุ่มการเพิ่มพนักงาน</label>
                <button type="button" class="btn-add btn btn-info border-dark" data-bs-toggle="modal" data-bs-target="#ModalAddEmployee">
                    <img src="../../asset/image/add-user.png" class="img-add">
                </button>
                <br>
                <table class="table table-hover">
                    <thead>
                        <tr class="table-primary text-center">
                            <th>UserCode</th>
                            <th>Username</th>
                            <th>Password</th>
                            <th>UserLevel</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <?php
                        $sql_users = "SELECT ID, UserCode, Username, Password, USERLEVEL, create_user, update_user FROM users WHERE USERLEVEL = 'A' OR USERLEVEL = 'E' OR USERLEVEL = 'W';";
                        $query_users = mysqli_query($con, $sql_users);
                    ?>

                    <?php while ($result_users = mysqli_fetch_array($query_users)) { ?>
                        <form action="../../../backend/controllers/update_level.php" method="POST">
                            <tbody>
                                <tr>
                                    <input type="hidden" name="ID" value="<?php echo $result_users["ID"] ?>">
                                    <th><?php echo $result_users["UserCode"] ?></th>
                                    <!-- <td><?php echo $result_users["Username"] ?></td> -->
                                    <!-- <td><?php echo $result_users["Password"] ?></td> -->
                                    <td style="text-align: center;">
                                        <input type="text" name="Username" class="form-control form-Username text-center" style="margin: auto;" value=<?php echo $result_users["Username"]?>>
                                    </td>
                                    <td style="text-align: center;">
                                        <input type="text" name="Password" class="form-control form-Password text-center" style="margin: auto;" value=<?php echo $result_users["Password"]?>>
                                    </td>
                                    <td style="width: 100px;">
                                        <select class="form-select" name="level" aria-label="Default select example">
                                            <option selected><?php echo $result_users["USERLEVEL"] ?></option>
                                            <?php
                                            $sql_levels = "SELECT * FROM levels";
                                            $query_levels = mysqli_query($con, $sql_levels);
                                            while ($result_levels = mysqli_fetch_array($query_levels)) {
                                            ?>
                                                <option value="<?php echo $result_levels["Initial"] ?>"><?php echo $result_levels["Initial"] ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td><button type="submit" class="btn btn-success">Save</button></td>
                                    <td><a class="btn btn-danger delete-btn" data-id="<?php echo $result_users["ID"] ?>">Delete</a></td>
                                </tr>
                            </tbody>
                        </form>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="ModalAddEmployee" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Add Employee</h5>
                </div>
                <div class="modal-body">
                    <?php include('add-employee.php'); ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.href='index.php';">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../asset/js/bootstrap.bundle.min.js"></script>
</body>
</html>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.delete-btn').forEach(function (button) {
            button.addEventListener('click', function (event) {
                event.preventDefault();

                var userId = button.getAttribute('data-id');

                Swal.fire({
                    title: 'ต้องการลบข้อมูลใช่หรือไม่?',
                    text: 'เมื่อลบข้อมูล จะไม่สามารถกู้คืนข้อมูลได้!!',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#0AAC06',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'ลบข้อมูล',
                    cancelButtonText: 'ยกเลิก'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '../../../backend/controllers/delect_user.php?ID=' + userId;
                    }
                });
            });
        });
    });
</script>

<style>
    .btn-success {
        width: 150px;
    }

    .btn-danger {
        width: 150px;
    }

    h1 {
        margin-right: 20px;
    }

    .label-add {
        position: absolute;
        margin-top: -40px;
        margin-left: 1000px;
    }

    .btn-add {
        position: absolute;
        margin-top: -50px;
        margin-left: 1150px;
        height: 50px;
        width: 50px;
    }

    .img-add {
        width: 30px;
        height: 30px;
    }

    .form-Username {
        width: 150px;
    }

    .form-Password {
        width: 150px;
    }

    tbody {
      text-align: center;
    }

</style>