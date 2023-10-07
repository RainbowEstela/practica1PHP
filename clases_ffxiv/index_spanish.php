<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">
    <title>final fantasy xiv - clases</title>
</head>
<body>
    <header class="cgrey p20px opposite g20px nomargin">
        <a href="./index.php" class="notextdec">
        <div class="flexlnowrap">
            <img src="./img/logo.png" alt="" width="100px">
            <p class="cblue nomargin">
                Final Fantasy XIV
            </p>
        </div>
        </a>
        <div class="flexsolo wrap g20px">
            <div class="flexsolo g10px">
                <a href="./index_spanish.php"><img src="./img/spain.jpg" width="30px" height="30px" alt="" class="b50per"></a>
                <a href="./index.php"><img src="./img/english.png" width="30px" height="30px" alt="" class="b50per"></a>
            </div>
            

            <form action="" class="flexsolo">
                <input type="text" placeholder="Buscar..." class="searchbardec p10px">
                <button type="submit" class="searchbutdec p10px">Buscar</button>
            </form>
        </div>
    </header>
    <nav class="sticky">
        <ul class="flexlgap5px p10px nolistdec cgrey nomargin">
            <li><a href="#paladin" class="cWhite">paladín</a></li>
            <li><a href="#warrior" class="cWhite">guerrero</a></li>
            <li><a href="#whitemage" class="cWhite">mago blanco</a></li>
            <li><a href="#scholar" class="cWhite">herudito</a></li>
            <li><a href="#machinist" class="cWhite">mecánico</a></li>
            <li><a href="#summoner" class="cWhite">invocador</a></li>
        </ul>
    </nav>

    <section>
    
    <?php
        // Escritura de los datos
        $personajes = [
            [//PALADIN
                "id" => 1,
                "linkName" => "paladin", 
                "className" => "PaladÍn",
                "description" => "Paladín es un tanque basado en el daño cuerpo a cuerpo y hechizos. tambien tiene habilidades de utilidad para ayudar a los compañeros.",
                "charImg" => "./img/Paladin.webp",
                "background" =>"alamingo",
                "abilities" => [
                    [
                        "name" => "Riot Blade",
                        "img" => "./img/habilitys/paladin/000156.png"
                    ],

                    [
                        "name" => "Circle of Scorn",
                        "img" => "./img/habilitys/paladin/000161.png"
                    ],

                    [
                        "name" => "Bulwark",
                        "img" => "./img/habilitys/paladin/000167.png"
                    ],

                    [
                        "name" => "Goring Blade",
                        "img" => "./img/habilitys/paladin/002506.png"
                    ],

                    [
                        "name" => "Clemency",
                        "img" => "./img/habilitys/paladin/002509.png"
                    ],

                    [
                        "name" => "Passage of Arms",
                        "img" => "./img/habilitys/paladin/002515.png"
                    ]
                ]
            ],

            [//WHITE MAGE
                "id" => 3,
                "linkName" => "whitemage", 
                "className" => "Mago Blanco",
                "description" => "Mago blanco es un curandero basado en la cura pura con mucho daño directo.",
                "charImg" => "./img/White_Mage.webp",
                "background" =>"alamingocas",
                "abilities" => [
                    [
                        "name" => "Aero",
                        "img" => "./img/habilitys/white_mage/000401.png"
                    ],

                    [
                        "name" => "Stone",
                        "img" => "./img/habilitys/white_mage/000403.png"
                    ],

                    [
                        "name" => "Cure",
                        "img" => "./img/habilitys/white_mage/000405.png"
                    ],

                    [
                        "name" => "Cure II",
                        "img" => "./img/habilitys/white_mage/000406.png"
                    ],

                    [
                        "name" => "Regen",
                        "img" => "./img/habilitys/white_mage/002628.png"
                    ],

                    [
                        "name" => "Holy",
                        "img" => "./img/habilitys/white_mage/002629.png"
                    ]
                ]
            ],

            [//MACHINIST
                "id" => 5,
                "linkName" => "machinist", 
                "className" => "Mecánico",
                "description" => "Mecánico es un dps de daño físico a distancia que usa pistolas y robots para pelear.",
                "charImg" => "./img/Machinist.webp",
                "background" =>"azisteppe",
                "abilities" => [
                    [
                        "name" => "Slug Shot",
                        "img" => "./img/habilitys/machinist/003002.png"
                    ],

                    [
                        "name" => "Hot Shot",
                        "img" => "./img/habilitys/machinist/003003.png"
                    ],

                    [
                        "name" => "Spread Shot",
                        "img" => "./img/habilitys/machinist/003014.png"
                    ],

                    [
                        "name" => "Flamethrower",
                        "img" => "./img/habilitys/machinist/003038.png"
                    ],

                    [
                        "name" => "Detonator",
                        "img" => "./img/habilitys/machinist/003039.png"
                    ],

                    [
                        "name" => "Crowned Collider",
                        "img" => "./img/habilitys/machinist/003047.png"
                    ]
                ]
            ],

            [//WARRIOR
                "id" => 2,
                "linkName" => "warrior", 
                "className" => "Guerrero",
                "description" => "Guerrero es un tanque basado en aguante y gran daño directo.",
                "charImg" => "./img/Warrior.webp",
                "background" =>"limsalominsa",
                "abilities" => [
                    [
                        "name" => "Storm's Eye",
                        "img" => "./img/habilitys/warrior/000264.png"
                    ],

                    [
                        "name" => "Raw Intuition",
                        "img" => "./img/habilitys/warrior/002559.png"
                    ],

                    [
                        "name" => "Equilibrium",
                        "img" => "./img/habilitys/warrior/002560.png"
                    ],

                    [
                        "name" => "Inner Release",
                        "img" => "./img/habilitys/warrior/002564.png"
                    ],

                    [
                        "name" => "Chaotic Cyclone",
                        "img" => "./img/habilitys/warrior/002566.png"
                    ],

                    [
                        "name" => "Inner Chaos",
                        "img" => "./img/habilitys/warrior/002568.png"
                    ]
                ]
            ],

            [//SCHOLAR
                "id" => 4,
                "linkName" => "scholar", 
                "className" => "Herudito",
                "description" => "Herudito es un curandero basado en escudos que usa hadas para curar",
                "charImg" => "./img/Scholar.webp",
                "background" =>"mordhona",
                "abilities" => [
                    [
                        "name" => "Bio",
                        "img" => "./img/habilitys/scholar/000503.png"
                    ],

                    [
                        "name" => "Aetherflow",
                        "img" => "./img/habilitys/scholar/000510.png"
                    ],

                    [
                        "name" => "Physick",
                        "img" => "./img/habilitys/scholar/000518.png"
                    ],

                    [
                        "name" => "Dissipation",
                        "img" => "./img/habilitys/scholar/002810.png"
                    ],

                    [
                        "name" => "Aetherpact",
                        "img" => "./img/habilitys/scholar/002816.png"
                    ],

                    [
                        "name" => "Fey Illumination",
                        "img" => "./img/habilitys/scholar/002853.png"
                    ]
                ]
            ],

            [//SUMMONER
                "id" => 6,
                "linkName" => "summoner", 
                "className" => "Invocador",
                "description" => "Invocador es un mago que invoca dioses para luchar en su lugar.",
                "charImg" => "./img/Summoner.webp",
                "background" =>"gridania",
                "abilities" => [
                    [
                        "name" => "Ruin IV",
                        "img" => "./img/habilitys/summoner/002686.png"
                    ],

                    [
                        "name" => "Summon Bahamut",
                        "img" => "./img/habilitys/summoner/002691.png"
                    ],

                    [
                        "name" => "Enkindle Bahamut",
                        "img" => "./img/habilitys/summoner/002693.png"
                    ],

                    [
                        "name" => "Summon Ifrit II",
                        "img" => "./img/habilitys/summoner/002772.png"
                    ],

                    [
                        "name" => "Summon Titan II",
                        "img" => "./img/habilitys/summoner/002773.png"
                    ],

                    [
                        "name" => "Summon Garuda II",
                        "img" => "./img/habilitys/summoner/002774.png"
                    ]
                ]
            ],
        ];

        //ordenar el array
        array_multisort(array_column($personajes, 'id'),SORT_ASC,$personajes);

        //pintar los datos
        foreach($personajes as $personaje) {
            $direccion = "";

            if($personaje["id"] % 2 == 0) {
                $direccion = "gridcardreverse";
            } else {
                $direccion = "gridcard";
            }

            echo '
            <a name="'.$personaje["linkName"].'"></a>
            <div class="card bgsize '.$personaje["background"].'">
                <div class="insidecard '.$direccion.'">
                    <div class="titulo">
                        <h3 class="textcen fonttitulo">'.$personaje["className"].'</h3>
                    </div>

                    <div class="presentacion oppositecol bpresen descsize p20px">
                        <div>
                            <p>'.$personaje["description"].'</p>
                        </div>
                        <div class="gridhabilitys">
            ';

            foreach($personaje["abilities"] as $ability) {
                echo '
                <div class="flexsolo g5px justaligcen">
                    <img src="'.$ability["img"].'"  width="50px" alt="">
                    <p>'.$ability["name"].'</p>
                </div>
                ';
            }



            echo '
                        </div>
                    </div>

                    <div class="imgclase felxcen">
                        <img src="'.$personaje["charImg"].'" alt="">
                    </div>
            
                </div>
            </div>
            ';





        }

    ?>
     

    <footer class="cgrey oppositecol g40px">
        <div class="felxcen">
            <div>
                <h2 class="textcen textazulfoot">Sigue nuestras redes</h2>
                <div class="felxcen redes g10px">
                    <a href=""><img src="./img/redes/facebook.png" alt=""></a>
                    <a href=""><img src="./img/redes/gorjeo.png" alt=""></a>
                    <a href=""><img src="./img/redes/youtube.png" alt=""></a>
                    <a href=""><img src="./img/redes/instagram.png" alt=""></a>
                    <a href=""><img src="./img/redes/reddit.png" alt=""></a>
                </div>
            </div>
            
        </div>
        <div>
            <ul class="flexfooter nolistdec nomargin g40px p0px">
                <li>
                    <p class="textazulfoot">Comunidad</p>
                    <ul class="nolistdec nomargin p0px">
                        <li><a href="" class="cWhite">nuestro canal de discord</a></li>
                        <li><a href="" class="cWhite">Unete al juego</a></li>
                        <li><a href="" class="cWhite">Comparte ideas</a></li>
                    </ul>
                </li>
                <li>
                    <p class="textazulfoot">Ayuda</p>
                    <ul class="nolistdec nomargin p0px">
                        <li><a href="" class="cWhite">Feedback</a></li>
                        <li><a href="" class="cWhite">Mapa del sitio</a></li>
                        <li><a href="" class="cWhite">Contactanos</a></li>
                    </ul>
                </li>
                <li>
                    <p class="textazulfoot">Cuenta</p>
                    <ul class="nolistdec nomargin p0px">
                        <li><a href="" class="cWhite">Login</a></li>
                        <li><a href="" class="cWhite">Registrarse</a></li>
                        <li><a href="" class="cWhite">FAQ</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </footer>
    
</body>
</html>