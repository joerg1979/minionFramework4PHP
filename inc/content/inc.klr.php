<?php 
?>
<form action="" method="POST">
    <table border="1" class="col-lg-offset-2 col-md-8 klr">
    <thead>
        <tr>
            <th>Kalkulationsschritt</th>
            <th>Wert(€uro)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="wert">Listeneinkaufspreis </td>
            <td class="zahlwert"><input id="lek" name="lek" value="<?php echo ($lek !== "0") ? $lek : '0'; ?>"/>(€)</td>
        </tr>
        <tr>
            <td class="diff">- Lieferrabatt(%)</td>
            <td class="diffwert"><input type="number" id="lrab" name="lrab"  value="<?php echo ($lrab !== "0") ? $lrab : '0'; ?>"/>(%)</td>
        </tr>
        <tr>
            <td class="wert">Zieleinkaufspreis</td>
            <td class="zahlwert"><?php echo $zek.' (€)'; ?></td>
        </tr>
        <tr>
            <td class="diff">- Lieferskonto(%)</td>
            <td class="diffwert"><input type="number" id="lsko" name="lsko"  value="<?php echo ($lsko !== "0") ? $lsko : '0'; ?>"/>(%)</td>
        </tr>
        <tr>
            <td class="wert">Bareinkaufspreis</td>
            <td class="zahlwert"><?php echo $barek.' (€)'; ?></td>
        </tr>
        <tr>
            <td class="diff">+ Bezugskosten(€uro)</td>
            <td class="diffwert"><input id="bezko" name="bezko"  value="<?php echo ($bezko !== "0") ? $bezko : '0'; ?>"/>(€)</td>
        </tr>
        <tr>
            <td class="wert">Bezugspreis</td>
            <td class="zahlwert"><?php echo $bezprs.' (€)'; ?></td>
        </tr>
        <tr>
            <td class="diff">+ Handlungskosten / Selbstkosten(%)</td>
            <td class="diffwert"><input type="number" id="seko" name="seko"  value="<?php echo ($seko !== "0") ? $seko : '0'; ?>"/>(%)</td>
        </tr>
        <tr>
            <td class="wert">Selbstkostenpreis</td>
            <td class="zahlwert"><?php echo $seprs.' (€)'; ?></td></td>
        </tr>
        <tr>
            <td class="diff">+ Gewinnzuschlag(%)</td>
            <td class="diffwert"><input type="number" id="gezu" name="gezu"  value="<?php echo ($gezu !== "0") ? $gezu : '0'; ?>"/>(%)</td>
        </tr>
        <tr>
            <td class="wert">BAR-Verkaufspreis</td>
            <td class="zahlwert"><?php echo $barvk.' (€)'; ?></td>
        </tr>
        <tr>
            <td class="diff">+Kundenskonto(%)</td>
            <td class="diffwert"><input type="number" id="kdsko" name="kdsko"  value="<?php echo ($kdsko !== "0") ? $kdsko : '0'; ?>"/>(%)</td>
        </tr>
        <tr>
            <td class="wert">Ziel- Verkaufspreis</td>
            <td class="zahlwert"><?php echo $zvk.' (€)'; ?></td>
        <tr>
            <td class="diff">+Kundenrabatt(%)</td>
            <td class="diffwert"><input type="number" id="kdrab" name="kdrab"  value="<?php echo ($kdrab !== "0") ? $kdrab : '0'; ?>"/>(%)</td>
        </tr>
        <tr>
            <td class="wert">NETTO- Verkaufspreis</td>
            <td class="zahlwert"><?php echo $nvk.' (€)'; ?></td>
        </tr>
        <tr>
            <td class="diff">+Umsatzsteuer(%)</td>
            <td class="diffwert"><select name="ust" id="ust">
                   <?php echo ($ust != 7) ? "<option selected='selected'>19</option><option>7</option>" : "<option>19</option><option selected='selected'>7</option>"; ?>"/> 
                </select>(%)</td>
        </tr>
        <tr>
            <td class="wert">Brutto-Verkaufspreis</td>
            <td class="zahlwert"><?php echo $bvk.' (€)'; ?></td>
        </tr>
        <tr>
            <td><input class="btn-block" type="reset" value="Eingaben Zurücksetzen"/></td>
            <td><input class="btn-block" type="submit" value="Ausrechnen" /></td>
        </tr></form>
        <tr>
        <form name="reload" action="" method="GET">
            <td><input class="btn-block" type="submit" value="Formular leeren"/></td>
            <td></td>
        </form>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>