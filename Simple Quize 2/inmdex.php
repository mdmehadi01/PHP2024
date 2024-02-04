<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiple Choice Quiz</title>
</head>

<body>

    <?php
    // Define the quiz questions and possible answers
    $quiz = array(
        array(
            "question" => "What is the capital of France?",
            "answers" => array("a" => "Berlin", "b" => "Madrid", "c" => "Paris", "d" => "Rome"),
            "correct" => "c"
        ),
        array(
            "question" => "What is the largest mammal on Earth?",
            "answers" => array("a" => "Elephant", "b" => "Blue whale", "c" => "Giraffe", "d" => "Lion"),
            "correct" => "b"
        ),
        array(
            "question" => "Who is the author of 'Romeo and Juliet'?",
            "answers" => array("a" => "Charles Dickens", "b" => "Jane Austen", "c" => "William Shakespeare", "d" => "Mark Twain"),
            "correct" => "c"
        )
        // Add more questions and answers as needed
    );

    // Check if a user has submitted answers
    if (isset($_POST['submit'])) {
        $score = 0;

        // Loop through submitted answers and check against the correct answers
        foreach ($quiz as $index => $q) {
            $userAnswer = isset($_POST['question' . $index]) ? $_POST['question' . $index] : '';

            echo "<p><strong>Question:</strong> {$q['question']}</p>";

            if ($userAnswer === $q['correct']) {
                echo "<p style='color: green;'>Correct! <span style='color: green;'>&#10004;</span></p>";
                $score++;
            } else {
                echo "<p style='color: red;'>Incorrect! The correct answer is {$q['correct']}</p>";
            }

            echo "<hr>";
        }

        echo "<p><strong>Your Total Score:</strong> $score out of " . count($quiz) . "</p>";
    }
    ?>

    <!-- HTML form for submitting answers -->
    <form method="post" action="">
        <?php
        // Generate form fields for each question
        foreach ($quiz as $index => $q) {
            echo "<p><strong>{$q['question']}</strong></p>";
            foreach ($q['answers'] as $key => $answer) {
                echo "<label><input type='radio' name='question$index' value='$key' required> $answer</label><br>";
            }
        }
        ?>
        <button type="submit" name="submit">Submit Answers</button>
    </form>

</body>

</html>