<?php

$Host   =  'localhost';
$Name   =  'root';
$pass   =  '';
$DB     =  'basics_quize';

$db = mysqli_connect($Host, $Name, $pass, $DB);
if (!$db) {
    echo "Connection Failed !";
}

if (isset($_POST['submit'])) {
    $question_number = isset($_POST['question_number']) ? $_POST['question_number'] : '';
    $question_text = isset($_POST['question_text']) ? $_POST['question_text'] : '';
    $correct_choice = isset($_POST['correct_choice']) ? $_POST['correct_choice'] : '';

    // Now you can use these variables in your SQL query or other processing logic

    //choice Array
    $choice = array();
    $choice[1] = $_POST['choice1'];
    $choice[2] = $_POST['choice2'];
    $choice[3] = $_POST['choice3'];
    $choice[4] = $_POST['choice4'];

    // First Query Questions Table

    // Perform the insert query and store the result
    $sql = "INSERT INTO questions (question_number, question_text) VALUES ('$question_number', '$question_text')";
    $result = $db->query($sql);

    if ($result === TRUE) {
        $insert_result = "Record inserted successfully";

        // Check if the question_number already exists before inserting choices
        $existing_question_check = "SELECT question_number FROM questions WHERE question_number = '$question_number'";
        $existing_question_result = $db->query($existing_question_check);

        if ($existing_question_result->num_rows == 0) {
            foreach ($choice as $coption => $value) {
                if ($value != "") {
                    if ($correct_choice == $coption) {
                        $is_correct = 1;
                    } else {
                        $is_correct = 0;
                    }

                    // Second Query for Choices Table
                    // Second Query for Choices Table
                    $query = "INSERT INTO choices (question_number, is_correct, text) ";
                    $query .= "VALUES ('{$question_number}', '{$is_correct}', '{$value}')";

                    $insert_row = $db->query($query);

                    if (!$insert_row) {
                        die("2nd Query for Choices could not be executed: " . $db->error);
                    }
                }
            }
            $message = "Question has been added successfully";
        } else {
            $message = "Question with the same question_number already exists";
        }
    } else {
        $insert_result = "Error: " . $sql . "<br>" . $db->error;
    }
}

// Move this block outside the if (isset($_POST['submit'])) block
$query = "SELECT * FROM questions";
$questions = mysqli_query($db, $query);
$total = mysqli_num_rows($questions);
$next = $total + 1;

// Close the database connection
$db->close();

// Continue with the rest of your code...
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Quiz Here</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Add Quiz Here</h2>
    <form action="add_quize.php" method="post" enctype="multipart/form-data">
        <header>
            <div class="container">
                <p>Quiz it's the beginning</p>
            </div>
        </header>
        <main>
            <div class="container">
                <h2>Add A Question</h2>
                <?php
                if (isset($message)) {
                    echo "<h4>" . $message . "</h4>";
                }
                ?>
                <p>
                    <label for="">Question Number:</label>
                    <input type="number" name="question_number" value="<?php echo $next; ?>">

                </p>

                <p>
                    <label for="">Question Text:</label>
                    <input type="text" name="question_text">
                </p>

                <p>
                    <label for="">Choice 1:</label>
                    <input type="text" name="choice1">
                </p>

                <p>
                    <label for="">Choice 2:</label>
                    <input type="text" name="choice2">
                </p>

                <p>
                    <label for="">Choice 3:</label>
                    <input type="text" name="choice3">
                </p>

                <p>
                    <label for="">Choice 4:</label>
                    <input type="text" name="choice4">
                </p>
                <p>
                    <label for="">Correct option number</label>
                    <input type="number" name="correct_choice">
                </p>
                <input type="submit" name="submit" value="submit">
            </div>
        </main>
    </form>
    <div class="back">
        <a href="http://localhost/AllPhpHere/1/admin/">Back to Admin panel</a>
    </div>
</body>

</html>