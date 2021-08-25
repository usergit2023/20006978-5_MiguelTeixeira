<!doctype html>
<head>
    <title>Document</title>
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Quem somos</a></li>
            <li><a href="">Quem somos</a></li>
            <li><a href="index.php?pagina=parceiros.php">Contato</a></li>
            <li><a href="">Localização</a></li>

        </ul>
    </nav>
</header>
<main>
    <?php
        if (isset($_GET["pagina"]) && !empty($_GET["pagina"])){
            $pagina=$_GET["pagina"];
            include ($pagina);
        }else{
//            include ("home.php");
            echo "Pagina Principal";
        }
    ?>
</main>

<footer>Footer</footer>
</body>
</html>