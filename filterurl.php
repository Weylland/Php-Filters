<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtres url</title>
</head>
<body>
    <?php
        $url1 = "https://cv.samiéééer-developpement.fr/";
        // $url2 = "https//cv.samier-developpement.fr/";
        // $url3 = "https://cv.samier-developpement";

        $newUrl = filter_var($url1, FILTER_SANITIZE_URL);

        if(!filter_var($newUrl, FILTER_VALIDATE_URL) === false) {
            if($url1 != $newUrl) {
                echo 'L\'url a été modifiée en : ' . $newUrl .'</br>
                URL envoyé : ' . $url1 .'</br>';
            } else {
                echo 'Url valide';
            }
        } else {
            echo 'Url invalide';
        }
    ?>
</body>
</html>