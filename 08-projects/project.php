<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>### PROJECT XXX ###</title>
    <link rel="stylesheet" href="../../00-utilities/bootstrap/bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="projects-style.css" />
    <script src="projects.js" defer></script>
</head>

<body>
    <header>
        <nav class="m-5 d-flex justify-content-center">
            <div class="m-1 d-flex align-items-center">▶️</div>
            <div class="m-1 d-flex flex-column">
                <!-- <a href="projects.html" class="m-1 btn btn-outline-primary">PROJECTS - HTML</a> -->
                <a href="projects.php" class="m-1 btn btn-info">Back to PROJECTS - PHP</a>
                <!-- <a href="cards.html" class="m-1 btn btn-outline-success">CARDS STYLES</a> -->
            </div>
        </nav>
    </header>
    <main>
        <!-- LIGHT MODE SECTION -->
        <section id="light_mode" class="m-5 d-flex flex-wrap justify-content-center">

            <?php
            // --------------------------------------------------
            // on récup la liste des projets (json) et on la décode
            $projects = file_get_contents("projects.json");
            $proj_details = json_decode($projects, true);
            // test pour confirmer les données récupérées 
            // var_dump($proj_details[0]['logo']);
            // --------------------------------------------------
            // on récupère les infos du projet sélectionné à la page précédente ... 
            // ... pour ce faire, on utilise sa position dans le JSON ... 
            // ... qu'on fait transiter dans l'URL via la variable superglobale $_GET['proj_id'] ...
            // ... Si cette variable existe et qu'elle est inférieure à la longueur du JSON des projets ... 
            if (isset($_GET['proj_id']) && ($_GET['proj_id']) < count($proj_details)) {
                // ... alors on définit '$val_proj' qui contient les infos du projet sélectionné 
                $val_proj = $proj_details[($_GET['proj_id'])];
                // --------------------------------------------------
                // puis on crée une nouvelle carte avec les éléments de '$val_proj'
                $proj_card = '
                <div class="card text-center m-3 bg-light text-dark" style="width: 50%">
                    <div class="card-header"><img src="' . $val_proj['logo'] . '" class="card-img-top" alt="project logo" /></div>
                    <div class="card-body">
                        <h5 class="card-title m-3">' . $val_proj['name'] . '</a></h5>
                        <p class="card-text description">' . $val_proj['summary'] . '</p>
                        <p class="card-text description">' . $val_proj['description'] . '</p>
                        <p><a href="/projects/dwwm-samproject" class="m-1 btn btn-outline-info">Test lien externe</a></p>
                        <a href="' . $val_proj['link'] . '" class="m-1 btn btn-outline-primary">Voir le projet</a>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                ';
                // --------------------------------------------------
                // on boucle pour créer des 'pills' colorées pour chaque techno utilisée dans chaque projet 
                foreach ($val_proj['techno'] as $key_tech => $val_tech) {
                    // test pour confirmer les données récupérées 
                    // echo $val_tech;
                    switch ($val_tech) {
                        case "HTML":
                            $pill_color = "primary";
                            break;
                        case "CSS":
                            $pill_color = "success";
                            break;
                        case "JS":
                            $pill_color = "warning";
                            break;
                        case "PHP":
                            $pill_color = "info";
                            break;
                        case "MySQL":
                            $pill_color = "secondary";
                            break;
                        default:
                            echo "Oups ! Ceci n'est pas sensé arriver !";
                    }
                    // on ajoute chaque pill au bas de la carte 
                    $proj_card .= '<span class="m-1 badge rounded-pill bg-' . $pill_color . '">' . $val_tech . '</span>';
                }
                // --------------------------------------------------
                // on finalise la carte 
                $proj_card .= '
                        </div>
                    </div>
                </div>
                ';
                // on affiche la carte complétée 
                echo $proj_card;
                // --------------------------------------------------
            } else {
                // sinon on affiche un message d'erreur 
                echo ("Oups !!! Quelque chose ne s'est pas bien passé !!!");
            }

            ?>

        </section>
    </main>
    <footer></footer>
</body>

</html>