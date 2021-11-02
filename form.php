<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
</head>

<body>
    <form action="print.php" method="post">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" />
        <br />
        <label for="prenom">Prénom</label>
        <input type="text" name="prenom" id="prenom" />
        <br />
        <label for="mail">Email</label>
        <input type="email" name="mail" id="mail" />
        <br />
        <label for="tel">Téléphone</label>
        <input type="tel" name="tel" id="tel" />
        <br />
        <select name="sujet" id="sujet">
            <option value="commercial">Sujet 1</option>
            <option value="technique">Sujet 2</option>
            <option value="client">Sujet 3</option>
        </select>
        <br />
        <textarea name="message" id="message" cols="50" rows="10"></textarea>
        <br />
        <button type="submit">Valider</button>
    </form>
</body>

</html>