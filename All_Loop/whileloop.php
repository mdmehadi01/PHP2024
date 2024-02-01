<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php while loop</title>
</head>

<body>
    <form action="#">
        Year
        <select name="" id="">

            <?php /*
                $year = 2000;
                while ($year <= 2050) {

                ?>
                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>

                <?php
                    $year++;
                }*/
            ?>

            <?php

            $year = 2000;
            while ($year <= 2050) {
                echo "<option value='$year'>$year</option>";
                $year++;
            }
            ?>
        </select>
    </form>

</body>

</html>