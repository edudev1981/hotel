<?php
/* error
$data1 = file_get_contents('php://input');
echo $data1['numAutorizacion'];
*/

/*
$data = json_decode(file_get_contents('php://input'), true);
print_r($data);
echo $data["numAutorizacion"];
//echo "ed".$_POST["numAutorizacion"];
*/

/*
$data1 = file_get_contents('php://input');
$data = json_decode($data1, true);
echo $data1['numAutorizacion'];
*/
//echo $data;//ya la tiene


require_once dirname(__FILE__) . '/../domain/CodigoControlV7.php';
$numero_autorizacion = '29040011007';
$numero_factura = '1503';
$nit_cliente = '4189179011';
$fecha_compra = '20070702'; //EN NUMERO STRING
$monto_compra = '2500'; //EN MONTO STRING SIN CEROS REDONDEADO
$clave = '9rCB7Sv4X29d)5k7N%3ab89p-3(5[A';
//echo CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente, $fecha_compra, $monto_compra, $clave);
//6A-DC-53-05-14

//var_dump($_POST);
$numero_autorizacion = $_POST["numAutorizacion"];
$numero_factura = $_POST["numFactura"];
$nit_cliente = $_POST["numNitCliente"];
$fecha_compra = $_POST["fechaFactura"]; //EN NUMERO STRING
$monto_compra = $_POST["montodeCompra"]; //EN MONTO STRING SIN CEROS REDONDEADO
$clave = $_POST["llaveDosificacion"];
//6A-DC-53-05-14
echo CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente, $fecha_compra, $monto_compra, $clave);
//funca
