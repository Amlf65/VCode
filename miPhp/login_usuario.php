<?php 
    session_start();
    if (isset($_SESSION['ingreso']) && $_SESSION['ingreso']=='YES') 
    {
        header("location: index.php");
    }
    else
    {

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>A.M.L.F.</title>

    <link rel="stylesheet" href="../recursos/css/bootstrap.min.css">
    <link rel="stylesheet" href="../recursos/css/main.css">
    <link rel="icon" type="image/svg+xml" href="../recursos/img/admin.svg" sizes="any">
</head>

<body>

    <script>
        $("#btn_confirmar").on("click", function() {
            confirmar()
        });

        $("#btn_registrar").on("click", function() {
            registrar()
        });
        $("#btn_limpiar").on("click", function() {
            limpiar()
        });
        
        // limpiar formulario de datos
        function limpiar() {
            $('#error').css('display', 'none');
            $('#error2').css('display', 'none');
            $("#email2").val('');
            $("#pass").val('');
            $("#pass2").val('');
        }
        // acceso usuario al pulsar entrar validando usuario y contraseña
        function confirmar() {
            var email = $('#email').val();
            var password = $('#password').val();
            $.ajax({
                url: 'usuario_controlador.php',
                type: 'POST',
                data: 'email=' + email + '&password=' + password + "&boton=ingresar"
            }).done(function(resp) {

                if (resp == '0') {
                    $('#error').show();
                } else if (resp == '1') {
                    $('#error2').show();
                } else {
                    location.href = '../vista/index.php';
                }
                setTimeout(function() {
                    $('#error').css('display', 'none');
                    $('#error2').css('display', 'none');
                    $("#email2").val('');
                    $("#pass").val('');
                    $("#pass2").val('');
                }, 1000);
            });
        }
        // regostrarse , crear nuevo usuario
        function registrar() {
            var email = $('#email2').val();
            var password = $('#pass').val();
            var password2 = $('#pass2').val();


            if (password === password2) {

                $.ajax({
                    url: 'usuario_controlador.php',
                    type: 'POST',
                    data: '&email=' + email + '&password=' + password + '&boton=registrar'
                }).done(function(respuesta) {
                    if (respuesta == 'exito') {
                        $('#exito').show();
                    } else {
                        alert(respuesta);
                    }
                    setTimeout(function() {
                        $('#exito').css('display', 'none');
                        $("#email2").val('');
                        $("#pass").val('');
                        $("#pass2").val('');
                    }, 1000);
                });
            } else {
                alert('Debe introducir la misma contraseña');
            }

        }

    </script>
</body>

</html>
<?php 

}?>
