<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            border:1px solid blue;
            box-shadow:4px 4px 4px black;
            padding:.5em;
        }
    </style>
</head>
<body>
    
        <div>
            <?php
            include_once("Persona_c.php");
            $persona1 = new Persona("pepe","monagas");
            $persona1->mostrar();
            ?>
        </div>
    
</body>
</html>