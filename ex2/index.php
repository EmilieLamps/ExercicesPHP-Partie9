<?php
$page = "Exercice 2"; // Définir la variable pour changer le titre !
$date = date('d-m-Y'); // Le séparateur peut être modifié
include '../header.php';
 ?>
 <h2 class="text-primary text-center pt-5 pb-5 font-weight-bold">Exercice 2</h2>
 <h3 class="text-center pb-5">Afficher la date courante en respectant la forme jj-mm-aa (ex : 16-05-16)</h3>
<p>Nous sommes le <?= $date ?></p>
<?php
include '../footer.php';
?>