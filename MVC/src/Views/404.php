<?php
ob_start();

?>

    <div class="error-box">
        <div class="error-body text-center">
            <h1 class="error-title">404</h1>
            <h3 class="text-uppercase error-subtitle">PAGE NON TROUVÉE !</h3>
            <p class="text-muted mb-4 mt-4">VOUS SEMBLEZ ESSAYER DE TROUVER VOTRE CHEMAIN</p>
            <a href="index.html" class="btn btn-info btn-rounded waves-effect waves-light mb-4 text-white">Retour à la maison</a>
        </div>
        <footer class="footer text-center w-100">
            © 2021 FoxRooms by <a href="https://nozaria.net">www.nozaria.net</a>
        </footer>
    </div>

<?php

$content = ob_get_clean();
require VIEWS . 'layout.php';
