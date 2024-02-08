<?php
function generateReviews($productName, $productType)
{
    $reviews = array();
    for ($i = 1; $i <= 30; $i++) {
        $reviewContent = generateReviewContent($productName, $productType, $i);
        $reviews[] = $reviewContent;
    }
    return $reviews;
}   

function generateReviewContent($productName, $productType, $reviewNumber)
{
    $placeholders = array
    (
        "provides valuable insights and feedback.",
        "stands out for its exceptional quality.",
        "offers an excellent user experience.",
        "meets and exceeds expectations.",
        "This product is really amazing.",
        "This product is really amazing.",
        "This product is really amazing."
        // Add more variations as needed
    );
    
    $randomIndex = array_rand($placeholders);
    $selectedPlaceholder = $placeholders[$randomIndex];

    $reviewContent = "This is review $reviewNumber for $productName ($productType). ";
    $reviewContent .= "It $selectedPlaceholder";

    return $reviewContent;
}
