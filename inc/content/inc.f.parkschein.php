<?php
$summe = "0";

if ($_POST) {
    if (isset($_POST['Zahlmethode'])) {
     $summe = einzahlen($_POST['Zahlmethode'], $summe);
    }
}

function check($tocheck) {
    $checked = htmlspecialchars($tocheck);

    // @TODO: ändere ,(komma) in .(decimalpoint)
    if ($checked <= 0) {
        $checked = "0";
    }
    return $checked;
}

function einzahlen($wert, $summe) {
    if ($wert >= 10 && $wert <= 200) {
        if ($summe + $wert > 300) {
            return (muenzRueckgabe($wert));
        }
        $summe = $summe + $wert;
    } else {
        return (muenzRueckgabe($wert));
    }
}

function getParkdauer($summe) {
    $dauer = $summe / 50 * 15;
    return $dauer;
}

function setSumme($wert, $summe) {
    global $summe;
    $summe = $wert;
    return $summe;
}

function geldRückgabe($summe) {
    $auszahlung = "Sie bekommen " . $summe . "Euro/Cent zurück";
    setSumme(0);
    return $auszahlung;
}

function muenzRueckgabe($wert) {
    echo 'Dieser Automat kann Ihre Münze nicht annehmen.';
}

function druckeParkschein($summe) {
    $parkschein = "<h3>Parkschein</h3>";
    $parkschein .= "<p>Ihr Parkticket vom: " . date('d.m.y - H:i') . "h </p>";
    $parkschein .= "<p>Bezahlte Parkgebühr: " . $summe . " </p>";
    $parkschein .= "<p>Parkdauer:" . getParkdauer($summe) . " Minuten</p>";

    echo $parkschein;
}
