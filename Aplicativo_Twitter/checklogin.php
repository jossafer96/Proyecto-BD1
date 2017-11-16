<?php
session_start();
?>

<?php

 $con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
    if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


 
 $p1 = $_POST['txt-correo'];
 
$stid0 = oci_parse($con, 'begin VERIFICAR(:p1, :p2); end;');
oci_bind_by_name($stid0, ':p1', $p1);
oci_bind_by_name($stid0, ':p2', $p2, 1);
oci_execute($stid0);

echo $p1;
echo $p2;

 $sql = 'SELECT * FROM TBL_USUARIOS A INNER JOIN TBL_PERSONAS B ON (A.CODIGO_USUARIO=B.CODIGO_PERSONA) INNER JOIN TBL_LUGARES C ON (B.CODIGO_LUGAR_RESIDENCIA=C.CODIGO_LUGAR) WHERE A.CODIGO_USUARIO='.$p2;
 echo $sql;
$stid = oci_parse($con, $sql);
oci_execute($stid);
while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
    $PRIMERNOMBRE= $row['PRIMER_NOMBRE'];
    $PRIMERAPELLIDO= $row['PRIMER_APELLIDO'];
    $ALIAS= $row['ALIAS'];
    $NOMBRELUGAR= $row['NOMBRE_LUGAR'];
    $CODIGO= $row['CODIGO_USUARIO'];

}

 if($p2>=0){
   
 
    /* Creamos la sesión */
    $_SESSION['txt-correo'] = $_POST['txt-correo'];
    $_SESSION['nombre'] = $PRIMERNOMBRE."_".$PRIMERAPELLIDO;
    $_SESSION['alias'] = $ALIAS;
    $_SESSION['nombre-lugar'] = $NOMBRELUGAR;
    $_SESSION['codigo'] = $CODIGO;
    $_SESSION['loggedin'] = true;

  header('Location: inicio.php');
    /* Si no hay una sesión creada, redireccionar al index. */
    if(empty($_SESSION['txt-correo'])) { // Recuerda usar corchetes.
        header('Location: inicio.php');
    } 


  }
  oci_free_statement($stid0);
  oci_free_statement($stid);
oci_close($con); 
 ?>