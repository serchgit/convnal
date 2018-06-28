
<!DOCTYPE html>
<html lang="en">
<head>
<title>index</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/main.css">
  <link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/buttons.dataTables.min.css">
  <link rel="stylesheet" href="css/responsive.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="css/chart-1.css">
  <link rel="stylesheet" href="css/estilos.css">

  <body>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-faded fixed-top">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">EJN</a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="#"><i class="fa fa-home"></i> Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="d-flex justify-content-end mt-5">
      <h1 class="pt-4 hidden-md-down mr-5 display-4 tituloEsfuerzo">Esfuerzo Juvenil Nacional</h1>
    </div>
    <section class="d-flex flex-wrap align-items-end pad">
      <div class="col-lg-4">
        <div class="d-flex flex-column align-items-center">
          <div class="logo"><img src="images/logoFrat.jpg" width="100" class="img-fluid rounded-circle" alt="logo"></div>
          <p class="text-muted text-center titulo-logo">Fraternidad de Iglesias de Dios<br> en la República Mexicana</p>
        </div>
        <div class="articulo">
          <h4 class="text-white text-center p-2">Importante:</h4>
          <div class="p-2">
            <ul class="nav nav-tabs" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Anuncios:</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Descargas</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab">Concursos</a>
              </li>
            </ul>

            <!-- Tab panes -->
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel">
                <div class="d-flex align-items-center justify-content-between mt-2 mb-1 banner-1 col-md-10 col-lg-12 centrar">
                  <div class="py-2 px-3">
                    <p>Chavos, los queremos invitar a nuestra semana de Jóvenes 2018. Los vemos en el Templo. Dios les bendiga</p>
                  </div>
                  <a href="https://www.facebook.com/sociedad.sion/" target="blanck_"><img src="images/sion-sem100.jpg" class="" alt=""></a>
                </div>
                <div class="d-flex align-items-center justify-content-between my-1 banner-1a col-md-10 col-lg-12 centrar">
                  <a href="#"><img src="http://placeimg.com/100/100/arch" class="" alt=""></a>
                  <div class="py-2 px-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur suscipit sint</p>
                  </div>
                </div>
                <div class="d-flex align-items-center justify-content-between my-1 banner-1 col-md-10 col-lg-12 centrar">
                  <div class="py-2 px-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur suscipit sint</p>
                  </div>
                  <a href="#"><img src="http://placeimg.com/100/100/tech" class="" alt=""></a>
                </div>
                <div class="d-flex align-items-center justify-content-between my-1 banner-1a col-md-10 col-lg-12 centrar">
                  <a href="#"><img src="http://placeimg.com/100/100/nature" class="" alt=""></a>
                  <div class="py-2 px-3">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur suscipit sint</p>
                  </div>
                </div>
              </div>
              <div class="tab-pane" id="profile" role="tabpanel">
                <div class="col-lg-9 archivos centrar mt-3">
                  <p class="mb-1">Programa</p>
                  <button class="btn btn-info btn-sm mr-4">Descargar</button>
                  <a href="#" class="">Ver en linea</a>
                  <hr>
                  <p class="mb-1">Bases</p>
                  <button class="btn btn-info btn-sm mr-4">Descargar</button>
                  <a href="#" class="">Ver en linea</a>
                  <hr>
                  <p class="mb-1">Reglamento</p>
                  <button class="btn btn-info btn-sm mr-4">Descargar</button>
                  <a href="#" class="">Ver en linea</a>
                </div>
              </div>
              <div class="tab-pane" id="messages" role="tabpanel">
                <div class="d-flex flex-column p-3 tablas">
                  <button type="button" class="btn btn-warning mt-4 mb-2 btn-tabla" data-toggle="modal" data-target="#modal-1" data-tipo="Lecturas Encontradas" onclick="tabla1()">Lecturas Encontradas</button>
                  <button type="button" class="btn btn-warning my-2 btn-tabla" data-toggle="modal" data-target="#modal-1" data-tipo="Esgrima" onclick="tabla2()">Esgrima</button>
                  <button type="button" class="btn btn-warning my-2 btn-tabla" data-toggle="modal" data-target="#modal-1" data-tipo="Canto">Canto</button>
                  <button type="button" class="btn btn-warning my-2 btn-tabla" data-toggle="modal" data-target="#modal-1" data-tipo="Preguntas">Preguntas</button>
                  <button type="button" class="btn btn-warning mb-4 mt-2 btn-tabla" data-toggle="modal" data-target="#modal-1" data-tipo="Generales">General</button>
                </div>
              </div>
            </div>
                    <!-- Modal tabla-1-->
                    <div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <p class="text-info mt-3">Iglesias Participantes</p>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <div class="tabla">
                              
                            </div>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          </div>
                        </div>
                      </div>
                    </div>

          </div>
        </div>
      </div>
      <div class="col-lg-8">
        <div class="d-flex pt-5 align-items-end">
          <h1 class="mb-0">Actividades</h1>
          <div class="d-flex pb-1 ml-auto">
            <a href="https://www.facebook.com/esfuerzojuvenil/"><i class="fa fa-facebook-square mr-3 fa-lg"></i></a>
            <a href="#"><i class="fa fa-youtube mr-3 text-danger fa-lg"></i></a>
            <a href="#"><i class="fa fa-twitter text-info fa-lg"></i></a>
          </div>
        </div>
        <hr class="mt-0">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp.jpg" alt="First slide">
              <img class="d-block img-fluid hidden-sm-up" src="images/camp.jpg" width="440" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp1.jpg" alt="Second slide">
              <img class="d-block img-fluid hidden-sm-up" src="http://placeimg.com/440/220/tech/sepia" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp2.jpg" alt="Third slide">
              <img class="d-block img-fluid hidden-sm-up" src="http://placeimg.com/440/220/arch/grayscale" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid hidden-xs-down" src="images/camp3.jpg" alt="Third slide">
              <img class="d-block img-fluid hidden-sm-up" src="http://placeimg.com/440/220/arch/grayscale" alt="4 slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <div class="container my-3">
      <h3 class="display-4 text-info titulo-medio">Lorem ipsum dolor sit amet.</h3>
    </div>
    <section class="col-lg-11 d-flex flex-wrap centrar mt-3">
      <div class="col-lg-5">
        <div class="d-flex flex-wrap justify-content-around">
            <div class="col-lg-6 col-md-4 col-sm-6 mb-3">
              <div class="card card-1">
                <div class="card-block card-block-a">
                  <h3 class="card-title">Special</h3>
                  <p class="card-text">With supporting text below as a natural</p>
                  <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 mb-3">
              <div class="card card-1">
                <div class="card-block card-block-a">
                  <h3 class="card-title">Special 2</h3>
                  <p class="card-text">With supporting text below as a natural</p>
                  <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 mb-3">
              <div class="card card-1">
                <div class="card-block card-block-a">
                  <h3 class="card-title">Special 2</h3>
                  <p class="card-text">With supporting text below as a natural</p>
                  <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-6 mb-3">
              <div class="card card-1">
                <div class="card-block card-block-a">
                  <h3 class="card-title">Special 2</h3>
                  <p class="card-text">With supporting text below as a natural</p>
                  <a href="#" class="btn btn-primary btn-sm">Go somewhere</a>
                </div>
              </div>
            </div>
        </div>
      </div>
   
      <div class="col-lg-7">
        <div class="d-flex justify-content-between align-items-center rounded art-2 mb-2 banner">
          <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sit nemo fugiat consequatur corrupti quam nulla sapiente, repudiandae sint molestiae, aliquam dignissimos</p>
          <a href="#"><img src="http://placeimg.com/100/100/arch" class="rounded-circle p-2" alt=""></a>
        </div>
        <div class="d-flex justify-content-between align-items-center rounded art-2 my-2 banner">
          <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sit nemo fugiat consequatur corrupti quam nulla sapiente, repudiandae sint molestiae, aliquam dignissimos</p>
          <a href="#"><img src="http://placeimg.com/100/100/nature" class="rounded-circle p-2" alt=""></a>
        </div>
        <div class="d-flex justify-content-between align-items-center rounded art-2 my-2 banner">
          <p class="p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos sit nemo fugiat consequatur corrupti quam nulla sapiente, repudiandae sint molestiae, aliquam dignissimos</p>
          <a href="#"><img src="http://placeimg.com/100/100/people" class="rounded-circle p-2" alt=""></a>
        </div>
      </div>

    </section>
   

