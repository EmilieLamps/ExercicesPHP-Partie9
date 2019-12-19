<?php
$page = "Exercice 5"; // Définir la variable pour changer le titre !
$date1 = '16-05-2016';
$date2 = date('d/m/Y'); // Donne la date du jour
// converti les dates en timestamp
$timestampDate1 = strtotime($date1);
$timestampDate2 = time();
var_dump($timestampDate2);
// Soustrait les variables pour obtenir la différence entre les 2 timestamp
$soustractionDate = $timestampDate2 - $timestampDate1;
// On divise la différence obtenue par 86400 (nombre de secondes dans une journée)
$numberDays = $soustractionDate/86400;
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 5</h2>
 <h3 class="text-center pb-5">Afficher le nombre de jour qui sépare la date du jour avec le 16 mai 2016.</h3>
 <p><?= intval($numberDays) ?> : c'est le nombre de jour qui séparent les 2 dates</p> <!-- INTVAL permet de n'afficher que l'entier de la variable -->
<?php
include '../footer.php';
?>