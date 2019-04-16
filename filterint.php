<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtres int</title>
</head>
<body>
    <?php 
        // $int1 = 100;
        // $int2 = "aaa";
        // $int3 = 0;

        // if( filter_var($int3, FILTER_VALIDATE_INT) === 0 ||    
        //     !filter_var($int3, FILTER_VALIDATE_INT) === false) {
        //     echo 'La variable contient bien un nombre entier valide.</br>';
        // } else {
        //     echo 'La variable ne contient pas un nombre entier valide.</br>';
        // }

        $int1 = -10;
        $int2 = 50;
        $int3 = 150;
        $min = 1;
        $max = 100;
        
        if(!filter_var($int3, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
            echo 'Le nombre est dans la bonne fourchette.</br>';
        } else {
            echo 'Le nombre n\'est pas dans la bonne fourchette.</br>';
        }
    ?>
</body>
</html>