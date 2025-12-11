<?php
$nameErr = "";
$name = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['name_submit'])) {
   $name = trim($_POST["name"]);
   
   if (empty($name)) {
       $nameErr = "Name is required.";
   } else {
      
       if (!preg_match("/^[a-zA-Z]/", $name)) {
        
           $nameErr = "Name must start with a letter.";
       }
       
       if (!preg_match("/^[a-zA-Z\s\.\-]+$/", $name)) {
           $nameErr = "Name can only contain letters, spaces, periods (.), and dashes (-).";
       }
       
       $wordCount = str_word_count($name);
       if ($wordCount < 2) {
           $nameErr = "Name must contain at least two words.";
       }
   }
   if (empty($nameErr)) {
       
       echo "<h2>Name Validation Success!</h2>";
   }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>NAME</h2>
<input type="text" name="name" value="<?php echo $name;?>">
<span style="color: red;"><?php echo $nameErr;?></span>
<br><br>
<input type="submit" name="name_submit" value="Submit">
</form>