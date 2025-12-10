<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
    else {
        continue;
    }
}
?>
</body>
</html>