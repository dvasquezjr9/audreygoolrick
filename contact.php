<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" type="text/css" href="css/styles.css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/lightbox.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Handlee|Lobster+Two|Sacramento|Shadows+Into+Light&display=swap" rel="stylesheet">

  <script type="text/javascript" src="js/lightbox-plus-jquery.min.js"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
</head>

<body>
  <!-- NAVIGATION BAR -->
  <section class="navigation">
    <nav class="navbar navbar-expand-lg navbar-light">

      <a class="navbar-brand" href="#">
        <img src="images/logo1.png" alt="">
      </a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">Home</a>
          </li>
          <li class="nav-item">


          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              My Photos
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="alt-non-silver.html">Alternative Non-Silver Prints</a>
              <a class="dropdown-item" href="art-photos.html">Art Photography</a>
              <a class="dropdown-item" href="commercial-properties.html">Commercial Properties</a>
              <a class="dropdown-item" href="pets-and-horses.html">Pets and Horses</a>
              <a class="dropdown-item" href="portraits.html">Portraits</a>
              <a class="dropdown-item" href="travel-photography.html">Travel Photography</a>
              <a class="dropdown-item" href="wildlife-and-nature.html">Wildlife and Nature</a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact Me</a>
          </li>
        </ul>

      </div>
    </nav>
  </section>
  <!-- END OF NAVIGATION BAR -->

  <!-- CONTACT FORM -->
  <section id="contact">
    <div class="container">

      <div class="row">
        <div class="col-md-6 offset-md-3">
          <h1>Contact Form</h1>

          <p>Send a message via the form below</p>

          <form id="contact-form" name="contact-form" action="mail.php" method="POST">

            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder="Your name">
            </div>

            <div class="form-group">
              <input type="text" id="email" name="email" class="form-control" placeholder="Your email">
            </div>

            <div class="form-group">
              <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject">
            </div>

            <div class="form-group">
              <textarea type="text" id="message" name="message" rows="5" class="form-control" placeholder="Message"></textarea>
            </div>

            <div align="center">
              <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>

          </form>

        </div>
      </div>

    </div>
  </section>
  <!-- END OF CONTACT FORM -->

  <!-- FOOTER -->
  <section class="foot">
    <div class="container-fluid">
      <div class="row">
        <div class=" feature-box col-lg-4 col-md-4 col-sm-4">
          <i class="fas fa-map-marker-alt"></i>
          <p class="ft1">Cypress, Texas</p>
        </div>

        <div class="feature-box col-lg-4 col-md-4 col-sm-4">
          <i class="fas fa-phone"></i>
          <p class="ft1">404-488-3898</p>
        </div>

        <div class="feature-box col-lg-4 col-md-4 col-sm-4">
          <i class="fas fa-envelope"></i>
          <p class="ft1">rhette17@bellsouth.net</p>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col foot-mar">
        <p class="copyright">NONE of images in this website were ever manipulated using Photoshop, or any other software. </p>
      </div>
    </div>
    </div>

    <div class="row">
      <div class="col foot-mar">
        <p class="copyright">© Copyright 2019 Audrey Goolrick</p>
      </div>
    </div>
    </div>
  </section>
  <!-- END OF FOOTER -->

  <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>

</html>
