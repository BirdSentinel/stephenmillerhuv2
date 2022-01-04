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

var webdev_section = document.getElementsByClassName("sub-title-container")[0];

window.onscroll = function () {
    if (checkVisible(webdev_section)) {
        cardLoop("card webdev", 0);
    }
};