<footer class="d-flex flex-wrap justify-content-around text-white align-items-center pt-3">
  <div class="col-lg-3 col-md-6">
    <div class="d-flex align-items-start">
      <img src="images/logoFrat.jpg" width="50" class="img-fluid rounded-circle mr-3" alt="logo-footer">
      <p>Fraternidad de Iglesias de Dios en la República Mexicana</p>  
    </div>
    
    <p>Esfuerzo Juvenil Nacional</p>
  </div>
  <div class="col-lg-3 col-md-6 d-flex justify-content-center">
    <ul>Contacto:
      <li><a href="#" class="text-white"><i class="fa fa-home"></i> Home</a></li>
      <li>
        Laura Berenice Garcia Cruz <i>Presidenta Juvenil Nacional</i>
        <p class="m-0">Tel: 5555-5555</p>
      </li>
      <li>Lorem ipsum dolor sit amet.</li>
      <li>Lorem ipsum dolor sit amet.</li>
      <li>Lorem ipsum dolor sit amet.</li>
    </ul>
  </div>
  <div class="col-lg-3">
    <h4>Síguenos en...</h4>
    <div class="icons-footer mb-3">
      <a href="https://www.facebook.com/esfuerzojuvenil/"><i class="fa fa-facebook-square mr-3"></i></a>
      <a href="#"><i class="fa fa-youtube mr-3 text-danger"></i></a>
      <a href="#"><i class="fa fa-twitter text-info"></i></a>
    </div>
  </div>
