<?php

$bloodGroupErr = "";

$bloodGroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['blood_submit'])) {

    $bloodGroup = $_POST['blood_group'];

  

    if (empty($bloodGroup)) {

        $bloodGroupErr = "You must select a blood group.";

    }

    if (empty($bloodGroupErr)) {

        

        echo "<h2>Blood Group Validation Success! Selected: " . $bloodGroup . "</h2>";

    }

}

?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>BLOOD GROUP</h2>

<select name="blood_group">

<option value="" disabled selected>Select...</option>

<option value="A+" <?php if ($bloodGroup == "A+") echo "selected";?>>A+</option>

<option value="B+" <?php if ($bloodGroup == "B+") echo "selected";?>>B+</option>

<option value="O+" <?php if ($bloodGroup == "O+") echo "selected";?>>O+</option>

<option value="AB-" <?php if ($bloodGroup == "AB-") echo "selected";?>>AB-</option>

</select>
<span style="color: red;"><?php echo $bloodGroupErr;?></span>

<br><br>

<input type="submit" name="blood_submit" value="Submit">

</form>
 