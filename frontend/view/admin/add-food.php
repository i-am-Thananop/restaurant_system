<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Food Page</title>
    <link rel="stylesheet" href="../../asset/css/bootstrap.min.css">
</head>
<body>
    <form action="../../../backend/controllers/addfood_controller.php" method="POST" onsubmit="addFood(); return false;">
        <img id="selected-image" src="../../asset/image/selectimage.png" style="height: auto; width: 70px; cursor: pointer;" onclick="selectImage()">
        &nbsp;&nbsp;&nbsp;&nbsp;เลือกรูปอาหารที่ต้องการเพิ่ม
        <input type="file" id="file-input" style="display: none;" accept="image/*" onchange="displaySelectedImage()">
        
        <div id="image-container">
        </div>
        
        <hr>
        <label class="form-label">ชื่ออาหาร</label>
        <input type="text" name="NameFood" class="form-control border-dark">
        <br>
        <label class="form-label">ราคาอาหาร</label>
        <input type="text" name="Price" class="form-control border-dark">

        <hr>
        <div class="row">
            <div class="col-12">
                <button class="btn btn-success form-control border-dark">เพิ่มเมนูอาหาร</button>
            </div>
        </div>
    </form>

    <script src="../../asset/js/bootstrap.bundle.min.js"></script>
    
    <script>
        function addFood() {
            var form = document.querySelector('form');
            var formData = new FormData(form);

            var fileInput = document.getElementById('file-input');
            formData.append('image', fileInput.files[0]);

            var xhr = new XMLHttpRequest();
            xhr.open('POST', '../../../backend/controllers/addfood_controller.php', true);
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    // Handle the response from the server if needed
                    console.log(xhr.responseText);
                }
            };

            xhr.send(formData);
        }
    </script>
</body>
</html>

<style>

</style>