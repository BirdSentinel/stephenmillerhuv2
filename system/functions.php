<?php
function cardDraw(string $cardClass, string $image, string $title, string $desc, string $link, string $linkname) {
    echo "<div class=\"card $cardClass\">
        <div class=\"image\" style=\"background-image: url($image)\"></div>
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

function cardTitle(string $name) {
    echo "<div class=\"sub-title-container\">
        <h2>$name</h2><div class=\"triangle\"></div><div class=\"rectangle\"></div>
    </div>";
}
?>