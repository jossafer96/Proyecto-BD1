<?php
session_start();
unset ($SESSION['txt-correo']);
session_destroy();

header('Location: index.php');

?>