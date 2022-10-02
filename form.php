<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quête GET et POST</title>
</head>

<body>

    <form action="/thanks.php" method="POST">
        <div>
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name">
        </div>
        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email">
        </div>
        <div>
            <label for="phone_number">N° tel:</label>
            <input type="tel" id="phone_number" name="user_phone" pattern="[0-9]{10}">
        </div>
        <div>
        <label for="object">Objet du message :</label>
            <SELECT id="object" name="user_object" size="1">
                <OPTION>pourquoi les petits-pois sont vert ?
                <OPTION>qui à écrit les paroles de "la Chenille" ?
                <OPTION>que fait un poussin de 3 tonnes ? 
                <OPTION>quand le lundi de Pâques tombera-t'il un mardi ?
                <OPTION>comment faire spider-cochon avec un sanglier ?
            </SELECT>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>
        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>
    </form>


</body>

</html>