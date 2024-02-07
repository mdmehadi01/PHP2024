<?php
include('function.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $productName = $_POST["productName"];
    $productType = $_POST["productType"];

    $reviews = generateReviews($productName, $productType);

    echo "<h2 class='mt-4'>Reviews for $productName ($productType)</h2>";
    foreach ($reviews as $review) {
        echo "<p>$review</p>";
    }
}
