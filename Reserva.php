<?php
require_once 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    // Validar los datos del formulario de reserva
    $reservaData = array(
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'datetime' => $_POST['datetime'],
        'select1' => $_POST['select1'],
        'options1' => $_POST['options1'],
        'options2' => $_POST['options2'],
        'options3' => $_POST['options3'],
        'message' => $_POST['message']
    );

    $service = new usuarioServicio();
    $resultadoReserva = $service->validar_reserva($reservaData);

    if ($resultadoReserva->success) {
        // La reserva se realizó correctamente, puedes redirigir o mostrar un mensaje de éxito
        header("Location: reserva_exitosa.php");
       // echo "Reserva exitosa!";
    } else {
        // Hubo un error al hacer la reserva, puedes manejarlo aquí
        echo "Error al hacer la reserva: " . $resultadoReserva->message;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Restoran - Bootstrap Restaurant Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&family=Pacifico&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                <h1 class="text-primary m-0"> <img src="img/logo.jpg" alt="Logo"> Cafe Express</h1>


                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0 pe-4">
                        <a href="index.php" class="nav-item nav-link active">Home</a>
                        <a href="sobrenosotros.php" class="nav-item nav-link">Sobre nosotros</a>
                        <a href="servicio.php" class="nav-item nav-link">Servicios</a>
                        <a href="menu.php" class="nav-item nav-link">Menu</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Paginas</a>
                            <div class="dropdown-menu m-0">
                                <a href="Reserva.php" class="dropdown-item">Reserva</a>
                                <a href="equipo.php" class="dropdown-item">Nuestro equipo</a>
                                <a href="testimonios.php" class="dropdown-item">Testimonios</a>
                            </div>
                        </div>
                        <a href="contact.php" class="nav-item nav-link">Contactos</a>

                        </div>
                    
                </div>
            </nav>

            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Reservacion</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Paginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Reservacion</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Reservation Start -->

       
        
        <div class="container-xxl py-5 px-0 wow fadeInUp" data-wow-delay="0.1s">
            <div class="row g-0">
                <div class="col-md-6">
                    <div class="video">
                        <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=xPPLbEFbCAo" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                    </div>
                </div>
                
                <div class="col-md-6 bg-dark d-flex align-items-center">
                    <div class="p-5 wow fadeInUp" data-wow-delay="0.2s">
                        <h5 class="section-title ff-secondary text-start text-primary fw-normal">Reservacion</h5>
                        <h1 class="text-white mb-4">Libro de reservaciones online</h1>


                        <form method="post"> <!-- Este es el formulario principal -->
            <div class="row g-3">   
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="name" name="name" placeholder="Tu nombre">
                        <label for="name">Tu nombre</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Tu email">
                        <label for="email">Tu email</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating date" id="date3" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" id="datetime" name="datetime" placeholder="Date & Time" data-target="#date3" data-toggle="datetimepicker" />
                        <label for= "datetime">Dia & Hora</label>
                    </div>
                </div>
                
                <div class="col-md-6">
    <div class="form-floating">
    <select class="form-select" id="select1" name="select1" onchange="showOptions(this.value)">
    <option value="">Seleccionar</option>
    <option value="1">Persona 1</option>
    <option value="2">Persona 2</option>
    <option value="3">Persona 3</option>
</select>
        <label for="select1">Numero de personas</label>
    </div>
</div>
<div class="col-md-6">
    <div class="form-floating" id="options1" style="display: none;">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options1" value="1" id="adultoMayor1" onchange="hideOptions(1)">
            <label class="form-check-label" for="adultoMayor1">Adulto Mayor</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options1" value="2" id="adulto1" onchange="hideOptions(1)">
            <label class="form-check-label" for="adulto1">Adulto</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options1" value="3" id="nino1" onchange="hideOptions(1)">
            <label class="form-check-label" for="nino1">Niño</label>
        </div>
    </div>
    <div class="form-floating" id="options2" style="display: none;">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options2" value="1" id="adultoMayor2" onchange="hideOptions(2)">
            <label class="form-check-label" for="adultoMayor2">Adulto Mayor</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options2" value="2" id="adulto2" onchange="hideOptions(2)">
            <label class="form-check-label" for="adulto2">Adulto</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options2" value="3" id="nino2" onchange="hideOptions(2)">
            <label class="form-check-label" for="nino2">Niño</label>
        </div>
    </div>
    <div class="form-floating" id="options3" style="display: none;">
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options3" value="1" id="adultoMayor3" onchange="hideOptions(3)">
            <label class="form-check-label" for="adultoMayor3">Adulto Mayor</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options3" value="2" id="adulto3" onchange="hideOptions(3)">
            <label class="form-check-label" for="adulto3">Adulto</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="options3" value="3" id="nino3" onchange="hideOptions(3)">
            <label class="form-check-label" for="nino3">Niño</label>
        </div>
    </div>
</div>
                <div class="col-12">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Special Request" id="message" name="message" style="height: 100px"></textarea>
                        <label for="message">Solicitud especial</label>
                    </div>
                </div>
                <div class="col-12">
                    <button class="btn btn-primary w-100 py-3" type="submit" name="register" value="Enviar">Reservar Ahora</button>
                </div>
            </div>
        </form>

            </div>
        </div>
    
        

        <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- 16:9 aspect ratio -->
                        <div class="ratio ratio-16x9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=xPPLbEFbCAo" id="video" allowfullscreen allowscriptaccess="always"
                                allow="autoplay"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Reservation Start -->
        

        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Compañia</h4>
                        <a class="btn btn-link" href="sobrenosotros.php">Sobre nosotros</a>
                        <a class="btn btn-link" href="contact.php">Contactanos</a>
                        <a class="btn btn-link" href="Reserva.php">Reservaciones</a>
                        <a class="btn btn-link" href="index.php">Politica de privacidad</a>
                        <a class="btn btn-link" href="index.php">Terminos y condiciones</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Contacto</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Av. Venezuela</p>
                        <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>989022755</p>
                        <p class="mb-2"><i class="fa fa-envelope me-3"></i>cafeExpress@gmail.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://twitter.com/?lang=es"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Horario de apertura</h4>
                        <h5 class="text-light fw-normal">Lunes - Sabados</h5>
                        <p>09AM - 09PM</p>
                        <h5 class="text-light fw-normal">Domingo</h5>
                        <p>10AM - 06PM</p>
                    </div>

                    <!---div class="col-lg-3 col-md-6">
                        <h4 class="section-title ff-secondary text-start text-primary fw-normal mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative mx-auto" style="max-width: 400px;">
                            <input class="form-control border-primary w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div--->
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Cafe Express</a>, Reservado.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Diseñado por <a class="border-bottom" href="">Codex</a>
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                                <a href="index.php">Cookies</a>
                                <a href="index.php">Ayuda</a>
                                <a href="index.php">FQAs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    <script src="js/script2.js"></script>
</body>

</html>