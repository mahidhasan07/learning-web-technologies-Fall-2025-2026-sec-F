<?php
$emailErr = "";
$email = "";
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email_submit'])) {
   $email = trim($_POST["email"]);
   
   if (empty($email)) {
       $emailErr = "Email is required.";
   } else {
       
       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
           $emailErr = "Invalid email format (e.g., anything@example.com).";
       }
   }
   if (empty($emailErr)) {
       
       echo "<h2>Email Validation Success!</h2>";
   }
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<h2>EMAIL</h2>
<input type="text" name="email" value="<?php echo $email;?>">
<span style="color: red;"><?php echo $emailErr;?></span>
<br><br>
<input type="submit" name="email_submit" value="Submit">
</form>