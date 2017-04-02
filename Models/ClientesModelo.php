<?php
    include_once "PersonasModelo.php";
    class cliente extends Persona{
        var $Tipo_Cliente;

        Public function __construct ($Tipo_Cliente){
            $this->Tipo_Cliente=$Tipo_Cliente;
        }
    }
?>