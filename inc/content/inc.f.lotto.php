<?php 
function zieheZahlen($anzahl, $von, $bis, $zahlen) {
    echo "<h2 class='text-center alert-success'>Ihre Lottozahlen wurden gezogen</h2><p>";
    for ($i = 1; $i <= $anzahl; $i++) {
        $new = rand($von, $bis);
        if (in_array($new, $zahlen) === true) {
            $i--;
           // echo "</p><p><b>Neue Zahl</b></p><p>";
        } else {
            $zahlen[$i] = $new;
        //    echo $i.".Zahl: ".$zahlen[$i]."<br />";
        }
    }
return $zahlen;
}