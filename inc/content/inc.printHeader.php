<!-- Begin CONTAINER cnt01   -->
<!-- Begin of TOP-NAVIGATION Area --> 
<?php include_once PROJECT_DOCUMENT_ROOT.'/inc/content/inc.printNavi.php';?>
<!-- END of TOP-NAVIGATION --> 
<!-- END OF CONTAINER cnt01  --> 

<!-- Begin CONTAINER cnt02   -->
<!-- Begin of LEFT-NAVIGATION Area -->
<div class="container" id="cnt02" style="text-align: center; border: 1px black solid"">
    <!--Begin of section ROW-->
    <section class="row" style="text-align: center; border: 1px red solid">
        <aside class="col col-md-3">
            <hr />
            <h2>Navigation</h2>
            <hr />
                <p>
                    <ul class="nav nav-pills nav-stacked">
                        <li role="presentation" class="<?php echo ($position == "index.php")?"active":""; ?>"><a href="index.php">Home</a></li>
                        <li role="presentation" class="<?php echo ($position == "./index2.php")?"active":""; ?>"><a href="./index.php">My Account</a></li>
                         <li role="presentation" class="<?php echo ($position == "./index3.php")?"active":""; ?>"><a href="./index.php">Dashboard</a></li>
                        <li role="presentation" class="<?php echo ($position == "./index4.php")?"active":""; ?>"><a href="./index.php">Something else</a></li>
                        <li role="presentation" class="<?php echo ($position == "./index5.php")?"active":""; ?>"><a href="./index.php">Informations</a></li>
                         <li role="presentation" class="<?php echo ($position == "lotto.php")?"active":""; ?>"><a href="./lotto.php">Lottozahlen Generator</a></li>
                        <li role="presentation" class="<?php echo ($position == "parkschein.php")?"active":""; ?>"><a href="./parkschein.php">Parkscheinautomat</a></li>
                        <li role="presentation" class="<?php echo ($position == "klr.php")?"active":""; ?>"><a href="klr.php">KLR</a></li>
                    
                    </ul>
                </p>
                <hr />
            
        </aside><!--ende LEFT NAVIGATION -->
        <!-- END of LEFT-NAVIGATION Area --> 
        <!---- Begin CONTAINER cnt02_01 (included)---->
