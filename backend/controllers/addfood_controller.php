<?php
    include('../routes/connection.php');

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $NameFood = $_POST['NameFood'];
        $Price = $_POST['Price'];

        if (isset($_FILES['image'])) {
            $uploadDir = '../image/';
            $uploadFile = basename($_FILES['image']['name']);

            if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadDir . $uploadFile)) {

                $query = "INSERT INTO menus (NameFood, Price, Image) 
                          VALUES ('$NameFood', '$Price', '$uploadFile')";
                
                if (mysqli_query($con, $query)) {
                    echo "Data uploaded successfully!<br>";
                    echo "Name of Food: " . $NameFood . "<br>";
                    echo "Price: " . $Price;
                } else {
                    echo "Error uploading data to the database: " . mysqli_error($con) . "<br>";
                }

            } else {
                echo "Error uploading image.<br>";
            }
        } else {
            echo "Image not found in the request.<br>";
        }
    } else {
        echo "Invalid request method.";
    }
?>