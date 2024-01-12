<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Drink Page</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
</head>
<body>
    <form action="../../../backend/controllers/adddrink_controller.php" method="POST">
        <img id="selected-image" src="../../asset/image/selectimage.png" style="height: auto; width: 70px; cursor: pointer;" onclick="selectImage()">
        &nbsp;&nbsp;&nbsp;&nbsp;เลือกรูปเครื่องดื่มที่ต้องการเพิ่ม
        <input type="file" id="file-input" style="display: none;" accept="image/*" onchange="displaySelectedImage()">
        
        <div id="image-container">
        </div>
        

        <hr>
        <label class="form-label">ชื่อเครื่องดื่ม</label>
        <input type="text" name="NameFood" class="form-control border-dark">
        <br>
        <label class="form-label">ราคาเครื่องดื่ม</label>
        <input type="text" name="Price" class="form-control border-dark">

        <hr>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success form-control border-dark">เพิ่มเมนูเครื่องดื่ม</button>
            </div>
        </div>
    </form>

    <script src="../../asset/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function selectImage() {
            document.getElementById('file-input').click();
        }

        function displaySelectedImage() {
            var fileInput = document.getElementById('file-input');
            var imageContainer = document.getElementById('image-container');

            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    imageContainer.innerHTML = '<br><div class="card border-dark"><img src="' + e.target.result + '" style="max-width: 100%; max-height: auto;"></div>';
                };

                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</body>
</html>