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

    <title>Tuitaa</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/message.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="non-responsive.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="background-color: #f5f8fa">

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white;height: 55px;">
      <div class="container" style="margin-right: 50px;margin-left: 50px;width: 90%;">
       
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
          <ul class="nav navbar-nav" >
            <li class="active"><a href="index.html" style="font: oblique bold 120% cursive;"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Inicio</a></li>
            <li><a href="notificaciones.html" style="font: oblique bold 120% cursive;"><span class="glyphicon glyphicon-bell" aria-hidden="true"></span> Notificaciones</a></li>
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
         <li>Nombre_Usuario
                  <small>@Alias</small></li> 
        <li>Cerrar Sesion</li>
        
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

   <div class="container text-center" style="width: 1200px;">    
  <div class="row">
    <div class="col-sm-3 ">
   
        
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
    
        <div class="row m-t-sm">

                           
                            <div class="panel blank-panel">
                            <div class="panel-heading">
                                <div class="panel-options">
                                    <ul class="nav nav-tabs">
                                        <li class=""><a href="#tab-1" data-toggle="tab" aria-expanded="false">Notificaciones</a></li>
                                       
                                    </ul>
                                </div>
                            </div>

                            <div class="panel-body">

                            <div class="tab-content">
                            <div class="tab-pane active" id="tab-1">
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        
                                        <div class="media-body ">
                                            <small class="pull-right">Hora_Notificacion</small>
                                         Contenido_Notificacion<br>
                                            
                                          
                                        </div>
                                    </div>
                                    
                                </div>

                            </div>
                        
                            </div>

                            </div>
                            </div>



                            </div>
    
    </div>
    <div class="col-sm-2 " style="width: 300px;">
      <div class="row bootstrap snippet">
    
      <div class="panel" style="width: 90%" id="followers">
        <div class="panel-heading">
          <h3 class="panel-title">
            <i class="icon md-check" aria-hidden="true"></i>A quien Seguir
          </h3>
        </div>
        <div class="panel-body">
          <ul class="list-group list-group-dividered list-group-full">
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a class="avatar avatar-online" href="javascript:void(0)">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <i></i>
                  </a>
                </div>
                <div class="media-body">
                  <div class="pull-right">
                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light">Follow</button>
                  </div>
                  <div><a class="name" href="javascript:void(0)">Willard Wood</a></div>
                  <small>@heavybutterfly920</small>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a class="avatar avatar-away" href="javascript:void(0)">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <i></i>
                  </a>
                </div>
                <div class="media-body">
                  <div class="pull-right">
                    <button type="button" class="btn btn-success btn-default btn-sm waves-effect waves-light"><i class="icon md-check" aria-hidden="true"></i>Following</button>
                  </div>
                  <div><a class="name" href="javascript:void(0)">Ronnie Ellis</a></div>
                  <small>@kingronnie24</small>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a class="avatar avatar-busy" href="javascript:void(0)">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <i></i>
                  </a>
                </div>
                <div class="media-body">
                  <div class="pull-right">
                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light">Follow</button>
                  </div>
                  <div><a class="name" href="javascript:void(0)">Gwendolyn Wheeler</a></div>
                  <small>@perttygirl66</small>
                </div>
              </div>
            </li>
            <li class="list-group-item">
              <div class="media">
                <div class="media-left">
                  <a class="avatar avatar-off" href="javascript:void(0)">
                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                    <i></i>
                  </a>
                </div>
                <div class="media-body">
                  <div class="pull-right">
                    <button type="button" class="btn btn-info btn-sm waves-effect waves-light">Follow</button>
                  </div>
                  <div><a class="name" href="javascript:void(0)">Daniel Russell</a></div>
                  <small>@danieltiger08</small>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>

    </div>
  </div>
</div>

<footer class="container-fluid text-center">
  <p>Footer Text</p>
</footer><!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
<?php

//oci_free_statement($stid);
oci_close($con);

?>