<?
require_once('enc.php');
?>

<html>
<head>
</head>
<body>
<?
    echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	
    echo "<br>";
	echo $_POST['txtDato'];
	echo "<br>";
	echo $_POST['txtDatoE'];
	echo "<br>";
	$valor=decrypt($_POST['txtDatoE'],"LA CLAVE");
	echo $valor;
	echo "<br>";
?>
</body>
<html>