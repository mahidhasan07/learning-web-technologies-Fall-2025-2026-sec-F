<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php
    $names = ["Mahid", "Nayem", "Munna", "Omi", "Jihad"];

$searchItem = "Nayem"; 
$found = false;

for ($i = 0; $i < count($names); $i++) {
    if (strcasecmp($names[$i], $searchItem) == 0) {
        echo "Element '$searchItem' found at index $i.\n";
        $found = true;
        break; 
    }
}

if (!$found) {
    echo "Element '$searchItem' not found in the array.\n";
}
    ?>

    
</body>
</html>