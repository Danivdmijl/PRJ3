<?php
require 'functions.php';
$connection = dbConnect();

$result = $connection->query('SELECT * FROM `productbestsell`');

?>  

<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="main.js" defer></script>
    <title>JDMerch</title>
</head>

<body>
    <header id="header">
        <nav>
            <ul>
                <li class="active Headerknop"><a href="index.html">Home</a></li>
                <li><a class="Headerknop" href="valorant/Valorant.php">Valorant</a></li>
                <li><a class="Headerknop" href="overwatch/overwatch.php">Overwatch</a></li>
                <li><a class="Headerknop" href="rocketl/rocket.php">Rocket League</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1>Best verkochte producten</h1>
        <section onclick="Klikscript" class="container-article-kaartjes">
            <?php foreach ($result as $row) : ?>
                <article class="container-kaartjes">
                    <article class="kaartjes kaart-1">
                        <img class="FotoKaartjes" src="img/<?php echo $row['productfoto']; ?>" alt="">
                        <h2 class="TitelKaartjes"><?php echo $row['productnaam']; ?></h2>
                        <a href="details.php?id=<?php echo $row['id']; ?>">Meer info</a>
                    </article>
                <?php endforeach; ?>
                </article>
        </section>

        <h2 class="t-reviews">Reviews</h2>
        <section class="section section--third">
            <button class="arrow">&lt;</button>
            <ul class="reviews">
                <li class="review">
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p>1. Weide variatie aan spullen en prima prijzen, ook een mooi aangekleede site die vooral heel duidelijk is. Makkelijk mijn spullen kunnen bestellen zonder enige problemen! - Peter Plakstrip
                    </p>
                </li>
                <li class="review">
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p>2. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium, deserunt excepturi hic quidem eaque, repudiandae mollitia ut cupiditate quam similique doloribus quasi pariatur doloremque dicta sit laborum soluta officiis?</p>
                </li>
                <li class="review">
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p>3. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium, deserunt excepturi hic quidem eaque, repudiandae mollitia ut cupiditate quam similique doloribus quasi pariatur doloremque dicta sit laborum soluta officiis?</p>
                </li>
                <li class="review">
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p>4. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium, deserunt excepturi hic quidem eaque, repudiandae mollitia ut cupiditate quam similique doloribus quasi pariatur doloremque dicta sit laborum soluta officiis?</p>
                </li>
                <li class="review">
                    <section class="stars">
                        &#9733;
                        &#9733;
                    </section>
                    <p>5. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium, deserunt excepturi hic quidem eaque, repudiandae mollitia ut cupiditate quam similique doloribus quasi pariatur doloremque dicta sit laborum soluta officiis?</p>
                </li>
                <li class="review">
                    <section class="stars">
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                        &#9733;
                    </section>
                    <p>6. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo accusantium, deserunt excepturi hic quidem eaque, repudiandae mollitia ut cupiditate quam similique doloribus quasi pariatur doloremque dicta sit laborum soluta officiis?</p>
                </li>
            </ul>
            <button class="arrow">></button>
        </section>
    </main>
    <footer>
        <a class="CTpagina" href="Contactpagina.html">ContactPagina</a>
        <img class="Bannergif" src="https://media.discordapp.net/attachments/895299586091024404/974637131064549426/3.gif" alt="">
    </footer>
</body>

</html>