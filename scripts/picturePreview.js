var modal = document.getElementById("picture_modal");
var card_img = document.getElementsByClassName("image");
var photo_img = document.getElementsByName("photo");
var modalImg = document.getElementById("modalimg");
var body = document.getElementsByTagName("body")[0];

for (var i = 0; i < card_img.length; i++) {
    card_img[i].onclick = function () {
        modal.style.display = "flex";
        modalImg.src = this.getAttribute("data-picture");
        body.style.overflow = "hidden";
    }
}

for (var i = 0; i < photo_img.length; i++) {
    photo_img[i].onclick = function () {
        modal.style.display = "flex";
        modalImg.src = this.getAttribute("data-photo");
        body.style.overflow = "hidden";
    }
}

var close = document.getElementById("picture_modal");
close.onclick = function () {
    body.style.overflow = "auto";
    modal.style.display = "none";
}