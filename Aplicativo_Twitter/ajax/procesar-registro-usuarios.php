<?php
$p3 =$_POST["txt-nombre"];
$p1 =$_POST["txt-apellido"];
	$p4 = $_POST["txt-correo"];
	$p5 = $_POST["txt-contrasena"];
	 $p2 =$_POST["slc-genero"];


 $con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
    if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


 
	 
	
$stid0 = oci_parse($con, 'begin INSERTAR_TBL_PERSONAS(id_persona.nextval, :p2, :p3, :p4, :p1); end;');
oci_bind_by_name($stid0, ':p2', $p2);
oci_bind_by_name($stid0, ':p3', $p3);
oci_bind_by_name($stid0, ':p4', $p4);
oci_bind_by_name($stid0, ':p1', $p1);

oci_execute($stid0);
oci_free_statement($stid0);
oci_close($con);


 $conn = oci_connect('TWITTER', 'oracle', 'localhost/XE');
    if (!$conn) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

$stid1 = oci_parse($conn, 'begin INSERTAR_TBL_USUARIOS(id_usuario.nextval, :p3, :p5); end;');
echo $stid1;
oci_bind_by_name($stid1, ':p3', $p3);
oci_bind_by_name($stid1, ':p5', $p5);


oci_execute($stid1);
  oci_free_statement($stid1);
oci_close($conn);
?>
