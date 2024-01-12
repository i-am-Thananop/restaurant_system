<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
</head>
<body>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Form Register</h5>
                </div>
                <div class="modal-body">
                    <form action="../../../backend/controllers/register_controller.php" method="POST">
                        <label class="form-label">Username</label>
                        <input type="text" name="Username" class="form-control border-dark">
                        <label class="form-label">Password</label>
                        <input type="text" name="Password" class="form-control border-dark">
            
                        <hr>
                        <div class="row">
                            <div class="col-12">
                                <button class="btn btn-success form-control border-dark">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="location.href='login.php';">Close</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../../asset/js/bootstrap.bundle.min.js"></script>
    
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var myModal = new bootstrap.Modal(document.getElementById('exampleModal'));
            myModal.show();
        });
    </script>
</body>
</html>