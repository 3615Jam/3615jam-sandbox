<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>### PROJECTS ###</title>
    <link rel="stylesheet" href="../bootstrap-5.1.3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="projects-style.css" />
    <!-- <script src="projects.js" defer></script> -->
</head>

<body>
    <header></header>
    <main>
        <section class="m-5 d-flex flex-wrap justify-content-center">
            <a href="cards.html" class="btn btn-success">CARDS STYLES</a>
        </section>
        <!-- LIGHT MODE SECTION -->
        <section id="light_mode" class="m-5 d-flex flex-wrap justify-content-center">
            <?php
            // on récup le json des projets
            $projects = file_get_contents("projects.json");
            // on le décode 
            $proj_details = json_decode($projects, true);
            // test pour confirmer les données récupérées 
            var_dump($proj_details);
            // pour chaque projets, on crée une carte et on la rempli avec les valeurs du json
            foreach ($proj_details as $key_proj => $val_proj) {
                // test pour confirmer les données récupérées 
                // echo $key . " : " . $val['name'] . "<br />";
                // foreach ($val_proj['techno'] as $key_tech => $val_tech) {
                // test pour confirmer les données récupérées 
                // echo $key_tech . " : " . $val_tech . "<br />";
                // }
                // if (in_array("HTML", $val_proj['techno'])) {
                //     $pill = "<span class=\"badge rounded-pill bg-primary\">HTML</span>";
                // }


                $proj_card = '
                <div class="card text-center m-3 bg-light text-dark" style="max-width: 18rem">
                    <div class="card-header"><img src="../img/3615jam-320-bigborder.png" class="card-img-top" /></div>
                    <div class="card-body">
                        <h5 class="card-title">' . $val_proj['name'] . '</h5>
                        <p class="card-text">
                ';
                foreach ($val_proj['techno'] as $key_tech => $val_tech) {
                    echo $val_tech;
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
                    $proj_card .= '<span class="badge rounded-pill bg-' . $pill . '">' . $val_tech . '</span>';
                }
                $proj_card .= '
                </p>
                <p class="card-text description">' . $val_proj['description'] . '</p>
                </div>
                </div>';







                echo $proj_card;
            }
            ?>
        </section>
    </main>
    <footer></footer>
</body>

</html>