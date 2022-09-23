
<?php
function getHeader($title = ''){
    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sistema - <?= $title ?></title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
        <script src="https://kit.fontawesome.com/6dfa5427c6.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
    <div class="container">
        <header class="d-flex justify-content-center py-3">
          <ul class="nav nav-pills">
            <li class="nav-item"><a href="#" class="nav-link active" aria-current="page" _msthash="1281891" _msttexthash="42250">Casa</a></li>
            <li class="nav-item"><a href="#sobre-home" class="nav-link" _msthash="1282073" _msttexthash="313612">Quem Somos</a></li>
            <li class="nav-item"><a href="#" class="nav-link" _msthash="1282255" _msttexthash="253617">Precificação</a></li>
            <li class="nav-item"><a href="#" class="nav-link" _msthash="1282437" _msttexthash="429065">Perguntas frequentes</a></li>
            <li class="nav-item"><a href="#" class="nav-link" _msthash="1282619" _msttexthash="59826">Sobre</a></li>
          </ul>
        </header>
    </div>
    <?php
    return ob_get_clean();
}