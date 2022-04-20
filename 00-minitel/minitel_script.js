/**
 * ==========================================
 * Modifier image de fond minitel au survol des boutons "dev" et "apple"
 * ==========================================
 */
let image = document.getElementById("main_pix");
let start = image.src;
document.getElementById("dev").onmousemove = function () {
    image.src = "../img/logo_pixel_dev.png";
};
document.getElementById("dev").onmouseout = function () {
    image.src = start;
};
document.getElementById("apple").onmousemove = function () {
    image.src = "../img/logo_pixel_apple.png";
};
document.getElementById("apple").onmouseout = function () {
    image.src = start;
};
