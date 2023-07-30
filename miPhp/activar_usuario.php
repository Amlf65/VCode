<?php 
session_start();
  if (isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES') {
?>
<html>

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>A.M.L.F.</title>

    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../recursos/css/main.css">
    <link rel="icon" type="image/svg+xml" href="../recursos/img/admin.svg" sizes="any">
</head>

<body>
    <!--Barra de Navegacion-->
    <?php 
        require_once('menu_privado.php');
    ?>
    <div class="container" style="margin-top:80px; margin-bottom:25px;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-11 col-lg-10  col-lg-9 p-0">  
                <div class="card">
                    <div class="card-header bg-primary justify-content-around">
                    <?php 
                        echo "<span class='display-4 text-light'>MANTENIMIENTO</span>";  
                    ?>
                    </div>
                    <div class="card-body" id="base_activar">

                    </div>
                    
                </div>
            </div>
        </div>    
    </div>
    <?php 
        require_once('pie_pagina.php');
    ?>
    <script src="../recursos/js/jquery-3.4.1.min.js"></script>
    <script src="../recursos/js/bootstrap.min.js"></script>
    <script src="../recursos/js/popper.min.js"></script>
    <script>
        
        $(document).ready(function() {
            $("#mp_mantenimiento :nth-child(1)").addClass("text-warning")
            listar();
        });
        
        function listar() {
            $.ajax({
                url: 'usuario_controlador.php',
                type: 'POST',
                data: 'boton=listar'
            }).done(function(resp) {
                    $("#base_activar").html(resp);
                },

            ).fail(function(jqXHR, textStatus, errorThrown) {
                alert("Error!!!");
            })
        }
        function eliminar(nombre) {
            $.ajax({
                url: 'usuario_controlador.php',
                type: 'POST',
                data: '&email=' + nombre + '&boton=eliminar'
            }).done(function(resp) {
                    $("#base_activar").html(resp);
                },

            ).fail(function(jqXHR, textStatus, errorThrown) {
                alert("Error!!!");
            })
        }
        function estado(nombre,estado) {
            $.ajax({
                url: 'usuario_controlador.php',
                type: 'POST',
                data: '&email=' + nombre + '&estado=' + estado + '&boton=estado'
            }).done(function(resp) {
                    $("#base_activar").html(resp);
                },
            ).fail(function(jqXHR, textStatus, errorThrown) {
                alert("Error!!!");
            })
        }
        function cerrar() {
            $.ajax({
                url: 'usuario_controlador.php',
                type: 'POST',
                data: "boton=cerrar"
            }).done(function(resp) {
                window.location.href = "../index.php";
            });
        }
    </script>
</body>

</html>

<?php

  }
  else
  {
    header("location: login.php");
  }
 ?>
