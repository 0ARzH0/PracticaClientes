<?php
    include_once "../Models/ProveedoresModelo.php";
    $Proveedor = new Proveedor("2");
    $Proveedor->Nombre="Juan";
    $Proveedor->Telefono="9865531";
    $Proveedor->Direccion="C21#109x22a";
    $Proveedor->Correo="zkangel@gmail.com";

    echo $Proveedor->Nombre;
?>