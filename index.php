<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
   <h1>Projeto Controle remoto</h1>
   <pre>
   <?php
    require_once 'Controleremoto.php';
    $c = new Controleremoto();
    $c->ligar();
    $c->maisVolume();
    $c->abrirMenu();
    ?>
    </pre>
    </body>
</html>