
<h4>
	Whats your name?
</h4>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input type="text" name="name"><br>
<input type="submit" name="submit" value=" Submit"><br>
</form>

<?php
if(isset($_POST['submit'])) 
{ 
$name = $_POST['name'];
echo "Hello and welcome to  hacknation : <b> <h1> $name </h1> </b>";
echo "<br>Use the form again and enter a new name."; 
}
?>