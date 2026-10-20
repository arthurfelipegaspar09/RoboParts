<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>RoboParts</title>

    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <header class="nav_topo">

        <a href="./home.php" class="logo">
            Robo<span>Parts</span>
        </a>

        <nav class="topo-nav">
            <a href="#">Peças</a>
            <a href="#">Modelos</a>
            <a href="#">Sobre</a>
        </nav>

        <div class="topo-direita">
            <a href="./php/perfil.php">Perfil</a>
            <a href="#">Compras</a>

            <a href="#" class="carrinho">
                Carrinho <b>0</b>
            </a>

            <a href="?logout">Sair</a>
        </div>

    </header>

   
    <section class="hero-container">
    <main class="hero-content">
        <h1>Bem-vindo à RoboParts</h1>
        <p>As peças certas para suas criações.</p>
    </main>

    <div class="hero-image">
        <img src="../img\Robo_parts_robo.jpg" alt="Robô Unitree G1" draggable="false">
    </div>
</section>
    
    <nav class="navbar">

        <div class="nav-link">
            <a href="./php/perfil.php">Perfil</a>
            <a href="#">Compras</a>
            <a href="?logout">Sair</a>
        </div>

        <button
            type="button"
            class="user-button"
            onclick="toggleNav()"
            aria-label="Abrir menu do usuário"
        >
            <img src="../img/usuario_default.avif" alt="Usuário">
        </button>

    </nav>

    <script src="../js/nav.js"></script>

</body>
</html>