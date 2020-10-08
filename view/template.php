<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description"
        content="Cumplimiento de la NOM-035 (Norma Oficial Mexicana 035) para conocer los factores de riesgo psicosocial en los empleados de la empresa" />
    <meta name="keywords"
        content="Cumplimiento de la NOM-035, Cumplimiento de la norma 035, NOM035, NOM-035, Evaluaciones de la NOM-035, Cuestionarios NOM-035, Consultoría NOM-035, Psicologos NOM035, Implementación de la NOM035" />
    <meta name="author" content="TuEmpresa.com.mx" />
    <meta name="copyright" content="Copyright 2020 TuEmpresa.com.mx" />

    <title>NOM 035 PRO | Consultoría Psicológica DavenPort</title>
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
        <link rel="icon" type="image/png" href="<?php echo URL; ?>view/img/favicon.png">
    <link rel="stylesheet" href="<?php echo URL;?>view/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>view/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo URL; ?>view/plugins/lightslider/css/lightslider.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>

        
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" href="<?php echo URL;?>view/css/template.css">
    <link rel="stylesheet" href="<?php echo URL;?>view/css/styles.css">
    <link rel="stylesheet" href="<?php echo URL;?>view/css/container.css">
    <link rel="stylesheet" href="<?php echo URL;?>view/css/fonts.css">
    <link rel="stylesheet" href="<?php echo URL;?>view/css/header.css">
    <link rel="stylesheet" href="<?php echo URL;?>view/css/footer.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css">
    <link
        href="https://fonts.googleapis.com/css?family=Josefin+Sans:400,400i,700|Source+Sans+Pro|Yanone+Kaffeesatz&display=swap"
        rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>






</head>

<body>
    <?php
    require_once "view/modules/common/header2.php";
    ?>
    <div class="container" data-fs-scroll>
       <a id="back2Top" title="Back to top" href="#">&#10148;</a>
        <div class="sections">

            <?php
//require_once "view/modules/index.php";
$routes = Array();
if(isset($_GET["route"])){
	$routes = explode("/", $_GET["route"]);
}

/// quitar view modules

if(count($routes) > 0){
    if($routes[0] == "miempresa"){
        ?>
        <script src="<?php echo URL;?>/view/js/politicas.js"></script>
        <script src="<?php echo URL;?>/view/js/acciones.js"></script>
        <?php
        require_once "view/modules/bienvenida.php";
        require_once "view/modules/politicas.php";
        require_once "view/modules/medidas.php";
        require_once "view/modules/entorno.php";
        
        require_once "view/modules/acciones.php";
        require_once "view/modules/traumas.php";
        require_once "view/modules/buzon.php";

        //Aquí los includes de tus archivos
        }
    //require_once "view/modules/" . str_replace("-","", $routes[0]) . ".php";
   

}else{
    require_once "view/modules/video.php";
    require_once "view/modules/nom035.php";

    require_once "view/modules/beneficios.php";
    require_once "view/modules/imagenes.php";
    require_once "view/modules/contacto.php";

}


?>
</div>
</div>
        <?php
        require_once "view/modules/common/footer.php";
        ?>
      

        <script src="<?php echo URL;?>/view/plugins/jquery/jquery.js"></script>
        

        <script src="<?php echo URL;?>/view/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script>
        
        $(window).scroll(function() {
            var height = $(window).scrollTop();
            if (height > 100) {
                $('#back2Top').fadeIn();
            } else {
                $('#back2Top').fadeOut();
            }
        });
        $(document).ready(function() {
            $("#back2Top").click(function(event) {
                event.preventDefault();
                $("html, body").animate({
                    scrollTop: 0
                }, "slow");
                return false;
            });

            $('.click').click(function(e) {
                // prevent default action
                e.preventDefault();

                // get id of target div (placed in href attribute of anchor element)
                // and pass it to the scrollToElement function
                // also, use 2000 as an argument for the scroll speed (2 seconds, 2000 milliseconds)
                scrollToElement($(this).attr('href'), 1000);
            });

            var scrollToElement = function(el, ms) {
                var speed = (ms) ? ms : 600;
                $('html,body').animate({
                    scrollTop: $(el).offset().top
                }, speed);
            }


            $("#send").click(function(e) {
                ruta = "http://localhost/ajax/";
                e.preventDefault();
                if ($("input[name='name']").val().length == 0) {
                    Swal.fire(
                        'Datos requeridos',
                        'El nombre es requerido',
                        'error'
                    );
                    return;
                }
                if ($("input[name='email']").val().length == 0) {
                    Swal.fire(
                        'Datos requeridos',
                        'El email es requerido',
                        'error'
                    );
                    return;
                }
                if ($("input[name='phone']").val().length == 0) {
                    Swal.fire(
                        'Datos requeridos',
                        'El teléfono es requerido',
                        'error'
                    );
                    return;
                }
                if ($("textarea[name='observation']").val().length == 0) {
                    Swal.fire(
                        'Datos requeridos',
                        'El mensaje es requerido',
                        'error'
                    );
                    return;
                }

                var data = new FormData();
                data.append("nombre", $("input[name='name']").val());
                data.append("email", $("input[name='email']").val());
                data.append("telefono", $("input[name='phone']").val());
                data.append("mensaje", $("textarea[name='observation']").val());

                $.ajax({
                    url: ruta + "ajax/ajax.php",
                    type: "POST",
                    cache: false,
                    data: data,
                    async: false,
                    dataType: "json",
                    success: function(respuesta) {
                        if (respuesta == "1") {
                            Swal.fire(
                                'Operación exitosa',
                                'Se ha realizado el envío',
                                'success'
                            );
                        }
                    }
                })
            })




        });
        </script>
        
        <script src="<?php echo URL;?>/view/plugins/lightslider/js/lightslider.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

        
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.all.min.js"></script>
    </div>
</body>

</html>