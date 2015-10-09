<?
require_once('enc.php');
$valor="{|id|:|1|,|accion|:|update|,|oper|:||,|enabled|:||,|chkId|:||}";
$valore=encrypt($valor,"LA CLAVE");
?>

<html>
<head>
</head>
<body>
<form action='rec.php' method='POST' name='frmAlta' id='frmAlta' onSubmit=''>
<input type='text' id='txtDato' name='txtDato' value='<?echo $valor;?>' size='200'><br>
<input type='text' id='txtDatoE' name='txtDatoE' value='<?echo $valore;?>' size='200'><br>
<input type='submit' id='btnEnviar' name='btnEnviar' value='Enviar'>
</form>
</body>
<html>