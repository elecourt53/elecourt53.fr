<?php
if (isset($_GET['page']))
    $page = $_GET['page'];
else
{
    header('location:index.php?page=accueil');
    exit;
}
?>
<html>
<head>
    <link href="./css/design.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href=".\css\fontawesome-free-6.4.2-web\css\all.min.css"/>
</head>
<body>
    <header> <?php require("./pages/header.php"); ?> </header>
    <div id="container">
        <nav> <?php require("./pages/menu.php"); ?>   </nav>
        <main>
            <?php switch ($page)
                    {
                        case 'accueil' : include("./pages/accueil.php"); break;
                        case 'hoverboards' : include("./pages/hoverboards.php"); break;
                        case 'trottinettes' : include("./pages/trottinettes.php"); break;
                        case 'velos' : include("./pages/velos.php"); break;
                        case 'bonCde' : include("./pages/bonCde.php"); break;
                        case 'contact' : include("./pages/contact.php"); break;
                        case 'mentionslegales' : include("./pages/mentionslegales.php"); break;
                        case 'erreur' : include("./pages/erreur.php"); break;
                        default : include("./pages/erreur.php"); break;
                    }
            ?>
        </main>
    <aside> <?php require("./pages/aside.php"); ?> </aside>
    </div>
    <footer> <?php require("./pages/footer.php"); ?> </footer>
</body>
</html>