<?php
$nombre = "Juan";
$apellido = "Gómez";
function concatena() {
	$GLOBALS["nombre"] = $GLOBALS["nombre"] . " " . $GLOBALS["apellido"];
}
concatena(); //concatena el nombre y el apellido
echo $nombre;

$arr=getenv();
foreach ($arr as $key=>$val)
echo "--- $key=>$val
";

echo "----------------------------<br>";

echo 'My username is ' .$_ENV["USER"] . '!<br> ';
echo "----------------------------<br>";
echo getenv("USERNAME");
echo getenv("COMPUTERNAME");
echo getenv("OS");
echo "----------------------------<br>";

echo $_SERVER["REMOTE_ADDR"];
echo $_SERVER["PHP_SELF"];
echo $_SERVER["REQUEST_METHOD"];
echo $_SERVER["HTTP_USER_AGENT"];
echo $_SERVER["HTTP_ACCEPT_LANGUAGE"];
echo $_SERVER["HTTP_HOST"];


?>
