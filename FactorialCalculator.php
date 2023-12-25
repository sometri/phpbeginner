<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

<h2>Factorial Calculator</h2>

<form method="post">
    Enter a number: <input type="number" name="number">
    <input type="submit" value="Calculate Factorial">
</form>

<?php
function factorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * factorial($n - 1);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num = $_POST['number'];
    if ($num < 0) {
        echo "<p>Please enter a non-negative number.</p>";
    } else {
        $result = factorial($num);
        echo "<p>The factorial of $num is: $result</p>";
    }
}
?>

</body>
</html>
