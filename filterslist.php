<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filtres</title>
</head>
<body>
    <table>
        <tr>
            <th>Nom du filtre</th>
            <th>Id du filtre</th>
        </tr>

    <?php 
        $filtre = filter_list();
        foreach($filtre as $id => $nomfiltre) {
            echo '<tr><td>' .$nomfiltre . '</td><td>' . filter_id($nomfiltre) . '</td></tr>';
        }
    ?>
    </table>
</body>
</html>