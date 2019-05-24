<!DOCTYPE html>
<html>
<body>
	<form method="post" action="act.php">
	<input type="text" name="num" placeholder="table" method="post">
<input type="submit" name="post">
</form>
<table align="left" border="1" cellpadding="3" cellspacing="0">
<?php
$num=$_POST['num'];
 
for($i=1;$i<=10;$i++)
{
echo "<tr>";
  echo "<td>$num * $i = ".$num*$i."</td>";
  echo "</tr>";
  }
 
?>
</table>
</body>
</html>
