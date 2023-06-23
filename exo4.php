<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 4</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 4</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link active">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau
                et retourne la chaîne de caractère HTML permettant d'afficher les valeurs
                du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">

                <?php

                /**
                 * Return every value from array in HTML List
                 * 
                 * @param array $array - input array
                 * @return string - HTML list
                 */

                // function getListFromArray(array $array): string
                // {
                //     $htmlList = '';
                //     foreach ($array as $item) {
                //         $htmlList .= "<li>$item</li>";
                //     }
                //     return "<ul>$htmlList</ul>";
                // }
                // echo getListFromArray($array);

                function getListFromArray(array $array): string
                {
                    $a = array_map(fn ($value) => "<li>$value</li>", $array);
                    return '<ul>' . implode('', $a) . '</ul>';
                }
                echo getListFromArray($array);


                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">

                <?php

                // function getEvenFromArray(array $array): array
                // {
                //     $arrayEven = [];
                //     foreach ($array as $value) {
                //         if ($value % 2 == 0) {
                //             $arrayEven[] = $value;
                //         }
                //     }
                //     return $arrayEven;
                // }
                // $evenValues = getEvenFromArray($array);
                // echo getListFromArray($evenValues);


                function getEvenFromArray(array $array): array
                {
                    $b = array_filter($array, function ($valu) {
                        return $valu % 2 === 0;
                    });
                    return $b;
                }
                $evenValues2 = getEvenFromArray($array);
                var_dump(getEvenFromArray($evenValues2));

                ?>

            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">

                <?php
                // function getEvenIndexFromArray(array $array): array
                // {
                //     $arrayIndex = [];
                //     foreach ($array as $index => $value) {
                //         if ($index % 2 == 0) {
                //             $arrayIndex[] = $value;
                //         }
                //     }
                //     return $arrayIndex;
                // }
                // $evenIndex = getEvenIndexFromArray($array);
                // echo getListFromArray($evenIndex);

                function getEvenIndexFromArray(array $array): array
                {
                    $evenIndexes = array_filter($array, function ($val) {
                        return $val % 2 === 0;
                    }, ARRAY_FILTER_USE_KEY);
                    return $evenIndexes;
                }
                $evenIdx = getEvenIndexFromArray($array);
                echo getListFromArray($evenIdx);


                ?>
            </div>

        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">

                <?php
                function getMultiplyBy2(array $array): array {
                    $arrayDouble = [];
                    foreach ($array as $value) {
                        $arrayDouble[] = $value * 2;
                    }
                    return $arrayDouble;
                }
                
                var_dump(getMultiplyBy2($array));


                // $double = array_map(fn($value) => $value * 2, $array);
                // var_dump($double);
                ?>
            </div>


        </section>

        <!-- QUESTION 4 bis -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau 
                d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">

            <?php
            function divideArray(array $array, int $number): array {
                $newArray = [];
                foreach ($array as $values2) {
                    $newArray[] = $values2 / $number;
                }
                return $newArray;
            }

            var_dump(divideArray($array, 2));
            
            ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">

                <?php
                function getUnique(array $arrayA): array {
                    return array_unique($arrayA);
                }

                var_dump(getUnique($arrayA));

                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">

            <?php
            function getIntersect(array $arrayA, array $arrayB): array {
                    return array_intersect($arrayA, $arrayB);
                }

                var_dump(getIntersect($arrayA, $arrayB));
            ?>

            </div>            
        </section>

        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et 
                retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">

            <?php
            function getDiffrences(array $arrayA, array $arrayB): array {
                $arrayDiff = array_diff($arrayA, $arrayB);
                return $arrayDiff;
            }

            $arrayVersus = getDiffrences($arrayA, $arrayB);
            var_dump($arrayVersus);
            ?>

            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre 
                booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">
            <?php

            function getDifferences(array $arrayA, array $arrayB, bool $isset = true): array {
                if($isset === true) {
                    $arrayDiff = array_diff($arrayA, $arrayB);
                    return $arrayDiff;
                }
                else {
                    return $arrayA;
                }
            }

            $isset = true;
            var_dump(getDifferences($arrayA, $arrayB, $isset));
            ?>

            </div>
        </section>


        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et 
                un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">
                
            <?php

                function getFirstElements(array $array, int $offset, int $length): array {
                    return array_slice($array, $offset, $length);
                     
                }

                var_dump(getFirstElements($array, 0, 1));

            ?>

            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>