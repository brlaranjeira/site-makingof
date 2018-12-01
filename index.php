<?php
/**
 * Created by PhpStorm.
 * User: brlaranjeira
 * Date: 30/11/18
 * Time: 10:45
 */

?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
    <title>Making Of | Santa Maria - RS</title>
</head>
<body>
<div id="div-bg"></div>

<div id="div-all">

    <div id="div-topo">
        <div class="componente-topo">Making Of - Santa Maria - RS</div>
        <div class="componente-topo"><a target="_blank" href="https://www.facebook.com/makingoficial/"><i class="fab fa-facebook"></i>&nbsp;/&nbsp;makingoficial</a></div>
    </div>
    <div id="div-logo"></div>
    <div id="box-agenda" class="">
        <?php for($i=0;$i<4;$i++) { ?>
            <div class="agenda-linha">
                <div class="agenda-dia">01<br/>JAN</div>
                <div class="agenda-info ">Bar do Pingo<br/><small>informação complementar</small></div>
            </div>
        <?php } ?>
    </div>
    <div id="div-apoio">
        <label id="label-header-apoio">APOIO</label>
        <?php for ($i=0;$i<2;$i++) {?>
            <div class="anuncio">
                <img src="./img/coca.png" alt="coca-cola">
                <label>Coca-Cola</label>
            </div>
        <?php } ?>
    </div>
</div>
</body>
<script type="application/ecmascript" language="ecmascript" src="./js/jquery.min.js"></script>
<script type="application/ecmascript" language="ecmascript" src="./js/bootstrap.min.js"></script>
</html>
