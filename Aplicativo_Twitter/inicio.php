<?php
session_start();

$con = oci_connect('TWITTER', 'oracle', 'localhost/XE');
if (!$con) {
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="logo.png">

    <title>Twitter</title>

   

      <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/message.css" rel="stylesheet">
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="non-responsive.css" rel="stylesheet">

    <script src="js/ie-emulation-modes-warning.js"></script>

    
  <style type="text/css">

   * {
  box-sizing: border-box;
}

body {
  font-family: "Open Sans", sans-serif;
  background: #374954;
  
  text-align: center;
}


#main {
  position: relative;
  list-style: none;
  background: #ffffff;
  font-weight: 400;
  font-size: 0;
  text-transform: uppercase;
  display: inline-block;
  padding: 0;
  margin: 10px auto;
}
#main li {
  font-size: 1.4rem;
  display: inline-block;
  position: relative;
  padding: 10px 20px;
  cursor: pointer;
  z-index: 5;
  min-width: 120px;
}

li {
  margin: 0;
}

.drop {
  overflow: hidden;
  list-style: none;
  position: absolute;
  padding: 0;
  width: 100%;
  left: 0;
  top: 48px;
}
.drop div {
  -webkit-transform: translate(0, -100%);
  -moz-transform: translate(0, -100%);
  -ms-transform: translate(0, -100%);
  transform: translate(0, -100%);
  -webkit-transition: all 0.5s 0.1s;
  -moz-transition: all 0.5s 0.1s;
  -ms-transition: all 0.5s 0.1s;
  transition: all 0.5s 0.1s;
  position: relative;
}
.drop li {
  display: block;
  padding: 0;
  width: 100%;
  background: white !important;
}

#marker {
  height: 6px;
  background: #00BCD4 !important;
  position: absolute;
  bottom: 0;
  width: 120px;
  z-index: 2;
  -webkit-transition: all 0.35s;
  -moz-transition: all 0.35s;
  -ms-transition: all 0.35s;
  transition: all 0.35s;
}

#main li:nth-child(1):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(1):hover ~ #marker {
  -webkit-transform: translate(10px, 0);
  -moz-transform: translate(10px, 0);
  -ms-transform: translate(10px, 0);
  transform: translate(10px, 0);
}

#main li:nth-child(2):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(2):hover ~ #marker {
  -webkit-transform: translate(195px, 0);
  -moz-transform: translate(195px, 0);
  -ms-transform: translate(195px, 0);
  transform: translate(195px, 0);
}

#main li:nth-child(3):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(3):hover ~ #marker {
  -webkit-transform: translate(390px, 0);
  -moz-transform: translate(390px, 0);
  -ms-transform: translate(390px, 0);
  transform: translate(390px, 0);
}

