<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
</head>
<body>

<table border="1">
    <tr>
        <th>x</th>
        <?php 
        for ($i = 1; $i <= 10; $i++) {
            echo "<th>$i</th>";
        }
        ?>
    </tr>

    <?php 
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";
        echo "<th>$i</th>";
        for ($j = 1; $j <= 10; $j++) {
            echo "<td>" . ($i * $j) . "</td>";
        }
        echo "</tr>";
    }
    ?>

</table>

</body>
</html>
