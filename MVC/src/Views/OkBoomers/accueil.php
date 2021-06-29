<?php
ob_start();
?>


<?php

$description = 'Bienvenue sur la home page';
$title = 'Accueil ';

$content = ob_get_clean();
require VIEWS . '/layout.php';
