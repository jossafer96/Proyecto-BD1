<?php
	switch ($_GET["accion"]) {
		case '1':

			$p1 = $_POST["codigo-usuario"];
	$p2 = $_POST["txt-contenido"];
	 


 $con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
    if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


 
	 
	
$stid0 = oci_parse($con, 'begin INSERTAR_TBL_TWITTS(id_twitt.nextval, :p1, :p2); end;');
oci_bind_by_name($stid0, ':p1', $p1);
oci_bind_by_name($stid0, ':p2', $p2);
echo $stid0;

oci_execute($stid0);
oci_free_statement($stid0);
oci_close($con);

			
			break;

			case '2':

				$p1 = $_POST["codigo-usuario"];
				$p2 = $_POST["codigo-twitt"];
				$p3 = $_POST["txt-comentario-".$p1];
	 


 $con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
    if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


 
	 
	
$stid0 = oci_parse($con, 'begin INSERTAR_TBL_COMENTA_X_TWITT(id_coment.nextval, :p1, :p2, :p3); end;');
oci_bind_by_name($stid0, ':p1', $p1);
oci_bind_by_name($stid0, ':p2', $p2);
oci_bind_by_name($stid0, ':p3', $p3);
echo $stid0;

oci_execute($stid0);
oci_free_statement($stid0);
oci_close($con);
		
				
			break;

			case '3':

				$p2 = $_POST["codigo-usuario"];
				$p1 = $_POST["codigo-twitt"];
				
	 


 $con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
    if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


 
	 
	
$stid0 = oci_parse($con, 'begin INSERTAR_TBL_RETWITS_X_USUARIO(:p1, :p2); end;');

oci_bind_by_name($stid0, ':p1', $p1);
oci_bind_by_name($stid0, ':p2', $p2);
echo $stid0;

oci_execute($stid0);
oci_free_statement($stid0);
oci_close($con);
		
				
			break;
			case '4':

				$p1 = $_POST["codigo-usuario"];
				$p2 = $_POST["codigo-UsuarioSeguido"];
				
	 


 $con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
    if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}


 
	 
	
$stid0 = oci_parse($con, 'begin INSERTAR_TBL_SEGUI_X_USUA(:p1, :p2); end;');

oci_bind_by_name($stid0, ':p1', $p1);
oci_bind_by_name($stid0, ':p2', $p2);
echo $stid0;

oci_execute($stid0);
oci_free_statement($stid0);
oci_close($con);
		
				
			break;
		}
	
	
?>