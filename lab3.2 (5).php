
<?php
$degreeErr = "";
$degrees = [];
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['degree_submit'])) {
   
   if (isset($_POST['degrees'])) {
       $degrees = $_POST['degrees'];
   }
 
   if (count($degrees) < 2) {
       $degreeErr = "You must select at least two degrees.";
   }
   if (empty($degreeErr)) {
       
       echo "<h2>Degree Validation Success! Selected: " . implode(", ", $degrees) . "</h2>";
   }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>DEGREE</h2>
<input type="checkbox" name="degrees[]" value="SSC" <?php if (in_array("SSC", $degrees)) echo "checked";?>> SSC

<input type="checkbox" name="degrees[]" value="HSC" <?php if (in_array("HSC", $degrees)) echo "checked";?>> HSC

<input type="checkbox" name="degrees[]" value="BSc" <?php if (in_array("BSc", $degrees)) echo "checked";?>> BSc

<input type="checkbox" name="degrees[]" value="MSc" <?php if (in_array("MSc", $degrees)) echo "checked";?>> MSc

<span style="color: red;"><?php echo $degreeErr;?></span>

<br><br>

<input type="submit" name="degree_submit" value="Submit">
</form>