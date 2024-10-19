<?php
$titulo = "Home";
include 'nav.php';
?>

<div class="content">
    <h1>Introdução à Programação</h1>

    <!-- Carrossel de imagens -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <!-- Indicadores (opcional) -->
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExample" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExample" data-bs-slide-to="2"></li>
        </ol>

        <!-- Imagens do carrossel -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="./img/c-prog.png" class="d-block w-100" alt="Imagem 1">
            </div>
            <div class="carousel-item">
                <img src="./img/img-logic-2.png" class="d-block w-100" alt="Imagem 2">
            </div>
            <div class="carousel-item">
                <img src="./img/img-logic.png" class="d-block w-100" alt="Imagem 3">
            </div>
        </div>

        <!-- Controles de navegação -->
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    <!-- Cards -->
    <div class="card-container">
        <div class="card">
            <img src="./img/img-logic-2.png" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
                <h5 class="card-title">Logica de Programação</h5>
                <p class="card-text">Aprenda os conceitos básicos para iniciar na programação!</p>
                <a href="topic1.php" class="btn btn-primary">Acessar</a>
            </div>
        </div>

        <div class="card">
            <img src="./img/img-algor.png" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
                <h5 class="card-title">Algoritimos</h5>
                <p class="card-text">Aprenda Algoritimos linguagem específica que as máquinas compreendem </p>
                <a href="topic2.php" class="btn btn-primary">Acessar</a>
            </div>
        </div>

        <div class="card">
            <img src="./img/img-c.png" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
                <h5 class="card-title">Linguagem C</h5>
                <p class="card-text">Aprenda a sua primeira linguagem, faça seus primeiros programas em C!</p>
                <a href="topic3.php" class="btn btn-primary">Acessar</a>
            </div>
        </div>

        <div class="card">
            <img src="./img/img-logic.png" class="card-img-top" alt="Imagem 1">
            <div class="card-body">
                <h5 class="card-title">Exercicíos</h5>
                <p class="card-text">É aqui onde você treinará seu aprendizado</p>
                <a href="#" class="btn btn-primary">Acessar</a>
            </div>
        </div>

    </div>

</div>

<?php
include 'footer.php';
?>
