<?php 
include 'inc.f.parkschein.php';
?>
<form action="" method="POST">
   <table style="text-align: center"border="1" class="col-lg-offset-2 col-md-8 klr">
        <thead>
            <th colspan="3">Geldeinwurf</th>
        </thead>
        <tbody>
        <tr>
            <td class="wert"><button class="btn-block" id="200">2.00 Euro</button></td>
            <td class="wert"></td>
            <td class="wert"><button class="btn-block" id="100">1.00 Euro</button></td>
        </tr>
        <tr>
            <td class="wert"><button class="btn-block" id="50">0.50 Euro</button></td> 
            <td class="wert"><button class="btn-block" id="20">0.20 Euro</button></td>
            <td class="wert"><button class="btn-block" id="10">0.10 Euro</button></td>
        </tr>
        <tr>
            <td class="wert"><button class="btn-block" id="05">0.05 Euro</button></td>
            <td class="wert"><button class="btn-block" id="02">0.02 Euro</button></td>
            <td class="wert"><button class="btn-block" id="01">0.01 Euro</button></td>
        </tr>
        <tr>
            <td colspan="3"> <br></td>
        </tr>
        <tr>
            <th colspan="3"><button  class="btn-block" id="00">Ausländische Münze</button></th>
        <tr>
        <tr>
            <td colspan="3"><br> </td>
        </tr>
        <tr>
            <td colspan="3">Ihr Guthaben: <?php echo ($summe !== "0") ? $summe/100 : '0'; ?> €uro </td>
        </tr>
        <tr>
           <td colspan="3">Ihre Parkzeit: <?php echo ($summe !== "0") ? ($summe/50*15) : '0'; ?> Minuten </td> 
        </tr>
        <tr>
            <td colspan="3"><br> </td>
        </tr>
        <tr>
            <td class="diff"><button  class="btn-block" id="gr">Geldrückgabe</button></td>
            <td><br></td>
            <td><button  class="btn-block" id="pd">Parkschein drucken</button></td>
        </tr>
        <tr>
            <td colspan="3"><br> </td>
        </tr>
        </form>
        <tr>
        <form name="reload" action="" method="GET">
           <td colspan="3" class="wert"><input class="btn-block" type="submit" value="Neu starten"/></td>
        </form>
        </tr>
    </tbody>
</table>
    <div>
        <p>Ihr Pakrticket vom <?php date('YYYY-MM-DD');?></p>
        <p>Ihre Kosten: <?php echo $summe;?> Euro</p>
        <p>Ihre Parkdauer: <?php echo ($summe/50*15);?> Minuten</p>
    </div>