#main li:nth-child(4):hover ul div {
  -webkit-transform: translate(0, 0);
  -moz-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  transform: translate(0, 0);
}
#main li:nth-child(4):hover ~ #marker {
  -webkit-transform: translate(360px, 0);
  -moz-transform: translate(360px, 0);
  -ms-transform: translate(360px, 0);
  transform: translate(360px, 0);
}

          #contenedor {
      }
      #cabecera {
      }
      #menu {
        float: left;
        width: 25%;
        margin: 10px;
        background-color: white;
      }
      #contenido {
        float: left;
        width: 73%;
      }
      #contenido #principal {
        float: left;
        width: 65%;
        margin: 10px;
        background-color: white;
      }
      #contenido #secundario {
        float: left;
         width: 30%;
         margin: 10px;
         background-color: white;
      }
       
      #pie {
        clear: both;
        background-color: white;
      }
  </style>

  
  </head>

  <body style="background-color: #f5f8fa">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white;height: 55px;">
      <div class="container" style="margin-right: 50px;margin-left: 50px;width: 90%;">
       
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
          <ul class="nav navbar-nav" >
                <li class="inicio.php"><a href="#" style="font: oblique bold 120% cursive;"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
                <li><a href="notificaciones.php" style="font: oblique bold 120% cursive;"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Notificaciones</a></li>
                <li><a  style="font: oblique bold 120% cursive;"  data-toggle="modal" data-target="#modal-danger"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Mensajes</a></li>
          </ul>
          <ul style="margin-bottom: 0px;">
            <img src="logo.png" style=" float: left; width: 40px;height: 40px;margin: 8px;    margin-left: 160px;" class="img-responsive">
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <form class="navbar-form" style="float: left;">
            <div class="input-group">
              <input style="height: 45px;" type="text" class="form-control" placeholder="Buscar">
              <span class="input-group-btn">
                <button class="btn btn-info btn-lg" type="button">
                          <i class="glyphicon glyphicon-search"></i>
                </button>
              </span>
            </div>
            
          </form>
          <ul id="main" style="margin: 0;">
       <li style="padding: 0;"> <img src="https://bootdey.com/img/Content/avatar/avatar1.png" style="background-color: black; float: left; width: 40px;height: 40px;margin: 8px;" class="img-responsive img-circle">
       <button class="btn btn-info" style="margin: 10px;" data-toggle="modal" data-target="#modal-info">Twittear</button>
      <ul class="drop">
        <div style="padding-top: 15px;">
         <li><a href="perfil.php"><?=$_SESSION['nombre'];?>
                  <small><?=$_SESSION['alias'];?></small></li> 
        <li><a href="logout.php"> Cerrar Sesion</li>
        
        </div>
      </ul>
    </li>
    </ul>
          
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

      <div id="modal-info" class="modal modal-message modal-info fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="text-align: -webkit-center">             
                <div class="modal-title"><h4>Redactar un nuevo Tweet</h4></div>
                <div class="modal-body">
                <div class="status-upload nopaddingbtm">
              <form>
                <textarea class="form-control" placeholder="Qué estás haciendo ahora?"></textarea>
                <br>
                <ul class="nav nav-pills pull-left ">
                 <div class="custom-file-upload">
                <input type="file" id="file" name="myfiles[]" multiple />
                </div>
              </form>
            </div></div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success pull-right">Compartir</button>
                </div>
            </div> <!-- / .modal-content -->
        </div> <!-- / .modal-dialog -->
    </div>

    <div id="modal-danger" class="modal modal-message modal-danger fade" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" style="width: 1000px;">
            <div class="modal-content">
                <div class="modal-header" style="text-align: -webkit-center;font-size: 25px;">
                    Mensajes
                </div>
                <div class="modal-body">
<div class="content container-fluid bootstrap snippets">
      <div class="row row-broken">
        <div class="col-sm-3 col-xs-12">
          <div class="col-inside-lg decor-default chat" style="overflow: auto; outline: none;" tabindex="5000">
            <div class="chat-users">
              <h6>Online</h6>
                <div class="user">
                    <div class="avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="Nombre_usuario">
                    <div class="status offline"></div>
                    </div>
                    <div class="name">Nombre_usuario</div>
                    <div class="mood">@Alias</div>
                </div>
                <div class="user">
                    <div class="avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="Nombre_usuario">
                    <div class="status off"></div>
                    </div>
                    <div class="name">Nombre_usuario</div>
                    <div class="mood">@Alias</div>
                </div>
                <div class="user">
                    <div class="avatar">
                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="Nombre_usuario">
                    <div class="status online"></div>
                    </div>
                    <div class="name">Nombre_usuario</div>
                    <div class="mood">@Alias</div>
                </div>
            </div>
          </div>
        </div>
        <div class="col-sm-9 col-xs-12 chat" style="overflow: auto; outline: none;" tabindex="5001">
          <div class="col-inside-lg decor-default">
            <div class="chat-body">
              <h6>Chat</h6>
              <div class="answer left">
                <div class="avatar">
                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Nombre_usuario">
                  <div class="status offline"></div>
                </div>
                <div class="name">Nombre_Usuario</div>
                <div class="text">
                  Contenido_Mensaje
                </div>
                <div class="time">Hora_Envio</div>
              </div>
              <div class="answer right">
                <div class="avatar">
                  <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="Nombre_usuario">
                  <div class="status offline"></div>
                </div>
                <div class="name">Nombre_Usuario</div>
                <div class="text">
                 Contenido_Mensaje
                </div>
                <div class="time">Hora_Envio</div>
              </div>
              <div class="answer left">
                <div class="avatar">
                  <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="Nombre_usuario">
                  <div class="status online"></div>
                </div>
                <div class="name">Nombre_Usuario</div>
                <div class="text">
                  Contenido_Mensaje
                </div>
                <div class="time">Hora_Envio</div>
              </div>
              <div class="answer-add">
                <input placeholder="Escribe un Mensaje">
                <span class="answer-btn answer-btn-1"></span>
                <span class="answer-btn answer-btn-2"></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div> 
    </div> <!-- / .modal-dialog -->
    </div>
    </div>

     


   <div class="container text-center" style="width: 1400px;">    
  <div class="row">
    <div class="col-sm-3 ">
      <div class="well">
      <div class="card">
            <div class="card-header">
                <div class="card-header-menu">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="card-header-headshot"></div>
            </div>
            <div class="card-content">
                <div class="card-content-member">
                    <div class="title h4" >
                        <a href="perfil.php" style="color: black" >
                            <b><?=$_SESSION['nombre'];?></b>
                        </a>
                    </div>
                    <p class="m-0"><i class="pe-7s-map-marker"></i><?=$_SESSION['nombre-lugar'];?></p>
                </div>
                <div >
                <div class="card-footer-stats" style="display: -webkit-box;">
                    <div>
                        <p>Twitss:</p>
                         <?php
                           $cod=$_SESSION['codigo'];
          $sql6 = 'SELECT CODIGO_USUARIO,COUNT(*) as CANTIDAD_TWITTS FROM TBL_TWITTS GROUP BY CODIGO_USUARIO having CODIGO_USUARIO='.$cod;
