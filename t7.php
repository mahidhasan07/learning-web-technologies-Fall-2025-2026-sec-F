<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    //star shape
    for($i=1; $i<=3; $i++){
        for($j=1; $j<=$i; $j++){
            echo "* ";
        }
        echo "<br>";
    }

    echo "<br>";

    // Number shape
    for($i=3; $i>=1; $i--){
        for($j=1; $j<=$i; $j++){
            echo $j . " ";
        }
        echo "<br>";
    }

    echo "<br>";

    // Letter shape
    $ch = 'A';
    for($i=1; $i<=3; $i++){
        for($j=1; $j<=$i; $j++){
            echo $ch . " ";
            $ch++;
        }
        echo "<br>";
    }
    ?>
    
</body>
</html>