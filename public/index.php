<?php


require "../Core/functions.php";

spl_autoload_register(function($class){

      require "../{$class}.php";

});




session_start();

//require "../Flash.php";

//require "../Core/functions.php";

//$config = require "../config.php";

//require "../DB.php";

require "../config/routes.php";

