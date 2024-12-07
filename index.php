<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Shop | متجر إلكترونى</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <center>
        <div class="main">
            <form action="add.php" method="post" class="shadow-lg p-3 mb-5 bg-body-tertiary rounded" enctype="multipart/form-data">
                <h2>Welcome to Our Online Shop!</h2>
                <img src="logo.webp" alt="logo!" width="450px">

                <div class="mb-3">
                    <label for="formGroupExampleInput" class="form-label">Product Name</label>
                    <input type="text" name="name" class="form-control" id="formGroupExampleInput" placeholder="product name">
                </div>
                <div class="mb-3">
                    <label for="formGroupExampleInput2" class="form-label">Price!</label>
                    <input type="text" name="price" class="form-control" id="formGroupExampleInput2" placeholder="0.00">
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Upload Product Photo</label>
                    <input class="form-control" name="image" type="file" id="formFile">
                </div>
                <button name='add' type="submit" class="btn btn-success">Add!</button>

                <br>
                <br>
                <a href="products.php">Display All Products!</a>
            </form>
        </div>
    </center>


    <script src="js/bootstrap.min.js"></script>
</body>
</html>