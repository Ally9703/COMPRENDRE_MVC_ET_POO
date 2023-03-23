<?php

    $title = "Erreur";
    ob_start();

?>
<section class="container">

    <h1>OUPS !</h1>
    <p><?= $error?></p>
    <a href="index.php">Page d'acceuil</a>


</section>

<?php

    $content = ob_get_clean();
    require('base.php');
?>
  