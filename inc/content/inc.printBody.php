<!--   *   *   *   *   *   *   *   *   -->
<!-- Begin CONTAINER cnt02_01 -->
<div class="container" id="cnt02_01" style="text-align: center; border: 1px black dotted">
    <!-- Content Area -->             
    <article class="col col-md-9">
        <div class="row" style="text-align: center; border: 1px red solid"> 
            <article class="col-md-12" style="border: 1px black dashed">
                <br><hr />
                <h2>Content Area [Row 1]</h2>
                <div class="col-md-8" style="text-align: left; height: 550px; width: 95%; border: 1px blue double">
                
                    <p class="lead text-center alert-warning">Include your BusinesLogic here<em>(inc.printBody.php)</em></p>
<?php   if($position == ''){
                              include_once PROJECT__ROOT.'/inc/content/pdo.allUser.php';
                           } else {
                               include_once PROJECT_HTTP_ROOT.$position;
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