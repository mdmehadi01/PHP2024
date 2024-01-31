<?php

$Host   = 'localhost';
$Name   = 'root';
$pass   = '';
$DB     = 'blog';

$db = mysqli_connect($Host, $Name, $pass, $DB);
if (!$db)
    echo "Connection Failed !";

$sql = "SELECT * FROM blog_posts";
$result = mysqli_query($db, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

    <style type="text/css">
        .table_th {
            padding: 20px;
            font-size: 20px;
        }

        .table_td {
            padding: 20px;
            background-color: skyblue;
        }

        .image {
            max-width: 100px;
            /* Adjust the maximum width as needed */
            max-height: 100px;
            /* Adjust the maximum height as needed */
        }
    </style>
</head>

<body>

    <div class="content">
        <center>
            <h1>Blog Post</h1>
            <br><br>

            <table border="1px">
                <tr>
                    <th class="table_th">title</th>
                    <th class="table_th">content</th>
                    <th class="table_th">category</th>
                    <th class="table_th">image</th>
                    <th class="table_th">video</th>
                </tr>

                <?php
                while ($info = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td class="table_td">
                            <?php echo "{$info['title']}"; ?>
                        </td>
                        <td class="table_td">
                            <?php echo "{$info['content']}"; ?>
                        </td>
                        <td class="table_td">
                            <?php echo "{$info['category']}"; ?>
                        </td>
                        <td class="table_td">
                            <!-- Display the image using an img tag -->
                            <img src="admin/templates/uploads/<?php echo "{$info['image']}"; ?>" alt="Image" class="image">
                        </td>

                        <td class="table_td">
                            <?php
                            echo $info['video'];
                            ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </table>
        </center>
    </div>

</body>

</html>