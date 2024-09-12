<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Desenvolvedor Marcos Vinicius Bartoli Senko / Programador Marcos Vinicius Bartoli Senko / Desenvolvedor em Campo Mourão PR / Programador em Campo Mourão PR">

    <base href="home">

    <title>Marcos Vinicius - Desenvolvedor</title>
    <link rel="shortcut icon" href="imagens/title.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/b3b83db5db.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="styles/style.css">
    

</head>

<body>

    <header>

        <div class="logo">
            <img src="imagens/logo.png" alt="Marcos Vinicius" title="Marcos Vinicius">
        </div>

        <div class="menu">
            <a href="home">Home</a>
            <a href="projetos">Projetos</a>
            <a id="vejaMais" href="#">Veja Mais</a>
        </div>

        <span class="class-mensagem" id="mensagem"></span>

    </header>

    <main>
        <?php

        $pagina = $_GET["pagina"] ?? "home";

        $pagina = "paginas/{$pagina}.php";

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }

        ?>
    </main>

    <footer>
        <p>Desenvolvido por <br> Marcos Vinicius Bartoli Senko em 2024 &copy;</p>
    </footer>
    <script src="index.js"></script>
</body>

</html>