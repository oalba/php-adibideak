<html>
<body>

<?php
// No funciona cuando se envia un valor no numerico!!!
$num = 0;
if(isset($_GET["num"])){
    $num = $_GET["num"];
} else {
    $num = 1;
}

?>

<br>

<table border="1">
	<?php
	for ($x=0;$x<$num;$x++) {
		echo "<tr>

	    <td>Jill</td>
	    <td>Smith</td>
	  	</tr>";
	}
	?>
</table>

</body>
</html>