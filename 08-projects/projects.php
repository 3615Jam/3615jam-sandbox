<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>### PROJECTS - PHP ###</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="projects-style.css" />
    <!-- <script src="projects.js" defer></script> -->
</head>

<body>
    <header>
        <nav class="m-5 d-flex justify-content-center">
            <div class="m-1 d-flex align-items-center">▶️</div>
            <div class="m-1 d-flex flex-column">
                <a href="projects.html" class="m-1 btn btn-outline-primary">PROJECTS - HTML</a>
                <a href="projects.php" class="m-1 btn btn-info disabled">PROJECTS - PHP</a>
                <a href="cards.html" class="m-1 btn btn-outline-success">CARDS STYLES</a>
            </div>
        </nav>
    </header>
    <main>
        <!-- LIGHT MODE SECTION -->
        <section id="light_mode" class="m-5 d-flex flex-wrap justify-content-center">
            <?php
            // on récup le json des projets
            $projects = file_get_contents("projects.json");
            // on le décode 
            $proj_details = json_decode($projects, true);
            // test pour confirmer les données récupérées 
            // var_dump($proj_details);
            // pour chaque projets, on crée une carte et on la rempli avec les valeurs du json
            foreach ($proj_details as $key_proj => $val_proj) {
                // test pour confirmer les données récupérées 
                // echo $key_proj . " : " . $val_proj['name'] . "<br />";
                $proj_card = '
                <div class="card text-center m-3 bg-light text-dark" style="max-width: 18rem">
                    <div class="card-header"><img src="../img/3615jam-320-bigborder.png" class="card-img-top" /></div>
                    <div class="card-body">
                        <h5 class="card-title">' . $val_proj['name'] . '</h5>
                        <p class="card-text">
                ';
                // on crée des 'pills' colorées pour chaque techno utilisée dans chaque projet et on les rajoute à la carte
                foreach ($val_proj['techno'] as $key_tech => $val_tech) {
                    // test pour confirmer les données récupérées 
                    // echo $val_tech;
                    switch ($val_tech) {
                        case "HTML":
                            $pill = "primary";
                            break;
                        case "CSS":
                            $pill = "success";;
                            break;
                        case "JS":
                            $pill = "warning";;
                            break;
                        case "PHP":
                            $pill = "info";;
                            break;
                        case "MySQL":
                            $pill = "secondary";;
                            break;
                        default:
                            echo "Bizarre, il semble qu'aucune techno n'ait été utilisée sur ce projet.";
                    }
                    $proj_card .= '<span class="m-1 badge rounded-pill bg-' . $pill . '">' . $val_tech . '</span>';
                }
                // on finalise la carte avec la description du projet 
                $proj_card .= '
                </p>
                <p class="card-text description">' . $val_proj['description'] . '</p>
                </div>
                </div>
                ';
                // on affiche la carte complète 
                echo $proj_card;
            }
            ?>
        </section>
    </main>
    <footer></footer>
</body>

</html>