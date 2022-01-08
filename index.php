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
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 186 1920 113">
                        <polygon points="0,300 655,210 1432,300 1920,198 1920,300 "></polygon>
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
                        <p>I'm a 24 year old guy from Hungary, who is a maniac video game console collector and game modder. I have my own video game, called CandyVenture! I'm currently a Front-End Developer, but I always love to learn new things. Besides games I love to do photography and graphical stuff.</p>
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
                    <?php
                        createCardSection("Web development", "webdev", $webdev_cards);
                        createCardSection("Games", "games", $games_cards);
                        createCardSection("Other", "other", $other_cards);
                    ?>
                    <?php sectionTitle("Photography", ""); ?>
                    <div class="photos-container">
                        <div class="flexible-photo-container">
                            <div class="left-side">
                                <div class="photos-box-1x2">
                                    <div class="big-picture" style="background-image: url(img/photos/photo1.jpg)"></div>
                                    <div class="right-pictures">
                                        <div class="photo" style="background-image: url(img/photos/photo2.jpg)"></div>
                                        <div class="photo" style="background-image: url(img/photos/photo3.jpg)"></div>
                                    </div>
                                </div>
                                <div class="landscape-photos">
                                    <div class="photo" style="background-image: url(img/photos/photo6.jpg)"></div>
                                    <div class="photo" style="background-image: url(img/photos/photo5.jpg)"></div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div class="half-photo" style="background-image: url(img/photos/photo4.jpg)"></div>
                                <div class="full-photo" style="background-image: url(img/photos/photo7.jpg)"></div>
                                <div class="half-photo" style="background-image: url(img/photos/photo8.jpg)"></div>
                            </div>
                        </div>
                        <div class="bottom-side">
                            <div class="half-photo" style="background-image: url(img/photos/photo10.jpg)"></div>
                            <div class="full-photo" style="background-image: url(img/photos/photo9.jpg)"></div>
                        </div>
                        <h2 class="photo-link">View all my photos on <a target="_blank" href="https://500px.com/p/stephenmiller04">500px</a>!</h2>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="footer-content">
                    <div class="polygon">
                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 186 1920 113">
                            <polygon points="0,300 655,210 1432,300 1920,198 1920,300 "></polygon>
                        </svg>
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