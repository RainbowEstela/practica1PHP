<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/styles.css">
    <title>Compra</title>
</head>
<body>
    <header class="opposite cblue p10">
        <div class="flexl">
            <div>
                <img src="./img/tienda2.png" alt="logo" width="50px">
            </div>
            <div>
                <p class="fArial fLogo noMargin">Movistela</p>
            </div>
        </div>
        <nav class="flexl">
            <a href="#"><input type="button" value="tarea 1" class="fArial bBlanco"></a>
            <a href="#"><input type="button" value="tarea 2" class="fArial bBlanco"></a>
            <a href="#"><input type="button" value="tarea 3" class="fArial bBlanco"></a>
        </nav>
    </header>
    <main class="center ptod20">
    <?php
        //array de productos
        $carrito = [
            [
                "img" => "./img/iphone15.webp",
                "name" => "Iphone 15",
                "price" => 2500,
                "quantity" => 1,
                "ivaRed" => 0,
            ],

            [
                "img" => "./img/motorolaedge40.webp",
                "name" => "Motorola edge 40",
                "price" => 645,
                "quantity" => 3,
                "ivaRed" => 1,
            ],

            [
                "img" => "./img/realmec55.webp",
                "name" => "Realme c55",
                "price" => 430,
                "quantity" => 2,
                "ivaRed" => 1,
            ],

            [
                "img" => "./img/samsungga34.webp",
                "name" => "Samsung galaxy A34",
                "price" => 520,
                "quantity" => 5,
                "ivaRed" => 0,
            ],

            [
                "img" => "./img/spczeus.webp",
                "name" => "Spc zeus",
                "price" => 130,
                "quantity" => 10,
                "ivaRed" => 1,
            ],

            [
                "img" => "./img/sansungs23.webp",
                "name" => "samsung Galaxy S23",
                "price" => 350,
                "quantity" => 7,
                "ivaRed" => 1,
            ],

        ];

        //pintar tabla

        //cabeza de la tabla
        echo '<table class="center fArial tableBlue">';
        echo    '<thead>';
        echo        '<tr>';
        echo            '<th>';
        echo                'linea';
        echo            '</th>';
        
        echo            '<th>';
        echo                'imagen';
        echo            '</th>';

        echo            '<th>';
        echo                'nombre';
        echo            '</th>';

        echo            '<th>';
        echo                'precio';
        echo            '</th>';

        echo            '<th>';
        echo                'cantidad';
        echo            '</th>';
        echo        '</tr>';
        echo    '</thead>';
        
        echo    '<thead>';
        //cuerpo de la tabla

        $numLinea = 1;
        $totalSinIva = 0;
        $totalConIva = 0;
        //iva    0    1
        $iva = [0.21,0.1];
        
        foreach($carrito as $producto) {
            echo '
            <tr>
                <th>'.$numLinea++.'</th>
                <td class="centerFlex"><img src='.$producto["img"].' alt="" width="100px"></td>
                <td>'.$producto["name"].'</td>
                <td class="textCenter">'.$producto["price"].'€</td>
                <td class="textCenter">'.$producto["quantity"].'</td>
            </tr>
            ';

            $totalSinIva += $producto["price"];
            $totalConIva += $producto["price"] + ($producto["price"] * $iva[$producto["ivaRed"]]);
        }

        echo    '</thead>';
        //pie de la tabla
        echo '
        <tfoot>
            <tr>
                <td colspan="4" class="textder textresaltado">precio sin iva:</td>
                <td>'.$totalSinIva.'€</td>
            </tr>
            <tr>
                <td colspan="4" class="textder textresaltado">precio con iva:</td>
                <td>'.$totalConIva.'€</td>
            </tr>
        </tfoot>
        ';
        echo '</table>';
    
    
    ?>
    
      
    </main>
</body>
</html>