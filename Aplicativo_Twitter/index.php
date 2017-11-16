
<HTML>
    <HEAD>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- The above 2 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Note there is no responsive meta tag here -->

    <link rel="icon" href="logo.png">

    <title>Twitter</title>

    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="non-responsive.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>

    <style type="text/css">
    	@import url(http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css);
 body {
 background-image: url(fondo.jpg);
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;
        
      }

      .form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }
}

    </style>

    </HEAD>

    <BODY>
    <nav class="navbar navbar-default navbar-fixed-top" style="background-color: white;height: 55px;">
      <div class="container" style="margin-right: 50px;margin-left: 50px;width: 90%;">
       
        <!-- Note that the .navbar-collapse and .collapse classes have been removed from the #navbar -->
        <div id="navbar">
          <ul class="nav navbar-nav" >
            <li class="active"><a href="#" style="font: oblique bold 120% cursive;"><img src="logo.png" style=" float: left;height: 25px;" class="img-responsive"> Inicio</a></li>
            <li><a href="#about" style="font: oblique bold 120% cursive;">Sobre Nosotros</a></li>
            
          </ul>
          <ul style="margin-bottom: 0px;">
            
          </ul>
          
          <ul class="nav navbar-nav navbar-right">
            
          
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

        <div class="container">
        <div style="width: 530px;float: left;color: white;">
        	<h2>Bienvenido a Twitter.</h2>
        	<h3>Conéctate con tus amigos y otras personas fascinantes. Obtén actualizaciones instantáneas de las cosas que te interesan. Mira los eventos que se están desarrollando, en tiempo real, desde todos los ángulos.</h3>
        </div>

        <div style="float: right;">

      <form action="checklogin.php" method="POST" class="form-signin" style="margin: 10px;padding: 10px 37px 0px;">
        <input type="text" class="input-block-level" placeholder="Correo" name="txt-correo" style="height: 25px;">
        <input type="password" class="input-block-level" placeholder="Contraseña" name="txt-contrasena" style="height: 25px; ">
        <button class="btn btn-large btn-primary" type="submit" style="margin-left: 1%;">Iniciar Sesion</button>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Recordar mis Datos
        </label>
        
      </form>
		
       <form class="form-signin" style="margin: 10px;padding: 10px 37px 0px;">
       <h4 style="margin: 0px;"><strong>¿Eres nuevo en Twitter?</strong></h4>
       <h4>Resgistrate</h4>
        <input type="text" class="input-block-level" placeholder="Nombre " id="txt-nombre" style="height: 25px;">
        <input type="text" class="input-block-level" placeholder="Apellido" id="txt-apellido" style="height: 25px;">
        <input type="text" class="input" placeholder="Correo" id="txt-correo" style="height: 25px;">
        <input type="text" class="input-block-level" placeholder="Contraseña" id="txt-contrasena" style="height: 25px;">
        <label>Genero:</label> 
                        <label><input type="radio" name="1" id="slc-genero"  value="1" >Femenino</label>&nbsp;&nbsp;&nbsp;&nbsp;
                        <label><input type="radio" name="1" id="slc-genero" value="2">Masculino</label><br>
        <label class="checkbox">
           <button class="btn btn-large btn-primary" type="button" id="btn-registrar" style="margin-left: 7%;"> Regístrate en Twitter</button>
        </label>
        
      </form>
      </div>
      </div>

<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/registro_usuarios.js"></script>

    </BODY>
</HTML>