$stid6 = oci_parse($con, $sql6);

oci_execute($stid6);
while (($row6 = oci_fetch_array($stid6, OCI_ASSOC)) != false) {
  echo $row6['CANTIDAD_TWITTS'];
}
?>
                    </div>
                    <div>
                        <p>Siguiendo:</p> <?php
                           $cod=$_SESSION['codigo'];
          $sql4 = 'SELECT CODIGO_USUARIO_SEGUIDOR,COUNT(CODIGO_USUARIO_SEGUIDOR) CANTIDAD_SEGUIDOS FROM TBL_SEGUIDORES_X_USUARIO GROUP BY CODIGO_USUARIO_SEGUIDOR HAVING CODIGO_USUARIO_SEGUIDOR='.$cod;
$stid4 = oci_parse($con, $sql4);

oci_execute($stid4);
while (($row4 = oci_fetch_array($stid4, OCI_ASSOC)) != false) {
  echo $row4['CANTIDAD_SEGUIDOS'];
}
?>
                    </div>
                    <div>
                        <p>Seguidores:</p>
                        <?php
                           $cod=$_SESSION['codigo'];
          $sql5 = 'SELECT CODIGO_USUARIO_SEGUIDO,NVL(COUNT(CODIGO_USUARIO_SEGUIDO),0) CANTIDAD_SEGUIDO FROM TBL_SEGUIDORES_X_USUARIO GROUP BY CODIGO_USUARIO_SEGUIDO HAVING CODIGO_USUARIO_SEGUIDO='.$cod;
$stid5 = oci_parse($con, $sql5);

oci_execute($stid5);
while (($row5 = oci_fetch_array($stid5, OCI_ASSOC)) != false) {
  echo $row5['CANTIDAD_SEGUIDO'];
}
?>
                    </div>
                </div>
                
            </div>
            </div>
            
        </div>
      </div>
        
      <div class="well">
        <p><a href="#">Tendencia</a></p>
        <p>
          <span class="label label-default">News</span>
          <span class="label label-primary">W3Schools</span>
          <span class="label label-success">Labels</span>
          <span class="label label-info">Football</span>
          <span class="label label-warning">Gaming</span>
          <span class="label label-danger">Friends</span>
        </p>
      </div>
    </div>
    <div class="col-sm-7" style="width: 50%;">
    
      
        
        <div class="row">

        <div class="panel panel-default" style="width: 95%;">
          <div class="panel-body">
            <div class="status-upload nopaddingbtm">
              <form>
                <textarea class="form-control" id="contenido" placeholder="Qué estás haciendo ahora?"></textarea>
                <br>
               
                <button type="button" onclick="Publicar(<?=$_SESSION['codigo'];?>);" class="btn btn-success pull-right">Compartir</button>
              </form>
            </div>
           
          </div>
        </div>
            
            
            
           <?php

$sql = 'SELECT * FROM TBL_TWITTS A INNER JOIN TBL_PERSONAS B ON(A.CODIGO_USUARIO=B.CODIGO_PERSONA) order by CODIGO_TWITT DESC';
$stid = oci_parse($con, $sql);

