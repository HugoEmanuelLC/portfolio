<?php
require('fragment/head.php');
?>

<body>
    <div class="page">

        <?= $navBarTop ?>

        <?= $navBarRight ?>

        <?= $content = (isset($content)) ? $content : "lien interrompue" ?>
        
        <?php require('fragment/footer.php') ?>

    </div>

</body>
</html>