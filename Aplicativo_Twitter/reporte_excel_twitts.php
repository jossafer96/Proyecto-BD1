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
<title>LISTA DE TWITSS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
  <tr>
    <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA TWITTS</strong></CENTER></td>
  </tr>
  <tr bgcolor="red">
    <td><strong>CODIGO</strong></td>
    <td><strong>NOMBRE</strong></td> 
    <td><strong>APELLIDO</strong></td>
    <td><strong>CONTENIDO</strong></td>
    <td><strong>FECHA</strong></td>
    
  </tr>
  
<?PHP
		
$sql = 'SELECT * FROM TBL_TWITTS A INNER JOIN TBL_PERSONAS B ON(A.CODIGO_USUARIO=B.CODIGO_PERSONA)';
$stid = oci_parse($con, $sql);

oci_execute($stid);
while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {	

	$codigo=$row["CODIGO_TWITT"];
	$nombre=$row["PRIMER_NOMBRE"];
	$Apellido=$row["PRIMER_APELLIDO"];
	$Contenido=$row["CONTENIDO"];
	$Fecha=$row["FECHA_PUBLICACION"];
						

?>				

?>  
 <tr>
	<td><?php echo $codigo; ?></td>
	<td><?php echo $nombre; ?></td>
	<td><?php echo $Apellido; ?></td>
	<td><?php echo $Contenido; ?></td>
	<td><?php echo $Fecha; ?></td>
	                   
 </tr> 
  <?php
}
  ?>
</table>
</body>
</html>