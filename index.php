<!DOCTYPE html>

<html lang="fr">
	<head>
        <meta charset="utf-8">
        <title>Ariew</title>
        <meta name="description" content="Le masque ARIEW permet d’enrichir l’expérience des utilisateurs sans dénaturer leur environnement.">
        <meta name="keywords" content="">
        <meta name="author" content="Agence Rébus">
        <meta name="viewport" content="initial-scale=1">
        <link href="css/normalize.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <!-- Library jquery -->
        <script src="js/jquery.min.js"></script>
        <script src="js/ajax.js"></script>
        <!-- FAVICON -->
        <link rel="icon" type="image/x-icon" href="img/common/favicon.ico">
        <!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
    </head>

    <body> 
        <video autoplay loop muted poster="../img/background-landing.png" id="bgvid">
            <source src="video/video-landing.mp4" type="video/mp4">
        </video>
        <div id="img-cover">
        </div>
        <div role="main">
            <h1 id="logo">
                <!-- <img src="img/logo-rebus.png" alt="Logo rébus"> -->
                ARIEW
            </h1>

            <p id="baseline">"Sans défi, il est impossible de se dépasser"</p>
            <p id="auteur">Jorge "Viki" Gomez, Rider BMX</p>
            
            <form id="news-inscription" method="post">
                <input type="email" id="mail-news" name="mail-news" placeholer="Entrez votre adresse mail" required>
                <input type="submit" value="Je m'inscris" id="inscription-news">
                <div style="clear:both"></div>
            </form>

            <!-- 
            <ul id="reseaux">
                <li id="twitter">
                    <a href="#" target=_blank></a>
                </li>
                <li id="instagram">
                    <a href="#" target=_blank></a>
                </li>
            </ul>

            -->
            <div class="succeed"></div>
        </div>

        
        <footer>
            <p>© Rébus | Contributor's Mazwai/Videezy.com | <a href="mentions-legales.php">Mentions légales</a></p>
        </footer>


    </body>

    

</html>