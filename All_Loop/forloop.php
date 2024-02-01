<?php


// for($count =1; $count<=10;$count++){
//     echo "Hello $count <br>";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forloop</title>
</head>

<body>
    <ul>
        <?php
        for ($user_count = 1; $user_count <= 59; $user_count++) {
        ?>
            <li>user <?php echo $user_count ?> </li>

        <?php

        }
        ?>

    </ul>
</body>

</html>