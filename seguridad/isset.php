<?php 
$_ENV="DEVELOPER";

//echo($_ENV=="DEVELOPER"?"Eres un derarrollador":"No eres un desarrollador sal de aquí")

if($_ENV=="DEVELOPER"){
    error_reporting(E_ALL);
    ini_set('error_reporting', E_ALL);
}
$x="Angel";
if(is_int($x)){
    //process data
    echo "<br>Hola";
}

?>