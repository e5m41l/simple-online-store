<?php
    include('config.php');

    $ID = $_GET['id'];
    $data = mysqli_query($conn, "SELECT* FROM products WHERE id = $ID");

    $data = mysqli_fetch_array($data);

    // echo $data['id'];
    // echo "\n";
    // echo $data['name'];
    // echo $data['price'];
    // echo $data['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm Payment</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <center>
        <form action="insert_cart.php" method="post" class="shadow-lg p-3 mb-5 bg-body-tertiary rounded" enctype="multipart/form-data" style="width:450px;">
            <h2>Do you want to confirm payment?</h2>
            <div class='shadow p-3 mb-5 bg-body-tertiary rounded' class='card' class='p-2 g-col-6' style='width: 15rem;'>
            <img src='<?php echo $data['image'] ?>' class='card-img-top'>
            <div class='card-body'>
                <h5 class='card-title'><?php echo $data['name'] ?></h5>
                <p class='card-text'><?php echo $data['price'] ?> L.E</p>
            </div>
            </div>
            <button name='confirm' type="submit" class="btn btn-success">Confirm</button>

            <br>
            <br>
            <a href="products.php">Go back to all Products!</a>
        </form>
    </center>

    <script src="js/icons.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        feather.replace();
    </script>
</body>
</html>


