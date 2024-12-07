<?php

    include_once('config.php');


    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_FILES['image'];
        
        $imageLocation = $_FILES['image']['tmp_name'];
        $imageName = $_FILES['image']['name'];
        $image_up = "images/".$imageName;


        $insert = "INSERT INTO products (name, price, image) VALUES('$name', '$price', '$image_up')";
        
        $result = mysqli_query($conn, $insert);

        if (move_uploaded_file($imageLocation, "images/".$imageName)) {
            echo "<script>alert('Product has been uploaded successfully!')</script>";
        } else {
            echo "<script>alert('Sorry, there was a problem!')</script>";
        }

        header('location: index.php');
    }
?>