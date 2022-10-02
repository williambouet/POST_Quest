<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>thanks</title>
</head>

<body>

    <h1>Merci <?php echo $_POST['user_name']; ?> de nous avoir contacté.</h1>
    <p>Vous souhaitez savoir <?php echo $_POST['user_object']; ?></p>
    <p>Un de nos conseiller vous contactera à l’adresse <?php echo $_POST['user_email']; ?></p>
    <p>ou par téléphone au <?php echo $_POST['user_phone']; ?> dans les plus brefs délais pour traiter votre demande.</p>
    <p>Pour rappel, voici votre message : <?php echo $_POST['user_message']; ?></p>

</body>

</html>