oci_execute($stid);
while (($row = oci_fetch_array($stid, OCI_ASSOC)) != false) {
?>
<div class="col-sm-12" style="text-align: left;">
                <div class="panel panel-white post">
                    <div class="post-heading">
                        <div class="pull-left image">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" class="img-circle avatar" alt="user profile image">
                        </div>
                        <div class="pull-left meta">
                            <div class="title h5">
                                <a href="#"><b><?php echo $row['PRIMER_NOMBRE'] .'_'.$row['PRIMER_APELLIDO'];?></b></a>
                                Hizo una Actualizacion
                            </div>
                            <h6 class="text-muted time"> <?php

    echo $row['FECHA_PUBLICACION'];
                          ?></h6>
                        </div>
                    </div>
                    <div class="post-image">
                       
                    </div>
                    <div class="post-description">
                        <p>            

                        <?php

    echo $row['CONTENIDO'] ;
                          ?>
  
                        </p>
                        <div class="stats">
                           
                            <a href="javascript:void(0); " onclick="Retwitt(<?=$_SESSION['codigo'];?>,<?php echo $row['CODIGO_TWITT'];?>);" class="btn btn-default stat-item">
                           
                                <i class="fa fa-share icon"></i> <?php
                                $ID=$row['CODIGO_TWITT'];
                        $sql2 = 'SELECT   CODIGO_TWITT,COUNT(CODIGO_TWITT) AS CANTIDAD_RETWITTS FROM TBL_RETWITTS_X_USUARIO GROUP BY CODIGO_TWITT HAVING CODIGO_TWITT='.$ID ;
                        
                        $stid2 = oci_parse($con, $sql2);

                         oci_execute($stid2);
                         while (($row2 = oci_fetch_array($stid2, OCI_ASSOC)) != false) {
                          echo $row2['CANTIDAD_RETWITTS'] ;
                         }
                    ?>
                            </a>
                        </div>
                    </div>
                    <div class="post-footer">
                        <div class="input-group"> 
                            <input class="form-control" placeholder="Añadir un comentario" type="text" id="txt-comentario-<?php echo $row['CODIGO_PERSONA'];?>">
                            <span class="input-group-addon">
                                <a href="javascript:void(0);" onclick="Comentar(<?php echo $row['CODIGO_PERSONA'];?>,<?php echo $row['CODIGO_TWITT'];?>);"><i class="fa fa-edit"></i></a>  
                            </span>
                        </div>
                        <ul class="comments-list">
<?php
                        $sql1 = 'SELECT * FROM TBL_COMENTARIOS_X_TWITT A INNER JOIN TBL_USUARIOS B ON (A.CODIGO_USUARIO=B.CODIGO_USUARIO) WHERE A.CODIGO_TWITT='.$row['CODIGO_TWITT'];
$stid1 = oci_parse($con, $sql1);

oci_execute($stid1);
while (($row1 = oci_fetch_array($stid1, OCI_ASSOC)) != false) {
?>
                        
                            <li class="comment">
                                <a class="pull-left" href="javascript:void(0);">
                                    <img class="avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                </a>
                                <div class="comment-body">
                                    <div class="comment-heading">
                                        <h4 class="user">   <?php
                                          echo $row1['ALIAS'] ;
                                           ?></h4>
                                        <h5 class="time"><?php
                                          echo $row1['FECHA'];
                                           ?></h5>
                                    </div>
                                    <p><?php
                                          echo $row1['COMENTARIO'];
                                           ?></p>
                                </div>
                            </li>
   
                
            
<?php
}

?>
                    </ul>
                    </div>
</div>
</div>
<?php

}
?>

            
        </div>
        
    
     
    </div>
    <div class="col-sm-2 well" style="width: 350px;">
      <div class="row bootstrap snippet">
    
      <div class="panel" id="followers">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="icon md-check" aria-hidden="true"></i>A quien Seguir
          </h3>
        </div>
        <div class="panel-body">
          <ul class="list-group list-group-dividered list-group-full">
          <?php
          $sql2 = 'SELECT * FROM TBL_USUARIOS A INNER JOIN TBL_PERSONAS B ON(A.CODIGO_USUARIO=B.CODIGO_PERSONA)';
$stid2 = oci_parse($con, $sql2);

oci_execute($stid2);
while (($row2 = oci_fetch_array($stid2, OCI_ASSOC)) != false) {
?>

            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a class="avatar avatar-online" href="javascript:void(0)">
                    <img src="" alt="">
                    <i></i>
                  </a>
                </div>
                <div class="media-body">
                  <div class="pull-right">
                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light" onclick="Seguir(<?=$_SESSION['codigo'];?>,<?php echo $row2['CODIGO_PERSONA'];?>);">Seguir</button>
                  </div>
                  <div><a class="name" href="javascript:void(0)"><?php echo $row2['PRIMER_NOMBRE']."_".$row2['PRIMER_APELLIDO'];?></a></div>
                  <small>@<?php echo $row2['ALIAS'];?></small>
                </div>
              </div>
            </li>
     
<?php
}


?>
     </ul>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>© 2017 Twitter</p>
</footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/message.js"></script>
    <script src="js/registro_usuarios.js"></script>
  </body>
</html>
<?php

oci_free_statement($stid);
oci_close($con);

?>