<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Darbas 10-09</h1>

    <?php
    //Pirma uzduotis
    /* $numbers = [3.2, 6.4, 7.3, 9.2, 4.8]; 
    $average = array_sum($numbers) / cout($numbers);
    echo $average;
    */
    /*
    $average = array('Sigis'=>3.5, 'Vidis'=>8.8, 'Gedis'=>5.3);

    foreach ($average as $name => $value) {
        if($value > 4) {$PositiveVidurkis = 'Teigiamas';}else{$PositiveVidurkis = 'Neigiamas';}
        echo $name, ' :' , $value , ' - ', $PositiveVidurkis, '<br>';
    }
    */

    //Antra uzduotis
    /*
    $Vardai = array(
        'Mindaugas' =>4.9,
        'Arunas' =>2.4,
        'Sigis' =>2.9,
        'Vigis' =>8.6,
        'Nojus' =>3.4,
    );

    foreach($Vardai as $name => $value){
        if($value > 4){$PositiveVidurkis = 'Teigiamas';}else{$PositiveVidurkis = 'Neigiamas';}
        echo $name , ' : ', $value , ' - ', $PositiveVidurkis, '<br>'; 
    }
    */

    $mokiniai = array(
        "Antanas" => array("Matematika" => 8, "Istorija" => 7, "Chemija" => 6),
        "Sigis" => array("Matematika" => 5, "Istorija" => 6, "Chemija" => 7),
        "Margarita" => array("Matematika" => 9, "Istorija" => 8, "Chemija" => 9)
        );
        
        // Išvedame mokinių vardus ir apskaičiuojame, ar gali pereiti į kitus metus
        foreach ($mokiniai as $vardas => $dalykai) {
        $vidurkis = array_sum($dalykai) / count($dalykai);
        echo "Mokinys: $vardas, Vidurkis: $vidurkis ";

        Lukas SKuzinskas
        
        if ($vidurkis > 4) {
        echo "- gali buti perkeliamas(-a).";
        } else {
        echo "- negali buti perkeliamas(-a)";
        }
        
        echo "<br>";
        }

    ?>
</body>
</html>