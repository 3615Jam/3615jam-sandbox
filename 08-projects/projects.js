// ----------[ récupération du json des projets ]----------
fetch("projects.json")
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        console.log(data);
        data.forEach((proj) => {
            // vérif des données reçues #1
            // let project_title = data[0].name;
            // console.log(project_title);
            // vérif des données reçues #2
            // console.log(proj);
            // vérif des données reçues #3
            // console.log(proj.link);
        });
    })
    .catch(function (err) {
        console.log("Something went wrong!", err);
    });
// ----------------------------------------------
// ci-dessous, même code en notation fléchée :
// fetch("projects.json")
//     .then((res) => res.json())
//     .then((data) => console.log(data));

// puis on affiche les données reçues :
// document.getElementById("test_title").textContent = project_title;

// ----------[ test - clic sur cartes de projet ]----------
function jamtest() {
    console.log("Hello jamtest ! Tu es là ;)");
}

let cards = document.querySelectorAll(".card");
// vérif des données reçues #1
// console.log(cards);
cards.forEach((card) => {
    card.addEventListener("click", jamtest);
});
