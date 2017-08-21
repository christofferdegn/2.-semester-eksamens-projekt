<?php
    include("head.php");
?>

    <title>Environments for Learning</title>
    <meta name="description" content="Environments for Learning - Møbelproducent der skaber nytæntkende skoleinventar, som fremmer læring, leg og bevægelse. skolemøblerne er ergonomiske og betrukket med filt for at reducere støj.">

</head>

<body>


<?php
    include("header.php");
?>

<?php
    include("navbar.php");
?>
<div id="carouselcontainer" class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="./images/t1.jpg" alt="Grauballe skole" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="itemtitle">Grauballe skole</h3>
          <p class="itemparagraph">På Grauballe Skole har de indrettet deres klasselokaler med få borde.</p>
          <p class="itemlink"><a class="itemlinktext" href="grauballeskole">Læs hvordan</a><p>
        </div>
      </div>

      <div class="item">
        <img src="./images/t2.jpg" alt="Valdemarskolen" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="itemtitle">Valdemarskolen</h3>
          <p class="itemparagraph">På Valdemarskolen foregår den klassiske skriveundervisning ikke kun ved borde.</p>
          <p class="itemlink"><a class="itemlinktext" href="valdemarskolen.php">Læs hvordan</a><p>
        </div>
      </div>
    
      <div class="item">
        <img src="./images/pige3.jpg" alt="Odder Skole" style="width:100%;">
        <div class="carousel-caption">
          <h3 class="itemtitle">Odder skole</h3>
          <p class="itemparagraph">På Odder skole har de skabt hyggelige læsehjørner til eleverne.</p>
          <p class="itemlink"><a class="itemlinktext" href="odderskole.php">Læs hvordan</a><p>
        </div>
      </div>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="container">
  <div class="row">
    <div id="indextextcol" class="col-xs-12 col-md-12">
      <p id="indextext"> Vi laver inventar som tager udgangspunkt i børnene, og det vil være mål alt hvad vi laver. <br>Møblerne afprøves af vores flinke små brugere og vi sætter os derefter ved tegnebordet <br> og finpudser møblerne til perfektion. <p>
    </div>
  </div>
</div> 


<?php
    include("footer.php");
?>

<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.js"></script> 
<script src="./js/javascript.js"></script> 

</body>