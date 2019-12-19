<?php
$page = "Exercice 6"; // Définir la variable pour changer le titre !
$result = cal_days_in_month(CAL_GREGORIAN, 2, 2016); // La fonction cal_days_in_month calcul le nombre de jour d'un mois. On renseigne le calendrier utilisé puis le mois et l'année.
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 6</h2>
 <h3 class="text-center pb-5">Afficher le nombre de jour dans le mois de février de l'année 2016.</h3>
<p>Le mois de février 2016 comptait <?= $result ?> jours.</p>
<?php
include '../footer.php';
?>
