<?php
session_start();
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thedra SIRH</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
        <?php
            if(isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
        ?>
        <div class="d-lg-flex align-items-center">
            <img src="/assets/img/logo.png" alt="logo" class="w-25">
            <h1 class="text-center p-3 h4">Prospects identifiés lors du salon</h1>
        </div>

        <form action="submit-form.php" method="post" class="form p-3">
                <div class="col-12 col-lg-6">
                    <label for="nom_entreprise">Nom de l’entreprise :</label>
                    <input type="text" id="nom_entreprise" name="nom_entreprise" class="form-control">
                </div>
                <div class="col-12 col-lg-6">
                    <label for="prenom_prospect">Prénom du prospect :</label>
                    <input type="text" id="prenom_prospect" name="prenom_prospect" class="form-control">
                </div>
                <div class="col-12 col-lg-6">
                    <label for="nom_prospect">Nom du prospect :</label>
                    <input type="text" id="nom_prospect" name="nom_prospect" class="form-control">
                </div>
                <div class="col-12 col-lg-6">
                    <label for="email_prospect">E-mail du prospect :</label>
                    <input type="email" id="email_prospect" name="email_prospect" class="form-control">
                </div>
                <div class="col-12 col-lg-6">
                    <label for="telephone_prospect">Téléphone du prospect :</label>
                    <input type="tel" id="telephone_prospect" name="telephone_prospect" class="form-control">
                </div>
                <div class="col-12 col-lg-6">
                    <label for="fonction_prospect">Fonction du prospect :</label>
                    <input type="text" id="fonction_prospect" name="fonction_prospect" class="form-control">
                </div>
                <div class="col-12 col-lg-6">
                    <label for="interet">Intéressé par :</label><br>
                    <input type="checkbox" id="interet1" name="interet[]" value="Thedra" class="form-check-input"> Thedra<br>
                    <input type="checkbox" id="interet2" name="interet[]" value="Cookorico" class="form-check-input"> Cookorico<br>
                    <input type="checkbox" id="interet3" name="interet[]" value="Merciii" class="form-check-input"> Merciii<br>
                    <input type="checkbox" id="interet4" name="interet[]" value="Interaction généraliste" class="form-check-input"> Interaction généraliste<br>
                </div>
                <div class="col-12 col-lg-6">
                    <label for="commentaire">Commentaire :</label>
                    <textarea id="commentaire" name="commentaire" class="form-control"></textarea>
                </div>
                <input type="submit" value="Envoyer" class="btn btn-primary">
            </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>