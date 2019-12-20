<?php
$page = "Exercice 7"; // Définir la variable pour changer le titre !
// convertir en timestamp les dates
$dDay = time(); // affiche la date du jour en timestamp
$dayNumber = 20; // Modifier la variable pour modifier le calcul
$secondsDay = $dayNumber * 86400; // converti les jours de la variable dayNumber en secondes
$timestampResult = ($dDay + $secondsDay); // additionne le timestamp du jour + celui du nombre de jours incrémentés
$result = date('d/m/Y', $timestampResult); // converti le timestamp en date au format JJ/MM/AAAA
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 7</h2>
 <h3 class="text-center pb-5">Afficher la date du jour + 20 jours.</h3>
<p>Dans 20 jours, nous serons le <?= $result ?> </p>
<?php
include '../footer.php';
?>