<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link rel="stylesheet" href="../asset/css/bootstrap.min.css">
</head>
<body>
    <div class="row">
        <div class="col-3">
            <?php include('../dashboard/sidebar.php'); ?>
        </div>
        <div class="col-9">
            <br>
            <h1>ระบบจองโต๊ะ และสั่งอาหาร</h1>

            <br>
            <div class="row">
                <div class="col-12">
                    <?php
                        $images = [
                            "image1.jpg", "image2.jpg", "image3.jpg",
                            "image4.jpg", "image5.jpg", "image6.jpg",
                            "image7.jpg", "image8.jpg", "image9.jpg",
                            "image10.jpg",
                        ];

                        foreach ($images as $image) {
                            echo '<div class="card">';
                                echo '<div class="image-frame">';
                                    echo '<img src="../asset/image/' . $image . '" class="card-img">';
                                echo '</div>';
                                echo '<h3>ชื่ออาหาร</h3>';
                                echo '<button class="btn btn-success">เลือก</button>';
                            echo '</div>';
                        }
                    ?>
                </div>
            </div>
        </div>
        
        <div class="col-8-order">
            <button type="button" class="btn btn-warning border-dark position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-basket3" viewBox="0 0 16 16">
                    <path d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM3.394 15l-1.48-6h-.97l1.525 6.426a.75.75 0 0 0 .729.574h9.606a.75.75 0 0 0 .73-.574L15.056 9h-.972l-1.479 6z"/>
                </svg>
                <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-primary">
                    <h6>10</h6>
                    <span class="visually-hidden">unread messages</span>
                </span>
            </button>
        </div>
    </div>
</body>
</html>

<style>
    .card {
        display: inline-block;
        width: 200px;
        height: 250px;
        border: 3px solid #000;
        border-radius: 25px;
        margin: 10px;
        padding: 10px;
        text-align: center;
        overflow: hidden;
    }

    .card-img {
        height: auto;
        width: 150px;
        border-radius: 8px;
    }

    .image-frame {
        border: 2px solid #000;
        border-radius: 10px;
        overflow: hidden;
        margin-bottom: 10px;
        height: 100px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    button {
        display: block;
        margin-top: 10px;
    }

    .button-container {
        position: fixed;
        bottom: 50px;
        right: -1600px;
    }

    .col-8-order {
        position: fixed;
        bottom: 20px;
        right: -1550px;
        margin-bottom: 20px;
        margin-right: 20px;
    }
</style>