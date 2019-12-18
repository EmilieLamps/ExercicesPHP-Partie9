<?php
$page = "Exercice 4"; // Définir la variable pour changer le titre !
$dDay = time();
$oldTimestamp = mktime(8, 2, 2016);
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 4</h2>
 <p class="text-center pb-5">Afficher le timestamp du jour.</p>
 <p class="text-center pb-5">Afficher le timestamp du mardi 2 août 2016 à 15h00.</p>
<p>Le Timestamp du jour est <?= $dDay ?></p>
<p>Le Timestamp du 2 août 2016 est <?= $oldTimestamp ?></p>
<?php
include '../footer.php';
?>
