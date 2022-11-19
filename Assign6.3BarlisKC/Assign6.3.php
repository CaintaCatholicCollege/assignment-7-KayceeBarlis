<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Assignment6.3</title>
</head>
<body>
    <h3>
        <?php
            $age = 25;
            echo "You are $age years old and...<br/><br/>";
            function readytoVote($age){
                $voter = $age;
                if($voter<18){
                    echo "You are too young to vote.";
                }else{
                    echo "You are legal to vote.";
                }
            }
            echo readytoVote($age);
        ?>
    </h3>
</body>
</html>