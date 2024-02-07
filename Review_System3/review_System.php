<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Review Generation System</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4 justify content center">

        <form action="process.php" method="post" enctype="">
            <div class="row mb-3">
                <label for="productName">Product Name:</label>
                <input type="text" name="productName" required>

            </div>
            <div class="row mb-3">
                <label for="productType">Product Type:</label>
                <input type="text" name="productType" required>
            </div>
            <button type="submit" class="btn btn-success">Review GEnerator</button>

    </div>

    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>