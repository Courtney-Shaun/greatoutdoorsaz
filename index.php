<!DOCTYPE html>
<!--
My Site Home Page
-->
<html lang="en-us">
    <head class ="head">
        <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/head.php'; ?>
        
    </head>
    <body class ="body" id="home">
        <header class="header">
            <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/page_header.php'; ?>
        </header>    
        <nav>
             <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/navigation.php'; ?>   
        </nav>
        <main>
            <figure id="carosel">
                <img src="resources/images/horseshoe.jpg" id="mainImage" alt="horseshoe">
            </figure>
            <h1 id="intro">Welcome to GreatOutdoorsAz.net</h1>
        <article id="articleHome">
            
            <p>This site is to inform readers of the dangers of being outdoors in the Arizona summer and ways you can prepare to avoid them.</p>
            <h2>Featured Posts</h2>
            <section id="featuredOne">
                <h2>Snakes</h2>
                    <a href ="/plantsandsnakes/snakes.php">
                        <img src ="/resources/images/westerndiamondback.jpg" alt ="Western Diamonback Rattlesnake">
                    </a>
                <p>Learn about what kinds of venomous snakes you may encounter.</p>
            </section>
            <section id="featuredTwo">
                <h2>Weather</h2>
                    <a href="/weather/weather.php">
                        <img src="/resources/images/haboob-3.jpg" alt="Phoenix Haboob">
                    </a>
                <p>Learn about the dangers that monsoon storms pose.</p>
            </section>
            </article>
        </main>
        <script src ="js/rotate.js"></script>
        <footer class="footer">
                <?php include $_SERVER['DOCUMENT_ROOT'].'/modules/footer.php'; ?>  
            </footer>
        </body>
</html>
