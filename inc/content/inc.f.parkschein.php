<?php 
$summe =150;
$ps = FALSE;
if($_POST){

}

function check($tocheck) {
    $checked = htmlspecialchars($tocheck);
    
    // @TODO: ändere ,(komma) in .(decimalpoint)
    if ($checked <= 0 ){
        $checked = "0";
    }
    return $checked;
}

function einzahlen($wert) {
    global $summe;
    if ($wert >0 && $wert <=200){
        if($summe + $wert > 300){
            muenzRueckgabe($wert);
        }
        $summe = $summe+$wert;
        return $summe;
    } else {
        muenzRueckgabe($wert);
    }
}  
function getParkdauer($summe) {
    $dauer = $summe/50*15;
    return $dauer;
}
function setSumme($wert){
    global $summe;
    $summe = $wert;
}
function geldRückgabe($summe) {
    $auszahlung = "Sie bekommen ".$summe. "Euro/Cent zurück";
    setSumme(0);
    return $auszahlung;
}
function muenzRueckgabe($wert) {
    echo 'Dieser Automat kann Ihre Münze nicht annehmen.';
}
function druckeParkschein($summe){
    $parkschein = "<h3>Parkschein</h3>";
    $parkschein .= "<p>Ihr Parkticket vom: ".date('d.m.y - H:i')."h </p>";
    $parkschein .= "<p>Bezahlte Parkgebühr: ".$summe." </p>";
    $parkschein .= "<p>Parkdauer:".getParkdauer($summe)." Minuten</p>";
    
    echo $parkschein;
}