</footer>

      <script  src="js/jquery-3.2.1.min.js"></script>
      <script src="js/tether.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/bootstrap-datepicker.min.js"></script>
      <script src="js/jquery.dataTables.min.js"></script>
      <script src="js/dataTables.buttons.min.js"></script>
      <script src="js/buttons.flash.min.js"></script>
      <script src="js/jszip.min.js"></script>
      <script src="js/pdfmake.min.js"></script>
      <script src="js/vfs_fonts.js"></script>
      <script src="js/buttons.html5.min.js"></script>
      <script src="js/buttons.print.min.js "></script>
      <script type="text/javascript" src="js/chart-1.js"></script>
      <script type="text/javascript" src="js/chart-2.js"></script>
      <script type="text/javascript" src="js/chart-3.js"></script>
      <script type="text/javascript" src="js/chart-4.js"></script>
      <script type="text/javascript" src="js/fabric.min.js"></script>
      <script type="text/javascript" src="js/FileSaver.min.js"></script>
      <script type="text/javascript" src="js/dataTables.responsive.min.js"></script>
      <script type="text/javascript" src="js/ctk.js"></script>
      <script type="text/javascript" src="js/sweetalert.min.js"></script>

    <script>
    function tabla1(){
      $.get('core/consumo.php', function(resp){
          var tabla = `<table class="table table-striped table-hover" id="table">
                        <thead>
                          <tr>
                            <td>Iglesia</td>
                            <td>Lugar</td>
                            <td>Puntuación</td>
                          </tr>
                        </thead>
                        <tbody>`;
        $.each(resp, function(indice,valor){
              tabla +=`<tr>
                        <td>${valor.Participante}</td>
                        <td>${valor.Lugar}</td>
                        <td>${valor.Puntuacion}</td>
                      </tr>`;
        });
              tabla +=  `</tbody>
                      </table>`;
            $('.tabla').html(tabla);
            $('#table').DataTable();
      },'json')
    }
    function tabla2(){
      $.get('core/consumo2.php', function(resp){
          var tabla = `<table class="table" id="table">
                        <thead>
                          <tr>
                            <td>Participante</td>
                            <td>Lugar</td>
                            <td>Puntuación</td>
                          </tr>
                        </thead>
                        <tbody>`
        $.each(resp, function(indice,valor){
              tabla +=`<tr>
                        <td>${valor.Participante}</td>
                        <td>${valor.Lugar}</td>
                        <td>${valor.Puntuacion}</td>
                      </tr>`
        })
              tabla +=  `</tbody>
                      </table>`;
            $('.tabla').html(tabla);
            $('#table').DataTable();
      },'json');
    }
    $(document).ready(function() {
     $('#myTab a').click(function (e) {
        e.preventDefault()
        $(this).tab('show')
      });


     $('.tablas').on('click','button.btn-tabla', function(ev){
      var $this = $(this);
      var concurso = $this.attr('data-tipo');

       $('#exampleModalLabel').html(concurso);
     });
    } );
    </script>
  </body>

  </html>
