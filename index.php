<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <base href="home">

    <title>Marcos V.B.S.</title>
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
            <ul class="menucenter">
                <li><a href="index.php?paginas=home">Home</a></li>
                <li><a href="index.php?paginas=projetos">Projetos</a></li>
                <li><a href="index.php?paginas=vejamais">Veja Mais</a></li>
            </ul>
        </div>

    </header>

    <main>


        <?php
        // Imprimir o conteúdo do array do GET
        // print_r($_GET);

        // Recuperar a variável página
        $pagina = $_GET["pagina"] ?? "home";

        // Definir o caminho da página
        $pagina = "paginas/{$pagina}.php";

        // Verificar se o arquivo existe
        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include "paginas/erro.php";
        }
        ?>

    </main>
    <footer>
        <p>Desenvolvido por <br> Marcos Vinicius Bartoli Senko em 2024</p>
    </footer>
    <script src="index.js"></script>
</body>

</html>