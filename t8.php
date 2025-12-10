<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $arr = [
        [1, 2, 3, 'A'],
        [1, 2, 'B', 'C'],
        [1, 'D', 'E', 'F']
    ];

    // Number pattern
    for($i=0; $i<3; $i++){
        for($j=0; $j<3-$i; $j++){
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "<br>";

    // Letter pattern
    for($i=0; $i<3; $i++){
        for($j=3-$i; $j<4; $j++){
            echo $arr[$i][$j] . " ";
        }
        echo "<br>";
    }
    ?>
</body>
</html>