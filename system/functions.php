<?php
function cardDraw(string $cardClass, string $image, string $fullimage, string $title, string $desc, string $link, string $linkname) {
    echo "<div class=\"card $cardClass\">
        <div class=\"image\" data-picture=\"$fullimage\" style=\"background-image: url($image)\"></div>
        <div class=\"content\">
            <div class=\"rectangle-container\">
                <div class=\"triangle\"></div>
                <div class=\"rectangle\"></div>
            </div>
            <div class=\"text-bg\"></div>
            <div class=\"texts\">
                <h2>$title</h2>
                <p>$desc</p>";
                if (mb_strlen($link) > 2) {
                    echo "<a target=\"_blank\" href=\"$link\">$linkname</a>";
                }
            echo "</div>
        </div>
    </div>";
}

function photoDraw(string $link) {
    echo "<div class=\"photo\" style=\"background-image:url($link)\"></div>";
}

function sectionTitle(string $name, string $class) {
    echo "<div class=\"sub-title-container $class\">
        <h2>$name</h2><div class=\"triangle\"></div><div class=\"rectangle\"></div>
    </div>";
}

function createCardSection(string $title, string $class, $cards) {
    sectionTitle($title, $class);

    if (count($cards) % 3 == 0) {
        echo "<div class=\"card-container\">";
    } else if (count($cards) % 3 == 1) {
        echo "<div class=\"card-container last-one\">";
    } else if (count($cards) % 3 == 2) {
        echo "<div class=\"card-container last-two\">";
    }

    for ($i = 0; $i < count($cards); $i++) {
        cardDraw($cards[$i]["cardClass"], $cards[$i]["image"], $cards[$i]["fullimage"], $cards[$i]["title"], $cards[$i]["desc"], $cards[$i]["link"], $cards[$i]["linkname"]);
    }

    echo "</div>";
}
?>