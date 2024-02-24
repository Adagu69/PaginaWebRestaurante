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
                    <a href="Reserva.php" class="btn btn-primary py-2 px-4">Reservar</a>
                </div>
            </nav>


            <div class="container-xxl py-5 bg-dark hero-header mb-5">
                <div class="container text-center my-5 pt-5 pb-4">
                    <h1 class="display-3 text-white mb-3 animated slideInDown">Contactanos</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Paginas</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Contactos</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->


        <!-- Contact Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="section-title ff-secondary text-center text-primary fw-normal">Contactanos</h5>
                    <h1 class="mb-5">Contacto Para Cualquier Consulta</h1>
                </div>
                <div class="row g-4">
                    <div class="col-12">
                        <div class="row gy-4">
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Reservacion</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>reservaciones@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">General</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>cafeExpress@gmail.com</p>
                            </div>
                            <div class="col-md-4">
                                <h5 class="section-title ff-secondary fw-normal text-start text-primary">Consultas</h5>
                                <p><i class="fa fa-envelope-open text-primary me-2"></i>consultas@gmail.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeIn" data-wow-delay="0.1s">
                        <iframe class="position-relative rounded w-100 h-100"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.7655629025057!2d-77.08137705536058!3d-12.059644869329691!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c93f2b73062d%3A0x4914faa4a9416f85!2sRestaurante%20Rico%20Rico!5e0!3m2!1ses!2spe!4v1695491974453!5m2!1ses!2spe"
                            frameborder="0" style="min-height: 350px; border:0;" allowfullscreen="" aria-hidden="false"
                            tabindex="0"></iframe>
                    </div>
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">

<form action="enviar-cita.php" onsubmit="return validarTodo()"  method="post">
    <div class="row g-3">
      <div class="col-md-6">
        <div class="form-floating">
          <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
          <label for="name">Tu nombre</label>
        </div>
      </div>
      <div class="col-md-6">
        <div class="form-floating">
          <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
          <label for="email">Tu correo</label>
        </div>
      </div>
      <div class="col-12">
        <div class="form-floating">
          <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px"></textarea>
          <label for="message">Mensaje</label>
        </div>
      </div>
      <div class="col-md-6">
      <div class="form-check form-check-inline">           
    ¿Seleccione un proveedor de correo? 
        <br> 
        <br>          
    <input class="form-check-input" type="radio" id="gmail" name="emailProvider" value="gmail">
    <label for="gmail">Gmail</label>
    </div>

    <div class="form-check form-check-inline"> 
    <input class="form-check-input" type="radio" id="outlook" name="emailProvider" value="outlook">
    <label for="outlook">Outlook</label>
    <br>
        </div>
      </div>
      <div class="col-12">
        <input type="hidden" id="mensaje" name="mensaje" value="">
        <button class="btn btn-primary w-100 py-3" type="submit">Enviar mensaje</button>
      </div>
    </div>
</form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->


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
        <a href="index.php" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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

    <script>
  function validarTodo() {
  const nameInput = document.getElementById("name");
  const emailInput = document.getElementById("email");
  const messageInput = document.getElementById("message");
  const emailProviderInputs = document.getElementsByName("emailProvider");
  let devolver = true;

  if (nameInput.value.trim() === "") {
    alert("El campo 'Tu nombre' no debe estar vacío.");
    devolver = false;
  }

  if (emailInput.value.trim() === "") {
    alert("El campo 'Tu correo' no debe estar vacío.");
    devolver = false;
  } else if (!validarEmail(emailInput.value)) {
    alert("El correo no tiene el formato adecuado.");
    devolver = false;
  }

  let emailProviderSelected = false;
  for (const emailProviderInput of emailProviderInputs) {
    if (emailProviderInput.checked) {
      emailProviderSelected = true;
      break;
    }
  }

  if (!emailProviderSelected) {
    alert("Seleccione un proveedor de correo.");
    devolver = false;
  }

  if (messageInput.value.trim() === "") {
    alert("El campo 'Mensaje' no debe estar vacío.");
    devolver = false;
  }

  return devolver;
}

function validarEmail(email) {
  const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,30}$/;
  return emailPattern.test(email);
}
    </script>

    <!-- Template Javascript -->

    <script src="js/main.js"></script>
</body>

</html>