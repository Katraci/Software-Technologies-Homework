<ul>
    <?php
    for ($a=1; $a<=20; $a++){
        if($a % 2 != 0) {
            ?>
            <li><span style='color:blue'><?= $a ?></span></li>
        <?php
        } else {
            ?>
            <li><span style='color:green'><?= $a ?></span></li>
        <?php
        }
    }?>
</ul>
