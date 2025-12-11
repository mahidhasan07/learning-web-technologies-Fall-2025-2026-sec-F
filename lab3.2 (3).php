<?php
$dobErr = "";
$dd = $mm = $yyyy = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['dob_submit'])) {
   $dd = trim($_POST["dd"]);
   $mm = trim($_POST["mm"]);
   $yyyy = trim($_POST["yyyy"]);
   
   if (empty($dd) || empty($mm) || empty($yyyy)) {
       $dobErr = "All date fields are required.";

   } else {
       
       if (!filter_var($dd, FILTER_VALIDATE_INT) ||
           !filter_var($mm, FILTER_VALIDATE_INT) ||
           !filter_var($yyyy, FILTER_VALIDATE_INT))
       {
           $dobErr = "Date fields must be valid numbers.";
       }
       
       else if ($dd < 1 || $dd > 31 || $mm < 1 || $mm > 12 || $yyyy < 1953 || $yyyy > 1998) {
           $dobErr = "Invalid range: dd, mm , yyyy .";
       }
       
       else if (!checkdate($mm, $dd, $yyyy)) {
           $dobErr = "The date is not a valid calendar date.";
       }
   }
   if (empty($dobErr)) {
    
       echo "<h2>Date of Birth Validation Success!</h2>";
   }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>DATE OF BIRTH</h2>

   dd <input type="text" name="dd" size="2" value="<?php echo $dd;?>"> /
   mm <input type="text" name="mm" size="2" value="<?php echo $mm;?>"> /
   yyyy <input type="text" name="yyyy" size="4" value="<?php echo $yyyy;?>">

<span style="color: red;"><?php echo $dobErr;?></span>

<br><br>

<input type="submit" name="dob_submit" value="Submit">

</form>