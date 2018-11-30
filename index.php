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

<!--<nav id="site-navbar" class="d-flex justify-content-around navbar navbar-expand-md navbar-light">
    <a class="navbar-brand" href="#">Making Of</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
        </ul>
    </div>
</nav>-->
<div class="container">
    <div id="div-topo" class="d-flex flex-row justify-content-around">
        <div class="componente-topo">Making Of - Santa Maria - RS</div>
        <!--<div class="componente-topo">*</div>-->
        <!--<div class="componente-topo">Santa Maria - RS</div>-->
        <!--<div class="componente-topo">*</div>-->
        <div class="componente-topo"><a target="_blank" href="https://www.facebook.com/makingoficial/"><i class="fab fa-facebook"></i>&nbsp;/&nbsp;makingoficial</a></div>
    </div>
</div>

<section class="" id="header-section">
    <div id="div-logo"></div>
    <div>
        <div id="box-agenda" class="">
            <? for($i=0;$i<4;$i++) { ?>
                <div class="agenda-linha">
                    <div class="agenda-dia">01<br/>JAN</div>
                    <div class="agenda-info ">Bar do Pingo<br/><small>informação complementar</small></div>
                </div>
            <? } ?>
        </div>
    </div>
</section>
</body>
<script type="application/ecmascript" language="ecmascript" src="./js/jquery.min.js"></script>
<script type="application/ecmascript" language="ecmascript" src="./js/bootstrap.min.js"></script>
</html>
