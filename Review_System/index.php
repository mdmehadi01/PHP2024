<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Auto Review Generation System</title>
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-5">
        <form id="reviewForm" method="post" action="">
            <label for="productName">Product Name:</label>
            <input type="text" name="productName" required>

            <label for="productType">Product Type:</label>
            <input type="text" name="productType" required>

            <button type="submit" class="btn btn-primary">Generate Reviews</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $productName = $_POST["productName"];
            $productType = $_POST["productType"];

            // Generate 30 reviews with varying content
            $reviews = generateReviews($productName, $productType);

            // Display reviews
            echo "<h2 class='mt-4'>Reviews for $productName ($productType)</h2>";
            foreach ($reviews as $review) {
                echo "<p>$review</p>";
            }
        }

        function generateReviews($productName, $productType)
        {
            $reviews = array();
            for ($i = 1; $i <= 30; $i++) {
                // Introduce variability in review content
                $reviewContent = generateReviewContent($productName, $productType, $i);

                $reviews[] = $reviewContent;
            }
            return $reviews;
        }

        function generateReviewContent($productName, $productType, $reviewNumber)
        {
            // Placeholder for different review content
            $placeholders = array(
                "provides valuable insights and feedback.",
                "stands out for its exceptional quality.",
                "offers an excellent user experience.",
                "meets and exceeds expectations.",
                "This product is really amazing.",
                // Add more variations as needed
            );

            // Select a random placeholder for variability
            $randomIndex = array_rand($placeholders);
            $selectedPlaceholder = $placeholders[$randomIndex];

            // Construct the review content
            $reviewContent = "This is review $reviewNumber for $productName ($productType). ";
            $reviewContent .= "$selectedPlaceholder";

            return $reviewContent;
        }
        ?>



    </div>

    <!-- Add Bootstrap JS and Popper.js before the closing body tag -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>

</html>