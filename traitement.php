<?php

$error=false;
$to="alexis.grivel@live.fr";


if(isset($_GET["cgu"])){
    $nom=!empty($_GET["nom"])?$_GET["nom"]:$error=true;

    $prenom=!empty($_GET["prenom"])?$_GET["prenom"]:$error=true;

    $mail=!empty($_GET["email"])?$_GET["email"]:$error=true;

    $subject=!empty($_GET["sujet"])?$_GET["sujet"]:$error=true;

    $message=!empty($_GET["message"])?$_GET["message"]:$error=true;

    $headers= array(
        'From' => $mail,
        'Reply-To' => $mail,
        'X-Mailer' => 'PHP/' . phpversion()
    );
        
    if (!$error) {
        echo "<p style='text-align:center'>Merci $nom $prenom,<br> Nous allons prendre contact avec vous rapidement.
        .</p>";
        echo "<p style='text-align:center'>Cordialement</p>";
        mail($to , $subject , $message , $headers);
    }else{
        echo "Veuillez remplir tout les champs.";
    }
    
    echo "<p><a href='contact.php' title='retour contact'>Retour</a></p>";
    
}else{
    echo "veuillez cocher les CGU";
    echo "<p><a href='contact.php' title='retour contact'>Retour</a></p>";
}

?>