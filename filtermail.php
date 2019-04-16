<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtres mail</title>
</head>
<body>
    <?php
        // $email1 = "nico@mail.com";
        // $email2 = "nico@mail";
        
        // $newMail = filter_var($email2, FILTER_SANITIZE_EMAIL);

        // if(!filter_var($newMail, FILTER_VALIDATE_EMAIL) === false) {
        //     echo 'l\'email ' . $newMail . ' possède une forme valide.';
        // } else {
        //     echo 'l\'email ' . $newMail . ' ne possède pas une forme valide.';
        // }

        $email = "n/i(co@mail.com";
        
        $newMail = filter_var($email, FILTER_SANITIZE_EMAIL);

        if(!filter_var($newMail, FILTER_VALIDATE_EMAIL) === false) {
            if($newMail != $email) {
                echo 'Le mail possède désormais une forme valide.</br>
                Mail envoyé : ' . $email .'</br> 
                Mail apreès transformation : ' . $newMail;
            } else {
                echo 'Adresse mail valide';
            }
        } else {
            echo 'Adresse email invalide';
        }
    ?>
</body>
</html>