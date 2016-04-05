<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pimp My Fractal</title>
  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Raleway:200' rel='stylesheet' type='text/css'>
  <!-- Favicon -->
  <link rel="icon" href="../favicon.png" />
  <!-- Loading -->
  <script src="js/pace.min.js"></script>
</head>
<body>
  <header>
    <div class="container-fluid" id="Entete" style="height: 15vh;">
      <div class="row">
        <div class="col-md-12">
          <a href="index.php"><h1 style="text-align: center;"> <span style="color: #4D4E50;" class="fa-stack fa-lg"><i class="fa fa-square-o fa-stack-2x"></i><i style="color: #D91E18;" class="fa fa-fire fa-stack-1x"></i>
          </span>Pimp My <span style="color: #D91E18;">Fractal</span></h1></a>
        </div>
      </div>
    </div>
  </header>
  <div class="container" style="padding: 0; margin-top: 25px; margin-bottom: 25px;">
    <div class="col-md-4">
      <div class="col-md-12" id="Main">
        <fieldset class="title">
          <legend><i class="fa fa-info"></i>  HowTo</legend>
        </fieldset>
        <form method="GET" action="">
          <div class="col-md-12">
            <input value ="50" min="1" step="0.1" name="iteration" type="number" class="form-control" placeholder="Nombre d'itération" aria-describedby="basic-addon1" style="margin-top: 15px;"> <small style="padding-left: 5px">*Par défaut 50</small>
          </div>
          <div class="col-md-12">
            <input min="0" value="2" name="degree" type="number" step="0.1" class="form-control" placeholder="Degré" aria-describedby="basic-addon1" style="margin-top: 15px;"> <small style="padding-left: 5px">*Par défaut 2</small>
          </div>
          <button type="submit" style="margin-top: 15px;" class="btn btn-default col-md-10 col-md-offset-1"><i class="fa fa-share-square-o"></i> Generate</button>
        </form>
      </div>
      <div class="col-md-12" id="Main" style="margin-top: 25px; margin-bottom: 25px;">
        <fieldset class="title">
          <legend><i class="fa fa-external-link"></i> Link(s)</legend>
        </fieldset>
        <ul id="listelinkgs">
          <li><a href="https://fr.wikipedia.org/wiki/Ensemble_de_Mandelbrot" class="links"><i class="fa fa-link"></i> Mandelbrot Set</a></li>
          <li><a href="https://openclassrooms.com/courses/concevez-votre-site-web-avec-php-et-mysql/creer-des-images-en-php" class="links"><i class="fa fa-link"></i> Bibliothèque GD</a></li>
          <li><a href="https://en.wikipedia.org/wiki/Multibrot_set" class="links"><i class="fa fa-link"></i> Formules Mandelbrot</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-7" style="margin-bottom: 25px;">
      <h4 style="width: 640px; border: 1px solid #edeeee; color: white; background-color: #333; padding: 10px; margin-top: 0;"><i class="fa fa-bookmark-o"></i> Fractal</h4>
      <div style="height: 480px; width: 640px; border: 1px solid #edeeee; background-color: #551212;">
        <?php 
        session_start();
        $_SESSION['get'] = $_GET;
        ?>
        <img src="fractal.php">
      </div>
    </div>
  </div>
  <div class="container" style="padding: 0; margin-top: 25px;">
    <div class="col-md-11" style="margin-top: 0px; margin-bottom: 25px;">
      <div id="Main" ><i class="fa fa-wrench"></i> Built and Designed by MMY, 2015-2016 <i class="fa fa-copyright"></i>.
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
</body>
</html>