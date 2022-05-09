<?php
$listeSortesCarte = ["carreau", "trêfle", "coeur", "pique"];
$jeuDeCartes = [];
for ($i = 0, $iMax = count($listeSortesCarte); $i < $iMax; $i++) {
    for ($j = 1; $j <= 13; $j++) {
        $jeuDeCartes[] = $j."-".$listeSortesCarte[$i];
    }
}

//for ($i = 0; $i <= 51; $i++) {
//    echo "indice : $i, carte : $jeuDeCartes[$i]<br>";
//}

$moitieJeuDeCartes1 = [];
$moitieJeuDeCartes2 = [];

for ($i = 0; $i <= 25; $i++) {
    $moitieJeuDeCartes1[] = $jeuDeCartes[$i];
//    echo $moitieJeuDeCartes1[$i]."<br>";
}

for ($i = 26; $i <= 51; $i++) {
    $moitieJeuDeCartes2[] = $jeuDeCartes[$i];
//    echo $moitieJeuDeCartes2[$i - 26]."<br>";
}

$jeuDeCartesMelanges = [];
for ($i = 0; $i <= 25; $i++) {
    $jeuDeCartesMelanges[] = $moitieJeuDeCartes1[$i]; 
    $jeuDeCartesMelanges[] = $moitieJeuDeCartes2[$i];
}


$ligneCartes1 = [];
for ($i = 0; $i <= 51; $i++) {
    if ($i + 1 % 13 === 0)continue;
    $ligneCartes1[] = $jeuDeCartesMelanges[$i];
    if ($i === 12){
        $serieCarte1 =  implode(", ", $ligneCartes1)."<br><br>";
    } elseif ($i === 25){
        $serieCarte2 =  implode(", ", array_slice($ligneCartes1, 13))."<br><br>";
    } elseif ($i === 38){
        $serieCarte3 =  implode(", ", array_slice($ligneCartes1, 26))."<br><br>";
    } elseif ($i === 51){
        $serieCarte4 =  implode(", ", array_slice($ligneCartes1, 39))."<br><br>";
    }
}
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel = "stylesheet" href = "../css/styles.css">
    <title>Jeux de cartes</title>
</head>
<body>
    <h1>Activité 9</h1>
    <h2>Listes des petits paquets de 13 cartes provenant du jeu de cartes coupé</h2>
    <h3>Première liste de 13 cartes</h3>
        <?= $serieCarte1 ?>

    <h3>Deuxième liste de 13 cartes</h3>
        <?= $serieCarte2 ?>

    <h3>Troisième liste de 13 cartes</h3>
        <?= $serieCarte3 ?>

    <h3>Quatrième liste de 13 cartes</h3>
        <?= $serieCarte4 ?>
</body>
</html>
