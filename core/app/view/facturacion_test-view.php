<link rel="stylesheet" href="assets/js/vendor/footable/css/footable.core.min.css">

<body id="minovate" class="appWrapper sidebar-sm-forced">
    <div class="row">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="index.php?view=reserva"><i class="fa fa-home"></i> Inicio</a></li>
                <li><a href="#">Facturacion</a></li>
                <li class="active">Pruebas / Test</li>
            </ol>
        </section>
    </div>


    <!-- row -->
    <div class="row">
        <!-- col -->
        <div class="col-md-12">
            <section class="tile">
                <div class="tile-header dvd dvd-btm">
                    <h1 class="custom-font">PRUEBAS DE SISTEMA DE FACTURACION</h1>
                    <!-- aqui van los botones superiores derechos, SOLO BOTONES -->

                </div>
                <!-- ******************************************************************************************** -->
                <!-- ****************   AQUI EMPIEZA TODO           ********************************************* -->
                <!-- ******************************************************************************************** -->
                <!-- tile body -->
                <div class="tile-body">

                    <form action="#" id="form01">
                        <div class="container">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="numAutorizacion">Numero de Autorizacion</label>
                                    <input type="text" class="form-control" id="numAutorizacion" name="numAutorizacion"
                                        placeholder="Numero de autorizacion">

                                </div>

                                <div class="form-group col-md-6">
                                    <label for="numFactura">Numero de Factura</label>
                                    <input type="text" class="form-control" id="numFactura" name="numFactura"
                                        placeholder="Numero de factura">

                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="numNitCliente">Nit Cliente</label>
                                    <input type="text" class="form-control" id="numNitCliente" name="numNitCliente"
                                        placeholder="Numero de NIT cliente">

                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fechaFactura">Fecha de Factura</label>
                                    <input type="text" class="form-control" id="fechaFactura" name="fechaFactura"
                                        placeholder="Fecha en aaaammdd" aria-describedby="facHelp">
                                    <small id="facHelp" class="form-text text-muted">Numero en aaaammdd.</small>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="montodeCompra">Monto de Compra</label>
                                    <input type="text" class="form-control" id="montodeCompra" name="montodeCompra"
                                        placeholder="Monto de compra" aria-describedby="montoHelp">
                                    <small id="montoHelp" class="form-text text-muted">Sin decimales redondeado</small>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group">
                                    <label for="llaveDosificacion">Llave de dosificacion</label>
                                    <input type="text" class="form-control" id="llaveDosificacion"
                                        name="llaveDosificacion" placeholder="Llave de dosificacion">
                                </div>
                            </div>

                            <div class="row">
                                <!--
                                <div class="form-check col-md-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                </div>
                                -->
                                <button type="submit" class="btn btn-primary">Testear</button>
                            </div>

                        </div>
                    </form>


                </div>


            </section>

        </div>

    </div>
    <div class="alert alert-secondary" role="alert" id="mensaje">
        mensaje x
    </div>


    <script src="assets/js/vendor/jquery/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/footable/footable.all.min.js"></script>

    <script>
    $('#mensaje').hide();
    $("#form01").submit(function(e) {
        e.preventDefault();
        $.post("./?action=facturacion_verif_cc", $("#form01").serialize()).done(function(data) {
            //alert("Data Loaded: " + data);
            $('#mensaje').text('El codigo de control es: '+data);
            $('#mensaje').show();
        });

    });

    $(window).load(function() {

        $('.footable').footable();

    });
    </script>