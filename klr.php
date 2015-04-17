<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Google ohne Tracing, Tracking & Werbung</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
<!--    <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    </head>
    <?php
        require './joogle_lib.php';
    ?>
    <body>
        
        <div class="container" style="text-align: center">
            <div class="row">
                <h3>Wilkommen zur GoogleSuche ohne Werbung</h3>
                <img src="img/joogle.jpg" height="225px"/>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="keyword" class="col-lg-12">Google Suche (100 Suchergebnisse)</label>
                        <input type="text" class="form-control col-lg-8" name="keyword" id="keyword" placeholder="Suche"/>
                    </div>
                    <div class="form-group" align="center">    
                        <input type="submit" class="btn btn-default col-lg-4 col-lg-push-4" value="Suchen" />
                    <!--    <label for="nrRes" class="col-lg-offset-1">Wieviele Suchergebnisse wünschen Sie?</label>
                            <input type="number" class="form" id="nrRes" value="100"> -->
                    </div>
                </form>
                
            </div>
        </div>
        <div style="text-align: center">
                    <?php $post = $_POST;
                if (!$_POST) {
                        echo "<h4>Es erfolgte noch keine Suche</h4>";
                    } else {
                        echo '<h4>Ihre Suche nach <b>"'.$post["keyword"].'"</b> war erfolgreich.</h4>';
                    }
                ?>
                </div>
        <hr/>
        <div class='row' style='text-align: left'>
            <div class='col-lg-8 col-lg-offset-2'>
                    <?php 
                        if($_POST){
                            
                            $keyword = checkSubmit($post["keyword"]);
                            getGoogleResults(searchGoogle($keyword));
                            echo "</div>";
                        }
                    ?>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--        <script src="js/bootstrap.min.js"></script> -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>
