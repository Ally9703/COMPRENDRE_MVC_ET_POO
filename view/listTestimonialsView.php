<?php

    $title = "Témoignages";
    ob_start();

?>
<section class="container">

    <h1>Avis clients</h1>
    <p>Voici la liste des avis :</p>
    <a href="index.php"></a>

    <?php

        while($avis = $requete->fetch()) {
    
    ?>
        <p><b><?=$avis['note'] ?> / 5</b></p> <br>
        <?=$avis['content']?>
    <?php
        }
    ?>

</section>

<?php

    $content = ob_get_clean();
    require('base.php');
?>
  