<?php
$page = "Calendrier"; // Définir la variable pour changer le titre !
$i='';
$selectedYear = '';
$months = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'août', 'septembre', 'octobre', 'novembre', 'décembre');
include '../header.php';
?>
<p><?= '<select name="annees">' ?></p>
<?php
for ($i = 1970; $i <= 2100; $i++) {
    // Défini si l'année est l'année en cours
    if ($i == date('Y')) {
        $selectedYear = ' selected="selected"';
    }
    ?>
    <!-- Génère dynamiquement la balise select -->
    <p><?= '<option value = "', $i, '"', $selectedYear, '>', $i, '</option>' ?></p>
    <?php
    // Remise à zéro de $selected
    $selectedYear = '';
}
?>
<p><?= '</select>' ?></p>
<!-- Définir en PHP la liste déroulante pour les mois -->
<!-- Créer une structure pour le calendrier -->
<?php
include '../footer.php';
?>
