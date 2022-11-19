<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment6.2</title>
</head>
<body>
    <h3>
        <?php
            echo "<table border=\"1\"align=\"center\">";
            for($square=1; $square<=50; $square++){
                echo "<tr><td>";
                echo "$square * ".$square;
                echo "</td><td>";
                echo "= ".$square * $square;
                echo "</td></tr>";
            }
            echo "</table>";
        ?>
    </h3>
</body>
</html>
