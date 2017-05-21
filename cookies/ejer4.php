<?php
if(isset($_POST['color'])){
    $color=$_POST['color'];
    setcookie("colo",$color,time()+120);
}else{
    //dos alternativas (existe o no las cookies);
    if(isset($_COOKIE['color'])){
        $color=$_COOKIE['color'];
    }else{
        $color="white";
    }
}
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body style='background-color:<?=$color?>'>
        <form method="post" action="ejer4.php">
            <label for="color">Escoge tu color de fondo</label>
            <select name="color">
                <option value="red" <?=($color=="red"?" selected":"")?>>Rojo</option>
                <option value="blue" <?=($color=="blue"?" selected":"")?>>Azul</option>
                <option value="green" <?=($color=="green"?" selected":"")?>>Verde</option>
                <option value="yellow" <?=($color=="yellow"?" selected":"")?>>Amarillo</option>
                <option value="silver" <?=($color=="silver"?" selected":"")?>>Plata</option>
                <option value="black" <?=($color=="black"?" selected":"")?>>Negro</option>
            </select>
            <input type="submit" name="" value="Cambiar Color!"/>
        </form>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    </body>
</html>