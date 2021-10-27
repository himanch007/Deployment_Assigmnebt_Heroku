<!DOCTYPE html>
<title>Deployment Example</title>
<body>
 <h1>Welcome to deployed page</h1>
 <form method="POST">
  Enter your name:<input type="text" name="t"/required><br>
  <input type="submit" name="Enter the page"/>
 </form>
<?php 
echo $_POST['t'];
?>
</body>
