<?php
function generateReviews($productName, $productType)
{
    $reviews = array();
    for ($i = 1; $i <= 2; $i++) {
        $reviewContent = generateReviewContent($productName, $productType, $i);
        $reviews[] = $reviewContent;
    }
    return $reviews;
}

function generateReviewContent($productName, $productType, $reviewNumber)
{
    $placeholders = array(
        "This product is really amazing.",
        "This product is really good.",
        "This product is really SOOOOOOOO good."
        // Add more variations as needed
    );

    $randomIndex = array_rand($placeholders);
    $selectedPlaceholder = $placeholders[$randomIndex];

    $reviewContent = "This is review $reviewNumber for $productName ($productType). ";
    $reviewContent .= "It $selectedPlaceholder";

    return $reviewContent;
}
