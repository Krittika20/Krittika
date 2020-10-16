<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Krittika Chaturvedi | Portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,100,400" rel="stylesheet" type="text/css" />
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<!--Montserrat Font-->    
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@800&display=swap" rel="stylesheet">
<!--Font-awesome-->
    <script src="https://kit.fontawesome.com/240f4d39db.js" crossorigin="anonymous"></script>
  <title>Krittika Chaturvedi | Portfolio</title>
  <link rel="stylesheet" href="style.css">
 <style>
  body{background-image: url("cool-background.png");

    }
  </style>

</head>
<body>

  <!-- ======= Header ======= -->
<div class="row">
<div class="col-4  sidebar">
  <section id="header" class="navbar navbar-expand-lg navbar-dark  ">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fas fa-bars"></i>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <div class="d-flex flex-column bd-highlight mb-3">

      <div class="profile">
        <img src="main-imag.jpeg"  width="220px" height="200px" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="index.html">Krittika Chaturvedi</a></h1>
        <div class="social-links mt-3 ">
          <a href="https://www.instagram.com/kritt_chat/?hl=en" class="instagram"><i class="fab fa-instagram"></i></i></a>
          <a href="https://github.com/Krittika20" class="github"><i class="fab fa-github"></i></a>
          <a href="https://www.linkedin.com/in/krittika-chaturvedi/" class="linkedin"><i class="fab fa-linkedin"></i></i></a>
        </div>
      </div>

      <nav class="nav-menu">
        <ul class="mr-auto">
          <li  ><a href="index.html"><i class="fas fa-home "></i>  <span>Home</span></a></li>
          <li ><a href="about.html"><i class="far fa-user "></i>  <span>About</span></a></li>
          <li ><a href="resume.html"><i class="far fa-file "></i>  <span>Resume</span></a></li>
          <li ><a href="contact.php"><i class="far fa-envelope "></i>  <span>Contact</span></a></li>
        </ul>
      </nav><!-- .nav-menu -->
    </div>
  </div>
  </section>
  </div>
<!-- End Header -->
<!--Home-->
<div class="col-8">
<section id="contact" class="contact">
<h2 class="contact">Contact</h2><br><br>
      <div class="container">
          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
            <form action="process.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="name">Your Name</label>
                  <input  type="text" name="UName" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="name">Your Email</label>
                  <input   type="email" class="form-control" name="Email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <label for="name">Subject</label>
                <input   type="text" class="form-control" name="Subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <label for="name">Message</label>
                <textarea  class="form-control" name="msg" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <?php
                if(isset($_GET['error']))
                {
                  $Msg = "Please Fill the Blanks";
                  echo '<div class="alert alert-danger">'.$Msg.'</div>"';
                }
                if(isset($_GET['success']))
                {
                  $Msg = "Your Message Has Been Sent !";
                  echo '<div class="alert alert-danger">'.$Msg.'</div>"';
                }
                
                
                ?>
              </div>
              <div class="text-center"><button type="submit" name="btn-send">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->



</div>
</div>
<script src="index.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>

