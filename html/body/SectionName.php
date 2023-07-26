<?php
require('autoload.php');
?>
<main>
<section class="Name">
        <?php
        $name = "joao gabriel";
        $interpolate = new \name\Formatter($name);
        $formattedName = $interpolate->interpolateName();

        echo "ORIGINAL NAME: " . $name . "<br>";
        echo "FORMATTED NAME: " . $formattedName . "<br>";
        ?>
</section>
</body>
</html>