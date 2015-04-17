<?php 
var_dump($_POST);
$zek = 0;
$lek = $_POST['lek'];
$lrab = $_POST['lrab'];
$zek = $lek - ($lek * $lrab / 100);

?>
<form action="" method="POST">
<table border="1">
    <thead>
        <tr>
            <th>Kalkulationsschritt</th>
            <th>Wert(€uro)</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="wert">Listeneinkaufspreis </td>
            <td class="zahlwert"><input type="number" id="lek" name="lek"/>(€)</td>
        </tr>
        <tr>
            <td class="diff">- Lieferrabatt(%)</td>
            <td class="diffwert"><input type="number" id="lrab" name="lrab"/>(%)</td>
        </tr>
        <tr>
            <td class="wert">Zieleinkaufspreis</td>
            <td class="zahlwert">
                <?php echo $zek; ?>
            </td>
        </tr>
        <tr>
            <td class="diff">- Lieferskonto(%)</td>
            <td class="diffwert"><input name="" />(%)</td>
        </tr>
        <tr>
            <td class="wert">Bareinkaufspreis</td>
            <td class="zahlwert"></td>
        </tr>
        <tr>
            <td class="diff">+ Bezugskosten(€uro)</td>
            <td class="diffwert"><input name="" />(€)</td>
        </tr>
        <tr>
            <td class="wert">Bezugspreis</td>
            <td class="zahlwert"></td>
        </tr>
        <tr>
            <td class="diff">+ Handlungskosten / Selbstkosten(%)</td>
            <td class="diffwert"><input name="" />(%)</td>
        </tr>
        <tr>
            <td class="wert">Selbstkostenpreis</td>
            <td class="zahlwert"></td>
        </tr>
        <tr>
            <td class="diff">+ Gewinnzuschlag(%)</td>
            <td class="diffwert"><input name="" />(%)</td>
        </tr>
        <tr>
            <td class="wert">BAR-Verkaufspreis </td>
            <td class="zahlwert"></td>
        </tr>
        <tr>
            <td class="diff">+Kundenskonto(%)</td>
            <td class="diffwert"><input name="" />(%)</td>
        </tr>
        <tr>
            <td class="wert">Ziel- Verkaufspreis</td>
            <td class="zahlwert"></td>
        </tr>
        <tr>
            <td class="diff">+Kundenrabatt(%)</td>
            <td class="diffwert"><input name="" />(%)</td>
        </tr>
        <tr>
            <td class="wert">NETTO- Verkaufspreis</td>
            <td class="zahlwert"></td>
        </tr>
        <tr>
            <td class="diff">+Umsatzsteuer(%)</td>
            <td class="diffwert"><select name="Umsatzsteuer">
                    <option>19</option>
                    <option>7</option>
                </select>(%)</td>
        </tr>
        <tr>
            <td class="wert">Brutto-Verkaufspreis</td>
            <td class="zahlwert">
                
            </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Ausrechnen" /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </tbody>
</table>
</form>


