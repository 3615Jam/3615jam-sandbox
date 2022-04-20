/**
 * ==========================================
 * dark mode switch - V1
 * ==========================================
 */
const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
const lightSwitchV1 = document.getElementById("light_switch_0");
// const bottom = document.getElementById("bottom");

lightSwitchV1.addEventListener("click", function () {
    if (prefersDarkScheme.matches) {
        document.body.classList.toggle("light_theme");
        // bottom.classList.toggle("light_theme");
        lightSwitchV1.classList.toggle("light_theme");
    } else {
        document.body.classList.toggle("dark_theme");
        // bottom.classList.toggle("dark_theme");
        lightSwitchV1.classList.toggle("dark_theme");
    }
});

/**
 * ==========================================
 * dark mode switch - V2
 * ==========================================
 */
// const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
const lightSwitchV2 = document.getElementById("light_switch_v2");
const lightSwitchCheckbox = document.getElementById("light_switch_checkbox");
// const bottom = document.getElementById("bottom");

prefersDarkScheme.matches ? (lightSwitchCheckbox.checked = true) : false;

lightSwitchV2.addEventListener("change", function () {
    if (prefersDarkScheme.matches) {
        document.body.classList.toggle("light_theme");
        // bottom.classList.toggle("light_theme");
        lightSwitchV2.classList.toggle("light_theme");
    } else {
        document.body.classList.toggle("dark_theme");
        // bottom.classList.toggle("dark_theme");
        lightSwitchV2.classList.toggle("dark_theme");
    }
});

/**
 * ==========================================
 * dark mode switch - V3
 * ==========================================
 */
// const prefersDarkScheme = window.matchMedia("(prefers-color-scheme: dark)");
// const lightSwitchV3 = document.getElementById("light_switch_v3");
const flexSwitchCheckDefault = document.getElementById("flexSwitchCheckDefault");
// const bottom = document.getElementById("bottom");

prefersDarkScheme.matches ? (flexSwitchCheckDefault.checked = true) : false;

// lightSwitchV3.addEventListener("change", function () {
flexSwitchCheckDefault.addEventListener("change", function () {
    if (prefersDarkScheme.matches) {
        document.body.classList.toggle("light_theme");
        // bottom.classList.toggle("light_theme");
        // lightSwitchV3.classList.toggle("light_theme");
        flexSwitchCheckDefault.classList.toggle("light_theme");
    } else {
        document.body.classList.toggle("dark_theme");
        // bottom.classList.toggle("dark_theme");
        // lightSwitchV3.classList.toggle("dark_theme");
        flexSwitchCheckDefault.classList.toggle("dark_theme");
    }
});

window.matchMedia("(prefers-color-scheme: dark)").addEventListener("change", function (event) {
    event.matches ? (flexSwitchCheckDefault.checked = true) : (flexSwitchCheckDefault.checked = false);
    // console.log(flexSwitchCheckDefault.checked);
    // const newColorScheme = event.matches ? "dark" : "light";
    // console.log(newColorScheme);
});
