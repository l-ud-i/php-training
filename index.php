<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <title>Introduction PHP - Exo 1</title>
</head>

<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 1</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a href="index.php" class="main-nav-link active">Entrainement</a></li>
                    <li><a href="exo2.php" class="main-nav-link">Donnez moi des fruits</a></li>
                    <li><a href="exo3.php" class="main-nav-link">Donnez moi de la thune</a></li>
                    <li><a href="exo4.php" class="main-nav-link">Donnez moi des fonctions</a></li>
                    <li><a href="exo5.php" class="main-nav-link">Netflix</a></li>
                    <li><a href="exo6.php" class="main-nav-link">Mini-site</a></li>
                </ul>
            </nav>
        </header>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Ecrivez la phrase suivante dans une balise HTML P en utilisant les 2 variables ci-dessous :</p>
            <p class="exercice-txt">"<i>Firstname</i> a obtenu <i>score</i> points à cette partie."</p>
            <div class="exercice-sandbox">
                <?php
                $firstname = "Michel";
                $score = 327;
                echo "<p>Hello my name is {$firstname} and my score is {$score} !</p>";

                ?>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des produits suivants et leurs prix.</p>
            <div class="exercice-sandbox">
                <?php
                $nameProduct1 = "arc";
                $priceProduct1 = 10.30;
                $nameProduct2 = "flèche";
                $priceProduct2 = 2.90;
                $nameProduct3 = "potion";
                $priceProduct3 = 5.20;
                echo "<ul>
                     <li>{$nameProduct1} {$priceProduct1}$ </li>
                     <li>{$nameProduct2} {$priceProduct2}$</li>
                     <li>{$nameProduct3} {$priceProduct3}$</li>
                     </ul>";

                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Calculer le montant total de la commande des produits ci-dessus avec les quantités ci-dessous et appliquez lui une remise de 10%.</p>
            <div class="exercice-sandbox">
                <?php
                $quantityProduct1 = 1;
                $quantityProduct2 = 10;
                $quantityProduct3 = 4;
                $totalProduct1 = $quantityProduct1 * $priceProduct1;
                $totalProduct2 = $quantityProduct2 * $priceProduct2;
                $totalProduct3 = $quantityProduct3 * $priceProduct3;
                $total = $totalProduct1 + $totalProduct2 + $totalProduct3;
                echo ($total * 0.9);

                ?>
            </div>
        </section>


        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Affichez le prix le plus élevé des 3 produits ci-dessus.</p>
            <div class="exercice-sandbox">
                <?php
                echo max($priceProduct1, $priceProduct2, $priceProduct3);
                ?>

            </div>
        </section>

        <!-- QUESTION 5 -->
        <?php

        $text1 = "Le marchand m'a vendu un arc et des flèches.";

        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Affichez dans une liste HTML le nom des produits de la question 2 qui sont présents dans la phrase : "<?= $text1 ?>"</p>
            <div class="exercice-sandbox">

                <?php
                echo "<ul>";
                if (str_contains($text1, $nameProduct1)) {
                    echo "<li>$nameProduct1</li>";
                }
                if (str_contains($text1, $nameProduct2)) {
                    echo "<li>$nameProduct2</li>";
                }
                if (str_contains($text1, $nameProduct3)) {
                    echo "<li>$nameProduct3</li>";
                }

                "</ul>";
                ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Parmis les scores suivants, affichez le prénom des joueurs qui ont obtenus entre 50 et 150 points.</p>
            <div class="exercice-sandbox">

                <?php
                $namePlayer1 = "Tim";
                $scorePlayer1 = 67;
                $namePlayer2 = "Morgan";
                $scorePlayer2 = 198;
                $namePlayer3 = "Hamed";
                $scorePlayer3 = 21;
                $namePlayer4 = "Camille";
                $scorePlayer4 = 134;
                $namePlayer5 = "Kevin";
                $scorePlayer5 = 103;
                if ($scorePlayer1 >= 50 && $scorePlayer1 <= 150) {
                    echo "<p>$namePlayer1</p>";
                }
                if ($scorePlayer2 >= 50 && $scorePlayer2 <= 150) {
                    echo "<p>$namePlayer2</p>";
                }
                if ($scorePlayer3 >= 50 && $scorePlayer3 <= 150) {
                    echo "<p>$namePlayer3</p>";
                }
                if ($scorePlayer4 >= 50 && $scorePlayer4 <= 150) {
                    echo "<p>$namePlayer4</p>";
                }
                if ($scorePlayer5 >= 50 && $scorePlayer5 <= 150) {
                    echo "<p>$namePlayer5</p>";
                }
                ?>

            </div>
        </section>


        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En réutilisant les scores de la question précédente, afficher le nom du joueur ayant obtenu le plus grand score.</p>
            <div class="exercice-sandbox">
                <?php

                $maxScore = max($scorePlayer1, $scorePlayer2, $scorePlayer3, $scorePlayer4, $scorePlayer5);

                if ($scorePlayer1 === $maxScore) {
                    echo "Le gagnant est : $namePlayer1";
                };

                if ($scorePlayer2 === $maxScore) {
                    echo "Le gagnant est : $namePlayer2";
                };

                if ($scorePlayer3 === $maxScore) {
                    echo "Le gagnant est : $namePlayer3";
                };

                if ($scorePlayer4 === $maxScore) {
                    echo "Le gagnant est : $namePlayer4";
                };

                if ($scorePlayer5 > $maxScore) {
                    echo "Le gagnant est : $namePlayer5";
                };

                ?>
            </div>
        </section>


        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Affichez le prénom du joueur le plus long en nombre de caractères.</p>
            <div class="exercice-sandbox">

                <?php
                $namePlayerLength1 = strlen($namePlayer1);
                $namePlayerLength2 = strlen($namePlayer2);
                $namePlayerLength3 = strlen($namePlayer3);
                $namePlayerLength4 = strlen($namePlayer4);
                $namePlayerLength5 = strlen($namePlayer5);

                $maxlength = max($namePlayerLength1, $namePlayerLength2, $namePlayerLength3, $namePlayerLength4, $namePlayerLength5);
                //     echo $maxlength;

                if ($scorePlayer1 === $maxlength) {
                    echo "le prénom du joueur le plus long est le prénom du joueur le plus long est : $namePlayer1";
                };

                if ($scorePlayer2 === $maxlength) {
                    echo "le prénom du joueur le plus long est : $namePlayer2";
                };

                if ($scorePlayer3 === $maxlength) {
                    echo "le prénom du joueur le plus long est : $namePlayer3";
                };

                if ($scorePlayer4 === $maxlength) {
                    echo "le prénom du joueur le plus long est : $namePlayer4";
                };

                if ($scorePlayer5 > $maxlength) {
                    echo "le prénom du joueur le plus long est : $namePlayer5";
                };

                ?>

            </div>
        </section>

        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Créer une variable $players ayant pour valeur un tableau multidimensionnel
                contenant toutes les données des joueurs avec leurs scores ci-dessus et leurs ages ci-dessous.</p>
            <ul class="exercice-txt">
                <li>Tim : 25 ans</li>
                <li>Morgan : 34 ans</li>
                <li>Hamed : 27 ans</li>
                <li>Camille : 47 ans</li>
                <li>Kevin : 31 ans</li>
            </ul>
            <p class="exercice-txt">Afficher la valeur de cette variable avec tous les détails.</p>
            <div class="exercice-sandbox">
                <?php

                $players = [
                    ["name" => "Tim", "age" => 25, "score" => 67],
                    ["name" => "Morgan", "age" => 34, "score" => 198],
                    ["name" => "Hamed", "age" => 27, "score" => 21],
                    ["name" => "Camille", "age" => 47, "score" => 134],
                    ["name" => "Kevin", "age" => 31, "score" => 103]
                ];
                var_dump($players);

                ?>
            </div>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le prénom et l'âge du joueur le plus jeune dans une phrase dans une balise HTML P.</p>
            <div class="exercice-sandbox">
                <?php

                $ageYounger = 1000;
                for($i = 0; $i < sizeof($players); $i++) {
                    if($players[$i]['age'] < $ageYounger) {
                        $ageYounger = $players[$i]['age'];
                        $nameYounger = $players[$i]['name'];
                    }
                }
                echo "<p>Le joueur le plus jeune est $nameYounger et son age est $ageYounger</p>";

                $ageYounger2 = $players[0]['age'];

                foreach($players as $player) {
                    if ($player['age'] <= $ageYounger2) {
                        $ageYounger2 = $player['age'];
                        $nameYounger2 = $player['name'];
                    }
                };
                echo "<p>Le plus jeune joueur est $nameYounger2 et son age est $ageYounger2</p>";

                ?>
            </div>
        </section>
    </div>
    <div class="copyright">© Guillaume Belleuvre, 2023 - DWWM</div>
</body>

</html>