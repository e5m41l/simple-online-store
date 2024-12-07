<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
    <style>
        .prods {
            display: flex;
        }
    </style>
</head>
<body>

    <center>
        <h3>Admin - Control products</h3>
    </center>
    
    <?php
        include_once('config.php');

        $products = mysqli_query($conn, "SELECT* FROM products");

        while ($row = mysqli_fetch_array($products)) {
            echo "<center class='p-2 g-col-6'>
                <main>
                    <div class='shadow p-3 mb-5 bg-body-tertiary rounded' class='card' class='p-2 g-col-6' style='width: 15rem;'>
                    <img src='$row[image]' class='card-img-top'>
                    <div class='card-body'>
                        <h5 class='card-title'>$row[name]</h5>
                        <p class='card-text'>$row[price] L.E</p>
                        <a href='edit_product.php? id=$row[id]' class='btn btn-warning'>Edit product</a>
                        <a href='delete_product.php? id=$row[id]' class='btn btn-danger'>Delete product</a>
                    </div>
                    </div>
                </main>
            </center>";
        }
    ?>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>