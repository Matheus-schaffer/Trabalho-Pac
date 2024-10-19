<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Introdução à Programação">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $titulo; ?></title>
    <link rel="shortcut icon" href="/xfavicon-32x32.png.pagespeed.ic.4qARKDTtQo.webp" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <!-- Imagem no canto inferior direito -->
    <?php
    if (isset($imagemSrc)) {
        echo '<img src="' . $imagemSrc . '" class="imagem-canto" alt="Imagem da Página">';
    } else {
        echo '<p>Imagem não definida.</p>';
    }
    ?>

    <!-- Navbar -->
    <nav class="navbar">
        <a class="img-nav" href="index.php"><img src="https://www.catolicasc.org.br/wp-content/themes/catolicasc_v1/assets/dist/images/logo-catolica-sc.svg" alt="Logo Católica SC"></a>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="sobre.php">Sobre o PAC</a></li>
            <li><a href="contato.php">Equipe Desenvolvedora</a></li>
        </ul>
        <div class="hamburger" onclick="toggleSidebar()">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </nav>

    <!-- Sidebar -->
    <aside class="sidebar">
        <ul>
            <li><a href="topic1.php">Lógica de Programação</a></li>
            <li><a href="topic2.php">Algoritimos</a></li>
            <li><a href="topic3.php">Linguagem C</a></li>
            <li><a href="topic4.php">Exercícios</a></li>
        </ul>
    </aside>

    <!-- Conteúdo -->
    <div class="content">
        <!-- Seu conteúdo aqui -->
    </div>

    <script>
        function toggleSidebar() {
            const sidebar = document.querySelector('.sidebar');
            sidebar.classList.toggle('active');
        }
    </script>
</body>

</html>