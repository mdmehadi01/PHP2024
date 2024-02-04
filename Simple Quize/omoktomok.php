<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Quiz</title>
</head>

<body>

    <?php
    // Sample Quiz Data
    $quiz = array(
        array(
            'question' => 'What is the capital of France?',
            'options' => array('Berlin', 'Paris', 'London', 'Madrid'),
            'correct_answer' => 'Paris'
        ),
        array(
            'question' => 'Which planet is known as the Red Planet?',
            'options' => array('Mars', 'Venus', 'Jupiter', 'Saturn'),
            'correct_answer' => 'Mars'
        ),
        array(
            'question' => 'What is the largest mammal?',
            'options' => array('Elephant', 'Blue Whale', 'Giraffe', 'Hippopotamus'),
            'correct_answer' => 'Blue Whale'
        )
    );

    // Process Quiz Form Submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $score = 0;

        foreach ($quiz as $key => $question) {
            $userAnswer = isset($_POST["answer_$key"]) ? $_POST["answer_$key"] : '';

            if ($userAnswer === $question['correct_answer']) {
                $score++;
            }
        }

        echo "<p>Your score: $score out of " . count($quiz) . "</p>";
    }
    ?>

    <!-- Quiz Form -->
    <form method="post" action="">
        <?php foreach ($quiz as $key => $question) : ?>
            <fieldset>
                <legend><?php echo $question['question']; ?></legend>

                <?php foreach ($question['options'] as $option) : ?>
                    <label>
                        <input type="radio" name="answer_<?php echo $key; ?>" value="<?php echo $option; ?>">
                        <?php echo $option; ?>
                    </label><br>
                <?php endforeach; ?>

            </fieldset>
        <?php endforeach; ?>

        <input type="submit" value="Submit">
    </form>

</body>

</html>