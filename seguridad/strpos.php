<?php
//validar una url
function is_url($s){
    //verificar que contenga http
    if(!strpos($s,"http://")===false){
        return false;
    }else{
        return true;
    }
}
//var_dump(is_url("http://facebook.com"));

echo (filter_var(' doe€snot@Ex!st',FILTER_SANITIZE_EMAIL)); //Ver tipos de filtros en el manual de php

?>