<?php
include_once 'dbconfig.php';

$con=mysqli_connect("$host","$username","$password","projekatdjurisic");

if($con!=true)
{
    mysql_close($con);
    echo "greska";
}

?>

<html>
<head>
    <title>VideoKlub</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body>
    <div id="header-mainpage">
        <h1 id="header-title" class="white-text">Video Klub</h1>
        <nav id="header-nav">
            <a href="#goToMe-normalTable" class="header-options">Osnovne Baze</a>
            <a href="#goToMe-sideTable" class="header-options">Sporedne Baze</a>
        </nav>
    </div>
    <div class="one-table-show" id="goToMe-normalTable">
        <img class="image-forshow"src="img/firmavideo.jpg">
        <a href="firmavideo.php">
            <button type="button" class="table-button right-button">
                <h1>Open table firmavideo</h1>
            </button>
        </a>
    </div>

    <div class="one-table-show">
        <a href="vlasnik.php">
            <button type="button" class="table-button left-button">
                <h1>Open table vlasnik</h1>
            </button>
        </a>
        <img class="image-forshow"src="img/vlasnik.jpg">
    </div>

    <div class="one-table-show">
        <img class="image-forshow"src="img/clanarina.jpg">
        <a href="clanarina.php">
            <button type="button" class="table-button right-button">
                <h1>Open table clanarina</h1>
            </button>
        </a>
    </div>

    <div class="one-table-show">
        <a href="clankluba.php">
            <button type="button" class="table-button left-button">
                <h1>Open table clankluba</h1>
            </button>
        </a>
        <img class="image-forshow"src="img/clankluba.webp">
    </div>

    <div class="one-table-show">
        <img class="image-forshow"src="img/firmaproizvod.jpg">
        <a href="firmaproizvod.php">
            <button type="button" class="table-button right-button">
                <h1>Open table firmaproizvod</h1>
            </button>
        </a>
    </div>

    <div class="one-table-show">
        <a href="pozicija.php">
            <button type="button" class="table-button left-button">
                <h1>Open table pozicija</h1>
            </button>
        </a>
        <img class="image-forshow"src="img/pozicija.webp">
    </div>

    <div class="one-table-show">
        <img class="image-forshow"src="img/proizvod.jpg">
        <a href="proizvod.php">
            <button type="button" class="table-button right-button">
                <h1>Open table proizvod</h1>
            </button>
        </a>
    </div>

    <div class="one-table-show">
        <a href="proizvodjac.php">
            <button type="button" class="table-button left-button">
                <h1>Open table proizvodjac</h1>
            </button>
        </a>
        <img class="image-forshow"src="img/proizvodjac.jpg">
    </div>

    <div class="one-table-show">
        <img class="image-forshow"src="img/radnik.jpg">
        <a href="radnik.php">
            <button type="button" class="table-button right-button">
                <h1>Open table radnik</h1>
            </button>
        </a>
    </div>

    <div class="one-table-show">
        <a href="radnjafirme.php">
            <button type="button" class="table-button left-button">
                <h1>Open table radnjafirme</h1>
            </button>
        </a>
        <img class="image-forshow"src="img/radnjafirme.jpeg">
    </div>

    <div class="one-table-show" id="goToMe-sideTable">
        <img class="image-forshow"src="img/query1.jpg">
        <a href="query1.php">
            <button type="button" class="table-button right-button">
                <h1>Open query menadzeri</h1>
            </button>
        </a>
    </div>

    <div class="one-table-show">
        <a href="query2.php">
            <button type="button" class="table-button left-button">
                <h1>Open query dobrekompanije</h1>
            </button>
        </a>
        <img class="image-forshow"src="img/query2.webp">
    </div>

    <div class="one-table-show" id="goToMe-sideTable">
        <img class="image-forshow"src="img/query3.webp">
        <a href="query3.php">
            <button type="button" class="table-button right-button">
                <h1>Open query visevlasnika</h1>
            </button>
        </a>
    </div>

    <div class="one-table-show">
        <a href="query4.php">
            <button type="button" class="table-button left-button">
                <h1>Open query radnjenis</h1>
            </button>
        </a>
        <img class="image-forshow"src="img/query4.jpg">
    </div>

    <div class="one-table-show" id="goToMe-sideTable">
        <img class="image-forshow"src="img/query5.jpeg">
        <a href="query5.php">
            <button type="button" class="table-button right-button">
                <h1>Open query maleplate</h1>
            </button>
        </a>
    </div>

</body>
</html>