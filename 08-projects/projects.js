fetch("projects.json")
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        console.log(data);
        data.forEach((proj) => {
            // let project_title = data[0].name;
            // console.log(project_title);
            console.log(proj.name);
        });
    })
    .catch(function (err) {
        console.log("Something went wrong!", err);
    });

// Ci-dessous, même code en notation fléchée :
// fetch("projects.json")
//     .then((res) => res.json())
//     .then((data) => console.log(data));

// document.getElementById("test_title").textContent = project_title;
