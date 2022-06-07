<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `merch`');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter</title>
    <link rel="stylesheet" href="stylevalo.css?v=<?php echo time(); ?>">
</head>

<body>
    <header id="header">
        <nav>
            <ul>
                <li class="Headerknop"><a href="/index.html">Home</a></li>
                <li><a class="active Headerknop" href="valorant/Valorant.html">Valorant</a></li>
                <li><a class="Headerknop" href="/overwatch.html">Overwatch</a></li>
                <li><a class="Headerknop" href="/rocket.html">Rocket League</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <section class="inputs">
            <div>
                <input id="Action-Adventure" type="checkbox" class="filter">
                <label for="Action-Adventure" class="label">Action-Adventure</label>
            </div>
            <div>
                <input id="Racing" type="checkbox" class="filter">
                <label for="Racing" class="label">Racing</label>
            </div>
            <div>
                <input id="Sport" type="checkbox" class="filter">
                <label for="Sport" class="label">Sport</label>
            </div>
        </section>
        <ul class="games">
            <?php foreach ($result as $row) : ?>
                <li class="game" data-category="Action-Adventure">
                    <article class="art">
                        <h2 class="h2article"><?php echo $row['productnaam']; ?></h2>
                        <img src="img/<?php echo $row['productfoto']; ?>" alt="t werkt niet">
                        <p><?php echo $row['productbeschrijving']; ?></p>
                        <h3><?php echo $row['productprijs']; ?></h3>
                        <h4>Voorraad:<?php echo $row['voorraad']; ?></h3>
                        <a href="details.php?id=<?php echo $row['id']; ?>">Meer info</a>
                    </article>
                </li>
            <?php endforeach; ?>
        </ul>

    </main>
    <footer>
        <a class="CTpagina" href="Contactpagina.html">ContactPagina</a>
        <img class="Bannergif" src="https://media.discordapp.net/attachments/895299586091024404/974637131064549426/3.gif" alt="">
    </footer>
    <script src="main.js"></script>
</body>

</html>