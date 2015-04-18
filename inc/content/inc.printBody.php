<?php 
function check($tocheck) {
    $checked = htmlspecialchars($tocheck);
    
    // @TODO: ändere ,(komma) in .(decimalpoint)
    if ($checked <= 0 ){
        $checked = "0";
    }
    return $checked;
}

//function setZielEK($lieferEK, $lieferRab=0) {
//    // $this->zielEK = $lieferEK - ($lieferEK * $lieferRab / 100); // For OO
//}
function getZielEK($lieferEK, $lieferRab=0) {
    // return $this->zielEK;   // For OO
    return ($lieferEK - ($lieferEK * $lieferRab / 100));
}
function getBarEK($zielEK, $lieferSko=0){
    return ($zielEK -($zielEK * $lieferSko / 100));
}
function getBezugsPreis($barEK, $bezugsKst=0){
    return ($barEK + $bezugsKst);
}
function getSkPreis($bezugsPreis, $skZuschlag=0) {
    return ($bezugsPreis * (($skZuschlag+100)/100));
}
function getBarVK($skPreis, $gewZuschlag=0){
    return ($skPreis * (($gewZuschlag+100)/100));
}  

function getZielVK($barVK, $kundenSko=0) {
    return ($barVK * 100 /(100 - $kundenSko));
}
function getNettoVK($zielVK, $kundenRab=0) {
    return ($zielVK * 100 /(100 - $kundenRab));
}
function getBruttoVK($nettoVk, $umsatzSt=19) {
    return ($nettoVk * ((100+$umsatzSt)/100));
}

    $lek = $lrab = $zek = "0";
    $lsko = $barek = "0";
    $bezko = $bezprs = "0";
    $seko = $seprs = "0";
    $gezu = $barvk = "0";
    $kdsko = $zvk = "0";
    $kdrab = $nvk = $bvk= "0";

if ($_POST) {
    $lek    = ($_POST['lek'])   ? check($_POST['lek'])  : "0";
    $lrab   = ($_POST['lrab'])  ? check($_POST['lrab']) : "0";
    $zek    = ($lek >= 0)       ? getZielEK($lek, $lrab): "0";
    
    $lsko   = ($_POST['lsko'])  ? check($_POST['lsko']) : "0";
    $barek  = ($zek >= 0)       ? getBarEK($zek, $lsko) : "0" ; 
    
    $bezko  = ($_POST['bezko']) ? check($_POST['bezko']): "0";
    $bezprs = ($bezko >= 0) ? getBezugsPreis($barek, $bezko): "0";

    $seko   = ($_POST['seko'])  ? check($_POST['seko']) : "0";
    $seprs  = ($seko >= 0)  ? getSkPreis($bezprs, $seko): "0";
    
    $gezu   = ($_POST['gezu'])  ? check($_POST['gezu']) : "0"; 
    $barvk  = ($gezu >= 0)  ? getBarVK($seprs, $gezu) : "0";
    
    $kdsko  = ($_POST['kdsko']) ? check($_POST['kdsko']): "0"; 
    $zvk    = ($kdsko >= 0) ? getZielVK($barvk, $kdsko) : "0";
    
    $kdrab  = ($_POST['kdrab']) ? check($_POST['kdrab']): "0";
    $nvk    = ($kdrab >=0)  ? getNettoVK($zvk, $kdrab)  : "0";
        
    $ust    = ($_POST['ust'])   ? check($_POST['ust'])  : "0"; 
    $bvk    = ($ust >=0)    ? getBruttoVK($nvk, $ust)   : "0";    
} 

?>
<!--   *   *   *   *   *   *   *   *   -->
<!-- Begin CONTAINER cnt02_01 -->
<div class="container" id="cnt02_01" style="text-align: center; border: 1px black dotted">
    <!-- Content Area -->             
    <article class="col col-md-9">
        <div class="row" style="text-align: center; border: 1px red solid"> 
            <article class="col-md-12" style="border: 1px black dashed">
                <br><hr />
                <h2>Content Area [Row 1]</h2>
                <div class="col-md-8" style="text-align: left; height: 650px; width: 95%; border: 1px blue double">
                
                    <p class="lead text-center alert-warning">Include your BusinesLogic here<em>(inc.printBody.php)</em></p>
                    <?php                   
                        if($position == ''){
                            include_once PROJECT_DOCUMENT_ROOT.'/inc/content/pdo.allUser.php';
                        } else {
                            include_once PROJECT_DOCUMENT_ROOT.$position;
                        }
                    ?>
                </div>                                        
            </article>
        </div>  <!--ende INNER ROW -->
        <div class="row" style="text-align: center; border: 1px red solid"> 
            <article class="col-md-12" style="text-align: center; border: 1px black dashed">
                <br><hr />
                <h2>Content Area [Row 2]</h2>
                <span class="col-md-4">
                    <ul>
                        <li>Lorem ipsum dolor</li>
                        <li>vero eos et accusam</li>
                        <li>Stet clita kasd gubergren</li>
                        <li>consetetur sadipscing</li>
                    </ul>
                </span>
                <span class="col-md-4">
                    <ul>
                        <li>Lorem ipsum dolor</li>
                        <li>vero eos et accusam</li>
                        <li>Stet clita kasd gubergren</li>
                        <li>consetetur sadipscing</li>
                    </ul>
                </span>
                <span class="col-md-4">
                    <ul>
                        <li>Lorem ipsum dolor</li>
                        <li>vero eos et accusam</li>
                        <li>Stet clita kasd gubergren</li>
                        <li>consetetur sadipscing</li>
                    </ul>
                </span>
                <br><hr />
            </article>
        </div> <!--ende INNER ROW -->          
    </article> 
</div><!-- /.container cnt02_01 -->    