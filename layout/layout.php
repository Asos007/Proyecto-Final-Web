<?php 

class Layout {

  private $ispage;
  private $directory;

  function __construct($page){
    $this->isPage = $page;

    $this->directory = ( $this->isPage) ? "../" : "";
  }

  public function PrintHeader() {

    $header = <<<EOF

    <html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title> Estudiantes </title>

    <!-- Bootstrap core CSS -->
    <link href="{$this->directory}Asset\css\bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{$this->directory}Asset\css\style.css" rel="stylesheet" type="text/css">

  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Consequuntur accusantium animi dolore. Ut provident nulla nihil cumque 
                                    doloremque eos necessitatibus quam repellendus. 
                                    Odio dolor, recusandae quaerat quisquam reiciendis et ipsa.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="{$this->directory}index.php" class="navbar-brand d-flex align-items-center">
            <strong>HOME</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

EOF;
echo $header;
}

public function PrintFooter() {

    $footer = <<<EOF

    <footer class="text-muted">
    <div class="container">
      <p class="float-right">
        <a href="#">VOLVER AL INICIO</a>
      </p>
      <p>Estudiante example © JAVIDEV</p>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="{Asset\js\bootstrap.min.js"></script>


</body>
</html>

EOF;
echo $footer;
}


}

?>