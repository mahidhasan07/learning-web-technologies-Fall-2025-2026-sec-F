<?php
$genderErr = "";
$gender = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gender_submit'])) {
   
   if (isset($_POST['gender'])) {
       $gender = $_POST['gender'];
   }
  
   if (empty($gender)) {
       $genderErr = "You must select a gender.";
   }
   if (empty($genderErr)) {
       
       echo "<h2>Gender Validation Success! Selected: " . $gender . "</h2>";
   }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>GENDER</h2>
<input type="radio" name="gender" <?php if ($gender == "Male") echo "checked";?> value="Male"> Male

<input type="radio" name="gender" <?php if ($gender == "Female") echo "checked";?> value="Female"> Female

<input type="radio" name="gender" <?php if ($gender == "Other") echo "checked";?> value="Other"> Other

<span style="color: red;"><?php echo $genderErr;?></span>
<br><br>
<input type="submit" name="gender_submit" value="Submit">

</form>