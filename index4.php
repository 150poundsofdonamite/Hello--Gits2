<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ibm852">
<title>Untitled Document</title>
</head>

<body>
<?php
echo"whatup.<br><br>You like? (Y/N)<br>";
?>
<form action="method">
	<input type="text" name="bob" value="<?php echo (empty($_GET["bob"])) ? $_GET["bob"] : "" ?>"> <input type="submit">
</form>
<?php
if(!empty($_GET["bob"])) {
	if(strtolower($_GET["bob"])=="y") {
		echo"Welcome to you, Git.";
		
	} else if(strtolower($_GET["bob"])=="n") {
		echo"Welcome to you, git.";
	}
}
?>
</body>
</html>