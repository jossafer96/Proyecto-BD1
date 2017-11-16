<?php

header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.xls");


		$con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}
	


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA USUARIOS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>CODIGO</strong></td>
    <td><strong>NOMBRE</strong></td>
    <td><strong>APELLIDO</strong></td>
    <td><strong>CORREO</strong></td>
    <td><strong>FECHA INGRESO</strong></td>
    <td><strong>ALIAS</strong></td>
  </tr>
  
<?PHP
		
$sql = 'SELECT * FROM TBL_USUARIOS A INNER JOIN TBL_PERSONAS B ON(A.CODIGO_USUARIO=B.CODIGO_PERSONA) order by CODIGO_PERSONA DESC';
$stid = oci_parse($con, $sql);

oci_execute($stid);
while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {	

	$codigo=$row["CODIGO_PERSONA"];
	$nombre=$row["PRIMER_NOMBRE"];
	$Apellido=$row["PRIMER_APELLIDO"];
	$Correo=$row["CORREO_ELECTRONICO"];
	$Fecha=$row["FECHA_REGISTRO"];
	$Alias=$row["ALIAS"];					

?>  
 <tr>
	<td><?php echo $codigo; ?></td>
	<td><?php echo $nombre; ?></td>
	<td><?php echo $Apellido; ?></td>
	<td><?php echo $Correo; ?></td>
	<td><?php echo $Fecha; ?></td>
	<td>@<?php echo $Alias; ?></td>                     
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>