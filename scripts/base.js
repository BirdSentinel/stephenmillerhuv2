var element = document.querySelector('pre');
AsciiMorph(element, {
    x: 50,
    y: 25
});
AsciiMorph.render(asciis[0]);

function cardLoop(classname, i) {
    setTimeout(function () {
        document.getElementsByClassName(classname)[i].children[0].style.marginTop = "0px";
        document.getElementsByClassName(classname)[i].children[1].style.marginTop = "-16px";
        i++;
        if (i < document.getElementsByClassName(classname).length) {
            cardLoop(classname, i);
        }
    }, 200)
}

function checkVisible(elm) {
    var rect = elm.getBoundingClientRect();
    var viewHeight = Math.max(document.documentElement.clientHeight, window.innerHeight);
    return !(rect.bottom < 0 || rect.top - viewHeight + 400 >= 0);
}

var webdev_section = document.getElementsByClassName("sub-title-container webdev")[0];
var games_section = document.getElementsByClassName("sub-title-container games")[0];
var other_section = document.getElementsByClassName("sub-title-container other")[0];
var scrollTop;

window.onscroll = function () {
    scrollTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
    if (checkVisible(webdev_section)) {
        cardLoop("card webdev", 0);
    }
    if (checkVisible(games_section)) {
        cardLoop("card game", 0);
    }
    if (checkVisible(other_section)) {
        cardLoop("card other", 0);
    }
};