<?php
$persona=array("Angel","Ruiz","22","Molas","Ingeniero");
setcookie("micookie[nombre]",$persona[0],time()+10);
setcookie("micookie[apellido]",$persona[1],time()+10);
setcookie("micookie[edad]",$persona[2],time()+10);
setcookie("micookie[origen]",$persona[3],time()+10);
setcookie("micookie[ocupacion]",$persona[4],time()+10);

if(isset($_COOKIE['micookie'])){
echo "Nombre: ".$_COOKIE['micookie']['nombre'];
}
?>