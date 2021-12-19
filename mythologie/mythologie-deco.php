<?php
session_start();

session_destroy();
setcookie('id', "", 1);
setcookie('pseudo', "", 1);
setcookie('mail', "", 1);
setcookie('admin', "", 1);

header("location:mythologie-view-login.html.php");
