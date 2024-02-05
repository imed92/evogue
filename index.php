<!-- déclaration utilisée dans le langage HTML pour indiquer la version du HTML utilisée dans le document -->
<!DOCTYPE html>
<!-- Langue de cette page = anglais -->
<html lang="en">
<head>
    <!-- définit l'encodage des caractères pour la page. Ici, l'encodage est défini sur UTF-8, qui est un encodage de caractères universel pris en charge par la plupart des navigateurs. Cela garantit que les caractères spéciaux et les symboles sont affichés correctement. -->
    <meta charset="UTF-8">
    <!-- gère l'affichage sur les appareils mobiles -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Page Bootstrap</title>
</head>
<body>

<div class="container mt-5">
    <div class="jumbotron">
        <h1 class="display-4">Voici l'âge de Toto :</h1>
        <p class="lead">
            <?php // <= Ceci permet de dire à l'interpréteur que la suite du fichier est du code PHP !

                // Cette ligne permet d'arrêter l'intreprétation du code PHP. On pourrait mettre du HTML derrière, PHP ne le lirait pas ! Si tout le fichier contient du PHP, cette ligne est optionnelle !
            ?>
        </p>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
