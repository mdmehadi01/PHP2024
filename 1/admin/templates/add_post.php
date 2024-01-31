<?php

$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'blog';

$db = mysqli_connect($Host, $Name, $pass, $DB);
if (!$db) {
    echo "Connection Failed!";
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $title = $_POST["title"];
    $content = $_POST["content"];
    $category = $_POST["category"];
    $image = $_FILES["image"]["name"];
    $video = $_POST["video"];

    // Handle image upload
    $target_dir = "uploads/";
    if (!file_exists($target_dir)) {
        mkdir($target_dir, 0777, true);
    }
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

    // Insert data into the database
    $sql = "INSERT INTO blog_posts (title, content, category, image, video) VALUES ('$title', '$content', '$category', '$image', '$video')";

    // Execute the query
    if ($db->query($sql) === TRUE) {
        echo "Post added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $db->error;
    }

    // Close the database connection
    $db->close();
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Blog Post</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Our All Blog_Post</h2>
    <form action="add_post.php" method="post" enctype="multipart/form-data">
        <label>Title:</label>
        <input type="text" name="title" required><br>

        <label>Content:</label>
        <textarea name="content" required></textarea><br>

        <label>Category:</label>
        <select name="category" required>
            <option value="Cricket">Cricket</option>
            <option value="Football">Football</option>
            <option value="Food">Food</option>
            <option value="Song">Song</option>

            <!-- Fetch categories from the database and populate the dropdown -->
        </select><br>

        <label>Image:</label>
        <input type="file" name="image" accept="image/*"><br>

        <label>Video URL:</label>
        <input type="text" name="video"><br>

        <input type="submit" value="Add Post">
    </form>
    <div class="back">
        <center>
            <a href="http://localhost/AllPhpHere/1/admin/">Back to Admin panel</a>
        </center>
    </div>
</body>

</html>