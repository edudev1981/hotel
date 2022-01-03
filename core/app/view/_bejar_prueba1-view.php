<?php
    require_once(dirname(__FILE__).'/../domain/CodigoControlV7.php');
    $numero_autorizacion = '29040011007';
    $numero_factura = '1503';
    $nit_cliente = '4189179011';
    $fecha_compra = '20070702';            //EN NUMERO STRING
    $monto_compra = '2500';                //EN MONTO STRING SIN CEROS REDONDEADO
    $clave = '9rCB7Sv4X29d)5k7N%3ab89p-3(5[A';
    
    echo CodigoControlV7::generar($numero_autorizacion, $numero_factura, $nit_cliente,$fecha_compra, $monto_compra, $clave);
    //funca
?>