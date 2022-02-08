<!--this is the controller -->
<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//require autoload file
require_once ('vendor/autoload.php');

//create an instance of the Base class
$f3 = Base::instance();


//define a default root
$f3->route("GET /", function(){
    //echo"<h1> Hello, World!</h1>"; //this is a view
    $view = new Template();
    echo $view->render('views/home.html');

});

//run fat free
$f3->run();