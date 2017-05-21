<?php
    include_once "../Models/ClientesModelo.php";
    $Cliente = new cliente("2");
    $Cliente->Nombre="Juan";
    $Cliente->Telefono="9865531";
    $Cliente->Direccion="C21#109x22a";
    $Cliente->Correo="zkangel@gmail.com";

    echo $Cliente->Nombre;
    echo "\n";
    print_r($Cliente);
    
?>