<?php
include_once("system/datas.php");
include_once("system/functions.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Stephen Miller</title>
        <link rel="stylesheet" href="styles/main.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="favicon.ico">
    </head>
    <body>
        <canvas id="matrixbg"></canvas>
        <div class="page-content">
            <div id="splash">
                <div class="center-ascii" id="center-ascii-id">
                    <div class="welcome-container">
                        <h2>Hello!</h2>
                        <p>I'm<span id="splash-text">Stephen Miller</span>.</p>
                    </div>
                    <pre class="ascii-element">
                    </pre>
                </div>
                <p class="scroll-down-text" id="scroll-down-text"></p>
                <div class="polygon">
                    <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                        <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 "></polygon>
                    </svg>
                </div>
            </div>
            <div id="aboutme">
                <div class="about-me-content">
                    <div class="left-side">
                        <img src="img/me.jpg"/>
                    </div>
                    <div class="right-side">
                        <h2 id="about_me_text">About me</h2>
                        <p>I'm a 24 year old guy from Hungary, who is a maniac video game console collector and game modder. I have my own video game, called CandyVenture! I'm currently a Front-End Developer, but I always love to learn new things. Besides programming I love to do photography and graphical stuff.</p>
                    </div>
                </div>
                
            </div>
            <div id="projects">
                <div class="polygon">
                    <svg x="0px" y="0px" viewBox="0 186.5 1920 113.5">
                        <polygon points="0,300 655.167,210.5 1432.5,300 1920,198.5 1920,300 "></polygon>
                    </svg>
                </div>
                <div class="projects-container">
                    <h2 class="main-title">My works</h2>

                    <?php cardTitle("Web development"); ?>
                    <div class="card-container">
                        <?php
                            for ($i = 0; $i < count($webdev_cards); $i++) {
                                cardDraw($webdev_cards[$i]["cardClass"], $webdev_cards[$i]["image"], $webdev_cards[$i]["title"], $webdev_cards[$i]["desc"], $webdev_cards[$i]["link"], $webdev_cards[$i]["linkname"]);
                            }
                        ?>
                    </div>

                    <?php cardTitle("Programming"); ?>
                    <div class="card-container">
                        <?php
                            for ($i = 0; $i < count($webdev_cards); $i++) {
                                cardDraw($webdev_cards[$i]["cardClass"], $webdev_cards[$i]["image"], $webdev_cards[$i]["title"], $webdev_cards[$i]["desc"], $webdev_cards[$i]["link"], $webdev_cards[$i]["linkname"]);
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="scripts/asciiMorph.js"></script>
    <script src="scripts/asciiArts.js"></script>
    <script src="scripts/background.js"></script>
    <script src="scripts/textLoader.js"></script>
    <script src="scripts/base.js"></script>
</html>