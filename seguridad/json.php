<!--<script>alert(1)</script>-->
<!--<body onload=alert(1)>-->
<!--http://capacitaionmuckisoftrepo.esy.es/Seguridad/7_json.php?q=<body onload=alert(1)>-->
<?php
$data=['term' => $_GET['q']];
//echo json_encode($data);
//how to solve
//header ('Content-type: application/json');

echo json_encode(
    $data);

?>