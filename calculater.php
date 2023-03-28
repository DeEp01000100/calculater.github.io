<html>

<head>
</head>
<body>
<!---make a calculater---->
<form action="calculater.php" method="get">

<input type="number" name="name1">
<br>
<br>
<input type="number" name="name2">
<br>
<br>
<button type="submit">submit</button>
</form>
<?php

echo $_GET["name1"] + $_GET["name2"];

?>

</body>
</html>