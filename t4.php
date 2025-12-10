<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $num1=11;
    $num2=22;
    $num3=33;
    if ($num1>$num2 && $num1>$num3){
        echo"num1 is big";
    } else if ($num2>$num1 && $num2>$num3) {
        echo"num2 is big";
    } else {
        echo"num3 is big";
    }
    ?>
    
</body>
</html>