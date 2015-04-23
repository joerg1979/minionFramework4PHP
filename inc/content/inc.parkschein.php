<?php 
include_once("inc.f.parkschein.php");
?>
<form action="" method="POST">
    <h2 class="lead text-center alert-warning">Parkscheinautomat</h2>
   <table style="text-align: center" border="1" class="col-lg-offset-2 col-md-8 klr">
        <thead>
        <th colspan="3" class="text-center">Bitte werfen Sie Münzen ein.</th>
        </thead>
        <tbody>
        <tr>
            <td colspan="2"class="text-left">
                <fieldset>
                    <input type="radio" id="mnz" name="Zahlmethode" value="200"><label for="200">2.00 Euro</label><br> 
                    <input type="radio" id="mnz" name="Zahlmethode" value="100"><label for="100">1.00 Euro</label><br> 
                    <input type="radio" id="mnz" name="Zahlmethode" value="50"><label for="50">0.50 Euro</label> <br>
                    <input type="radio" id="mnz" name="Zahlmethode" value="20"><label for="20">0.20 Euro</label><br> 
                    <input type="radio" id="mnz" name="Zahlmethode" value="10"><label for="10">0.10 Euro</label><br> 
                    <input type="radio" id="mnz" name="Zahlmethode" value="5"><label for="5">0.05 Euro</label> <br>
                    <input type="radio" id="mnz" name="Zahlmethode" value="2"><label for="2">0.02 Euro</label><br> 
                    <input type="radio" id="mnz" name="Zahlmethode" value="1"><label for="1">0.01 Euro</label><br> 
                    <input type="radio" id="mnz" name="Zahlmethode" value="0"><label for="0">Ausländische Münze</label> 
                </fieldset>
            </td>
            <td class="wert">
                <input type="submit" class="btn-block" id="einwurf" value="Münze einwerfen" />
            </td>

        </tr>
<!--        <tr>
            <td class="wert"><button class="btn-block" id="50">0.50 Euro</button></td> 
            <td class="wert"><button class="btn-block" id="20">0.20 Euro</button></td>
            <td class="wert"><button class="btn-block" id="10">0.10 Euro</button></td>
        </tr>
        <tr>
            <td class="wert"><button class="btn-block" id="5">0.05 Euro</button></td>
            <td class="wert"><button class="btn-block" id="2">0.02 Euro</button></td>
            <td class="wert"><button class="btn-block" id="1">0.01 Euro</button></td>
        </tr>-->
        <tr>
            <td colspan="3"><br> </td>
        </tr>
        <tr>
            <td colspan="3">Ihr Guthaben: <?php echo ($summe !== "0") ? $summe/100 : '0.00'; ?> €uro </td>
        </tr>
        <tr>
           <td colspan="3">Ihre Parkzeit: <?php echo ($summe !== "0") ? ($summe/50*15) : '0'; ?> Minuten </td> 
        </tr>
        <tr>
            <td colspan="3"><br> </td>
        </tr>
        <tr>
            <td colspan="3" class="diff"><button  class="btn-block" id="gr">Geldrückgabe</button></td>
        </tr>
            <td colspan="3"><input type="submit" class="btn-block" id="pd" value="Parkschein drucken" /></td>
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
//        if($_POST) {
//            druckeParkschein($summe);
//        }
        ?>
    </div>
   