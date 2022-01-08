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
        <meta property="og:title" content="Stephen Miller">
        <meta property="og:type" content="website">
        <meta property="og:image" content="img/webdev/small/stephenmillerv3.jpg">
        <meta property="og:author" content="Stephen Miller">
        <meta property="og:description" content="Welcome to my personal site! My name is Stephen Miller. I'm a software developer, but I also do graphical stuff, making games and photography.">
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
                                    <div name="photo" data-photo="img/photos/photo1.jpg" class="big-picture" style="background-image: url(img/photos/photo1.jpg)"></div>
                                    <div class="right-pictures">
                                        <div name="photo" data-photo="img/photos/photo2.jpg" class="photo" style="background-image: url(img/photos/photo2.jpg)"></div>
                                        <div name="photo" data-photo="img/photos/photo3.jpg" class="photo" style="background-image: url(img/photos/photo3.jpg)"></div>
                                    </div>
                                </div>
                                <div class="landscape-photos">
                                    <div name="photo" data-photo="img/photos/photo6.jpg" class="photo" style="background-image: url(img/photos/photo6.jpg)"></div>
                                    <div name="photo" data-photo="img/photos/photo5.jpg" class="photo" style="background-image: url(img/photos/photo5.jpg)"></div>
                                </div>
                            </div>
                            <div class="right-side">
                                <div name="photo" data-photo="img/photos/photo4.jpg" class="half-photo" style="background-image: url(img/photos/photo4.jpg)"></div>
                                <div name="photo" data-photo="img/photos/photo7.jpg" class="full-photo" style="background-image: url(img/photos/photo7.jpg)"></div>
                                <div name="photo" data-photo="img/photos/photo8.jpg" class="half-photo" style="background-image: url(img/photos/photo8.jpg)"></div>
                            </div>
                        </div>
                        <div class="bottom-side">
                            <div name="photo" data-photo="img/photos/photo10.jpg" class="half-photo" style="background-image: url(img/photos/photo10.jpg)"></div>
                            <div name="photo" data-photo="img/photos/photo9.jpg" class="full-photo" style="background-image: url(img/photos/photo9.jpg)"></div>
                        </div>
                        <h2 class="photo-link">View all my photos on <a target="_blank" href="https://500px.com/p/stephenmiller04">500px</a>!</h2>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="polygon">
                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 186 1920 113">
                        <polygon points="0,300 655,210 1432,300 1920,198 1920,300 "></polygon>
                    </svg>
                </div>
                <div class="footer-content">
                    <div class="footer-center-content">
                        <img class="fox-logo" src="img/icons/foxlogo.svg"/>
                        <p class="footer-text">© <script type="text/javascript">document.write(new Date().getFullYear());</script> Stephen Miller</p>
                        <div class="footer-links">
                            <a target="_blank" href="https://github.com/stephenmiller04"><img src="img/icons/github.svg"/></a>
                            <a target="_blank" href="https://instagram.com/stephenmiller04"><img src="img/icons/instagram.svg"/></a>
                            <a target="_blank" href="https://500px.com/stephenmiller04"><img src="img/icons/500px.svg"/></a>
                            <a target="_blank" href="https://youtube.com/c/StephenMiller04"><img src="img/icons/youtube.svg"/></a>
                            <a href="mailto:stephenmiller997@gmail.com"><img src="img/icons/envelope.svg"/></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="picture_modal" class="full-screen-item-picture-modal" style="display: none;">
            <span class="loading-circle"></span>
            <img class="modal-img" id="modalimg" src="https://www.vulkancapa.hu/img/marketplace/17/item1.jpg">
        </div>
    </body>
    <script src="scripts/asciiMorph.js"></script>
    <script src="scripts/asciiArts.js"></script>
    <script src="scripts/background.js"></script>
    <script src="scripts/textLoader.js"></script>
    <script src="scripts/picturePreview.js"></script>
    <script src="scripts/base.js"></script>
</html>