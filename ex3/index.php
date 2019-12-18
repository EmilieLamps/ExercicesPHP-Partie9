<?php
$page = "Exercice 3"; // Définir la variable pour changer le titre !
$date = strftime('%A %d %B %Y');
include '../header.php';
setlocale(LC_ALL, 'fr_FR.UTF8');
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 3</h2>
 <h3 class="text-center pb-5">Afficher la date courante avec le jour de la semaine et le mois en toutes lettres (ex : mardi 2 août 2016)</h3>
<p>Nous sommes le <?= $date ?></p>
<?php
include '../footer.php';
?>
