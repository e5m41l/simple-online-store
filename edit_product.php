<?php
    include('config.php');
    $ID = $_GET['id'];
    $query = "SELECT* FROM products WHERE id = $ID";

    $result = mysqli_query($conn, $query);
    $data = mysqli_fetch_array($result);

    if (isset($_POST['update'])) {
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit product...</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <center>
        <div class="main">
            <form action="edit_product.php" method="post" class="shadow-lg p-3 mb-5 bg-body-tertiary rounded" enctype="multipart/form-data">
                <h2>Edit product</h2>

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">ID</label>
                    <input type="text" name="id" class="form-control" id="formGroupExampleInput" placeholder="product name" value='<?php echo $data['id']?>'>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="product name" value='<?php echo $data['name']?>'>
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Price!</label>
                    <input type="text" name="price" class="form-control" id="formGroupExampleInput2" placeholder="0.00" value='<?php echo $data['price']?>'>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Product Photo</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>
                <button name='update' type="submit" class="btn btn-success">Done</button>

                <br>
                <br>
                <a href="products.php">Display All Products!</a>
            </form>
        </div>
    </center>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>