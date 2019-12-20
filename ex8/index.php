<?php
$page = "Exercice 8"; // Définir la variable pour changer le titre !
$dDay = time(); // affiche la date du jour en timestamp
$dayNumber = 22; // Modifier la variable pour modifier le calcul
$secondsDay = $dayNumber * 86400; // converti les jours de la variable dayNumber en secondes
$timestampResult = ($dDay - $secondsDay); // additionne le timestamp du jour + celui du nombre de jours incrémentés
$result = date('d/m/Y', $timestampResult); // converti le timestamp en date au format JJ/MM/AAAA
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 8</h2>
 <h3 class="text-center pb-5">Afficher la date du jour - 22 jours</h3>
<p>Il y a 22 jours, nous étions le <?= $result ?></p>
<?php
include '../footer.php';
?>
