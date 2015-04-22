<?php
include_once 'inc.f.lotto.php';
?>
<p class="lead text-center alert-info">Lottozahlengenerator<em>(6 aus 49)</em></p>
<div class="text-left">
    <?php
    if ($_POST) {
        $zahlen = array();
        $all = zieheZahlen(6, 1, 49, $zahlen);
        $sorted = array_multisort($all, SORT_ASC);
        if ($sorted) {
            echo "<div class='text-center' ><h4>Das Ergebnis der Ziehung 6aus49!</h4><p>";
            
            foreach ($all as $key => $value) {
                echo ($key + 1)     . ". Zahl: " . $value . "<br />";
            }
            echo "</p></div>";
        } 
    }else {
            echo "<h4 class='lead text-center alert-warning'>Auf [Zahlen generieren] klicken um Ihre persönlichen Lottozahlen zu erhalten</h4>";
        }
    ?>  
</div>
<form class="text-center" action="" method="POST">
    <input type="hidden" id="1" name="1" value="1"/>
    <input class="btn-info" type="submit" id="2" value="Zahlen generieren"/><br />
    <input class="btn-warning" type="button" value="Leeren" onclick="self.location.href='lotto.php'"/>
</form>

    


