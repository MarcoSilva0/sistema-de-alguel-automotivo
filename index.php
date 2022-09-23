<?php
require_once 'header.php';
require_once 'footer.php';
$titlePage = $_SERVER['SCRIPT_NAME'];
$titlePage = explode('/', $titlePage);
$titlePage = explode('.', $titlePage[2]);
$titlePage = ucfirst($titlePage[0]);
echo getHeader($titlePage);
?>
<div class="swiper swiper-container" id="banner-home">
  <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    <!-- Slides -->
    <?php
    for($i = 0; $i <= 10; $i++){
        ?>
        <div class="swiper-slide">
            <img src="https://picsum.photos/2000/500?random=<?= $i ?>" alt="Imagem aleatória <?= $i ?>">
        </div>
        <?php
    }
    ?>
    ...
  </div>
  <!-- If we need pagination -->
  <div class="swiper-pagination"></div>

  <!-- If we need navigation buttons -->
  <div class="swiper-button-prev" id="swiper-button-prev-banner"></div>
  <div class="swiper-button-next" id="swiper-button-next-banner"></div>

</div>
<section class="container mt-5" id="sobre-home">
    <div class="row">
        <div class="col-12 col-md-6">
            <h1>Quem somos</h1>
            <p> 
                Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos,<br>
                e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos.<br>
                Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica,<br>
                permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum,<br>
                e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.
            </p>
        </div>
        <div class="col-12 col-md-6">
            <img src="assets/img/back-alugarcarro-dicas2.jpg" width="100%" alt="">
        </div>
    </div>
</section>

<?= getFooter() ?>