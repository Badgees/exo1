<?php

$sexe = readline ("Sélectionner votre sexe (1: homme, 2: femme, 3: autres) : ");

switch ($sexe) {
    case "homme":
        echo 'Bonjour Monsieur';
        break;
    case "femme":
        echo "Bonjour Madame";
        break;
    case "autres":
        echo "Bonjour ";
        break;
    default:
        echo "Votre réponse ne correspond pas aux réponses à votre disposition";
}

?>

<?php

$budget = 1553.89 . '€';
$achats = 1554.76 . '€';

if ($budget >= $achats) {
    echo "Votre budget est suffisant";
} else {
    echo "Votre budget est insuffisant";
}
?>



<?php

$age = readline ("Entrez votre age :");
if(!is_numeric($age)) {
    echo "Age invalide";
} elseif (($age >= 18) && ($age < 200)) {
    echo "Vous pouvez accéder au site car vous êtes majeur";
} elseif  (($age >= 0) && ($age < 18)) {
    echo "Désolé, vous ne pouvez pas accéder au site car vous êtes mineur";
} else {
    echo "Age invalide";
}
?>



<?php

$heure = readline ("Heure :"); ("H");
if(!is_numeric($heure)) {
    echo "Heure invalide";
} elseif (($heure >= 6) && ($heure < 12 )) {
    echo "C'est le matin";
} elseif (($heure >= 12) && ($heure < 18)) {
    echo "C'est l'après midi";
} elseif ((($heure >= 18) && ($heure < 24)) || (($heure >= 0) && ($heure < 6))) {
    echo "C'est la nuit";
} else {
    echo "Heure invalide";
}
?>