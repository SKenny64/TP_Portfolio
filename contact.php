<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Portfolio</title>
</head>
<body>
<header>
    <h1>CONTACT</h1>
    <?php require_once 'header.php';?>
<main>
  <form action="traitement.php" method="get">
        Nom : <input type="text" name="nom" id=""><br>
        Prénom : <input type="text" name="prenom" id=""><br>
        Email : <input type="mail" name="email" id=""><br>
        Sujet : <input type="text" name="sujet" id=""><br>
        Message :<br> <textarea name="message" id="">Votre message..</textarea><br>
        <input type="checkbox" name="cgu">En validant ce formulaire, vous acceptez d’être contacté<br>
        <input type="submit" value="ok">
    </form>
</main>
    
</body>
</html>