<?php
// Establecer una cookie
$cookieName = "usuario";
$cookieValue = "Juan";
$cookieExpiration = time() + (60 * 60 * 24 * 7); // Caduca en una semana (segs * mins * horas * días)
setcookie($cookieName, $cookieValue, $cookieExpiration);

// Obtener el valor de una cookie
// if (isset($_COOKIE["usuario"])) {
//     $valorCookie = $_COOKIE["usuario"];
//     echo "El valor de la cookie 'usuario' es: " . $valorCookie;
// } else {
//     echo "La cookie 'usuario' no está establecida.";
// }

// Eliminar una cookie
//setcookie($cookieName, "", time() - 3600); // Establece el tiempo de expiración en el pasado para eliminarla
?>