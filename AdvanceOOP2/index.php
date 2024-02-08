<form action="" method="post">
    <table>
        <tr>
            <td>
                Enter the first number:
            </td>
            <td><input type="number" name="num1" /></td>
        </tr>

        <tr>
            <td>
                Enter the second number:
            </td>
            <td><input type="number" name="num2" /></td>
        </tr>

        <tr>
            <td><input type="submit" name="calculation" value="Calculation" /></td>
        </tr>
    </table>
</form>
<?php
include("function.php");

if (isset($_POST['calculation'])) {
    $numberOne = $_POST['num1'];
    $numberTwo = $_POST['num2'];

    if (empty($numberOne) or empty($numberTwo)) {
        echo "File must not be empty";
    } else {
        echo "First number is :" . $numberOne . "<br>" . "Second number is :" . $numberTwo . "<br>" . "<br>";
    }
    $cal = new Calculation;
    $cal->add($numberOne, $numberTwo);
    $cal->sub($numberOne, $numberTwo);
    $cal->multi($numberOne, $numberTwo);
    $cal->dev($numberOne, $numberTwo);
}





?>