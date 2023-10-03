<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Catalogo</title>
</head>
<body>
    <header class="opposite cyellow p10">
        <div class="flexl">
            <div>
                <img src="./img/logo.png" alt="logo" width="50px">
            </div>
            <div>
                <p class="fArial fLogo noMargin">Stellar</p>
                <p class="fArial fLogo noMargin">Gallery</p>
            </div>
        </div>
        <nav class="flexl">
            <a href="../carrito_compra_ejercicio1/index.php"><input type="button" value="tarea 1" class="fArial bnegro"></a>
            <a href="../libreria_ejercicio2/index.php"><input type="button" value="tarea 2" class="fArial bnegro"></a>
            <a href="#"><input type="button" value="tarea 3" class="fArial bnegro"></a>
        </nav>
    </header>

    <main class="center">
        <?php
            //declaracion array de libros
            $libros = [
                [
                    "isbn" => 1111111111111,
                    "titulo" => "Abstract art",
                    "descripcion" => "Uno de los mejores libros para aprender arte abstracto.",
                    "categoria" => "arte",
                    "editorial" => "miqotil",
                    "foto" => "./img/1111111111111.jpg",
                    "precio" => 12.45
                ],

                [
                    "isbn" => 1111111111112,
                    "titulo" => "100 animales",
                    "descripcion" => "Un maravilloso e inspirador libro de animales para colorear.",
                    "categoria" => "arte",
                    "editorial" => "pururú",
                    "foto" => "./img/1111111111112.webp",
                    "precio" => 10.50
                ],

                [
                    "isbn" => 1111111111113,
                    "titulo" => "Pollock",
                    "descripcion" => "autobiografia del gran pintor Leonard Fameeling.",
                    "categoria" => "arte",
                    "editorial" => "book and meow",
                    "foto" => "./img/1111111111113.webp",
                    "precio" => 15.60
                ],

                [
                    "isbn" => 1111111111114,
                    "titulo" => "Pop art",
                    "descripcion" => "1000 ilustraciones sobre arte pop.",
                    "categoria" => "arte",
                    "editorial" => "book and meow",
                    "foto" => "./img/1111111111114.webp",
                    "precio" => 15.60
                ],

                [
                    "isbn" => 1111111111115,
                    "titulo" => "Warhol",
                    "descripcion" => "Recopilación de las fantásticas lecciones sobre fotografia de Klaus Honref.",
                    "categoria" => "arte",
                    "editorial" => "book and meow",
                    "foto" => "./img/1111111111115.webp",
                    "precio" => 15.60
                ],

                [
                    "isbn" => 2111111111111,
                    "titulo" => "El aprendiz de herborista",
                    "descripcion" => "un joven elfo emprende un viaje por un fantástico mundo en busca de ser el mejor herborista.",
                    "categoria" => "cifi",
                    "editorial" => "fantasy cats",
                    "foto" => "./img/2111111111111.webp",
                    "precio" => 18.90
                ],

                [
                    "isbn" => 2111111111112,
                    "titulo" => "¿A qué sabe la luna?",
                    "descripcion" => "La luna sabe obviamente a queso, todo el mundo lo sabe.",
                    "categoria" => "cifi",
                    "editorial" => "moon sleep",
                    "foto" => "./img/2111111111112.webp",
                    "precio" => 17.14
                ],

                [
                    "isbn" => 2111111111113,
                    "titulo" => "Cronicas de la torre I",
                    "descripcion" => "El poderoso mago Gondolf se adentra en lo mas alto de la mas alta torre en busca del cocimmiento infinito.",
                    "categoria" => "cifi",
                    "editorial" => "murmurillos",
                    "foto" => "./img/2111111111113.webp",
                    "precio" => 18.14
                ],

                [
                    "isbn" => 2111111111114,
                    "titulo" => "El sendero del especialista",
                    "descripcion" => "Un joven cazador se gana la vida cazando animales místicos.",
                    "categoria" => "cifi",
                    "editorial" => "huellas lectoras",
                    "foto" => "./img/2111111111114.webp",
                    "precio" => 15.99
                ],

                [
                    "isbn" => 2111111111115,
                    "titulo" => "susurros",
                    "descripcion" => "Una princesa y su sirvienta indagan en la antigua mansión maldita de su familia.",
                    "categoria" => "cifi",
                    "editorial" => "platiojos",
                    "foto" => "./img/2111111111115.webp",
                    "precio" => 13.75
                ],

                [
                    "isbn" => 3111111111111,
                    "titulo" => "De amor y de guerra",
                    "descripcion" => "Historia de amor separada por la segunda guerra mundial.",
                    "categoria" => "historia",
                    "editorial" => "murmurillos",
                    "foto" => "./img/3111111111111.webp",
                    "precio" => 17.14
                ],

                [
                    "isbn" => 3111111111112,
                    "titulo" => "El quinto nombre",
                    "descripcion" => "Anecdotas trágicas de la guerra franquista.",
                    "categoria" => "historia",
                    "editorial" => "miqotil",
                    "foto" => "./img/3111111111112.webp",
                    "precio" => 12.89
                ],

                [
                    "isbn" => 3111111111113,
                    "titulo" => "Fake News de la Roma",
                    "descripcion" => "propaganda, engaños y mentiras de la Roma de hace 2000 años.",
                    "categoria" => "historia",
                    "editorial" => "curious cats",
                    "foto" => "./img/3111111111113.webp",
                    "precio" => 15.51
                ],

                [
                    "isbn" => 3111111111114,
                    "titulo" => "La nobleza negra",
                    "descripcion" => "Descubra como se creó el imperio veneciano.",
                    "categoria" => "historia",
                    "editorial" => "history and you",
                    "foto" => "./img/3111111111114.webp",
                    "precio" => 10.99
                ],

                [
                    "isbn" => 3111111111115,
                    "titulo" => "Los Romanov",
                    "descripcion" => "Repaso de la historia de la casa Romanov.",
                    "categoria" => "historia",
                    "editorial" => "history and you",
                    "foto" => "./img/3111111111115.webp",
                    "precio" => 17.14
                ],

            ];

            shuffle($libros);

            $categorias = ["arte", "cifi", "historia"];


            foreach($categorias as $categoria) {
                echo '
                <h1 class="textCenter text50px">
                    Libros de '.$categoria.'
                </h1>
                ';
                echo '<section class="flexlwrap">';
                $cuatroPrimeros = [];
                //elegir los cuatro primeros libros de la categoria actual
                foreach($libros as $libro) {
                    if($libro["categoria"] == $categoria && count($cuatroPrimeros) < 4) {
                        array_push($cuatroPrimeros,$libro);
                    }
                }

                //pintar cada carta
                foreach($cuatroPrimeros as $libro) {

                    echo'
                    <div class="card fArial">
                        <div class="centerFlex">
                            <img src='.$libro["foto"].' alt="" height="150px">
                        </div>
                        <div>
                            <h3 class="textCenter">'.$libro["titulo"].'</h3>
                            <p class="justify min4em">
                                '.$libro["descripcion"].'
                            </p>
                            <p class="colorgris">
                                '.$libro["editorial"].'
                            </p>
                        </div>
                        <div class="centerFlex">
                            <a href="#"><input type="button" value="añadir al carro - '.$libro["precio"].'€" class="fArial bnegro"></a>
                        </div>
                    </div>                    
                    ';
                }
                echo '</section>';

            }
        
        ?>
    </main>
</body>
</html>