<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <nav>
        <ul>
            <li>Accueil</li>
            <li>Contact</li>
            <li>A propos</li>
        </ul>
    </nav>
    <div class="center">
        <form method="post" action="controller.php">
            Référence <input type="text" name="reference" placeholder="Entrez la Référence">
            Description <input type="text" name="description" placeholder="Entrez la Description">
            Prix Vente <input type="number" name="prix_vente" placeholder="Entrez le prix de vente">
            Prix Achat <input type="number" name="prix_achat" placeholder="Entrez le prix d'achat">
            <input type="submit" value="Ajouter">
        </form>
    </div>
</body>

</html>