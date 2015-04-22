<?php 
include 'inc.f.parkschein.php';
?>
<form action="" method="POST">
    <h2 class="lead text-center alert-warning">Parkscheinautomat</h2>
   <table style="text-align: center" border="1" class="col-lg-offset-2 col-md-8 klr">
        <thead>
        <th colspan="3" class="text-center">Bitte werfen Sie Münzen ein.</th>
        </thead>
        <tbody>
        <tr>
            <td class="wert"><input type="submit" value="2.00 Euro" class="btn-block" id="200" /></td>
            <td class="wert"></td>
            <td class="wert"><button class="btn-block" id="100">1.00 Euro</button></td>
        </tr>
        <tr>
            <td class="wert"><button class="btn-block" id="50">0.50 Euro</button></td> 
            <td class="wert"><button class="btn-block" id="20">0.20 Euro</button></td>
            <td class="wert"><button class="btn-block" id="10">0.10 Euro</button></td>
        </tr>
        <tr>
            <td class="wert"><button class="btn-block" id="5">0.05 Euro</button></td>
            <td class="wert"><button class="btn-block" id="2">0.02 Euro</button></td>
            <td class="wert"><button class="btn-block" id="1">0.01 Euro</button></td>
        </tr>
        <tr>
            <td colspan="3"> <br></td>
        </tr>
        <tr>
            <th colspan="3"><button class="btn-block" id="0">Ausländische Münze</button></th>
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
            <td><input type="submit" class="btn-block" id="pd" value="Parkschein drucken" /></td>
        </tr>
        <tr>
            <td colspan="3"><br> </td>
        </tr>
        <input type="hidden" id="hidden" value="hidden" name="hidden"/>
        </form>
        <tr>
        <form name="reload" action="" method="GET">
           <td colspan="3" class="wert"><input class="btn-block" type="submit" value="Neu starten"/></td>
        </form>
        </tr>
    </tbody>
</table> 
    <div class="col-md-12 parkschein">
        <?php 
        if($_POST) {
            druckeParkschein($summe);
        }
        ?>
    </div>
   