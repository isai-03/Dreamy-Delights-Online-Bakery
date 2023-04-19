<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Bakery | Home</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
</head>

<body>
  <header id="home">
    <div class="container">
      <div class="hamburger-menu">
        <i class="fas fa-bars toggle"></i>
        <i class="fas fa-times toggle"></i>
      </div>
      <nav class="d-flex alighn-items-center justify-content-center justify-content-lg-between">
        <a class="navbar-brand" href="index.html">
          <h1>Dreamy Delights</h1>
          <h2>Since 1989</h2>
          
        </a>
        <ul class="nav-list text-center p-0">
          <li class="nav-item">
            <a class="nav-link" href="#home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#menu">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.html">Signup/Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#chef">Contact us</a>
          </li>
        </ul>
      </nav>
      <div class="hero-text w-100 text-white px-2 px-sm-0">
        <h1 class="display-4">Welcome</h1>
        <p class="lead mb-4">Baked goods like you've never seen before!</p>
        <a class="btn px-5 mr-2" href="home.html">Explore</a>
        
      </div>
    </div>
  </header>
  <main>
    <section id="about" class="about">
      <div class="container">
        <div class="row align-items-lg-center">
          <div class="col-12 col-md-6 text-center text-md-left" data-aos="fade-right">
            <div class="section-heading mb-3">
              <h4>Discover</h4>
              <h1 class="display-4">Our Story</h1>
            </div>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi
              quas exercitationem ullam reprehenderit. Dolore iure numquam
              molestias itaque modi culpa repellendus cum ab mollitia fugiat
              iste error adipisci ipsa quod, accusamus cupiditate quasi qui
              sint ea aut fugit assumenda! Necessitatibus reprehenderit animi
              libero tempore vero quia? Sapiente ex expedita harum.
            </p>
            <a class="btn mt-4 mb-5 mb-md-0" href="#">Find out more</a>
          </div>
          <div class="col-12 col-md-6" data-aos="fade-left">
            <img class="img-fluid" src="img/about-img.jpg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <section id="menu" class="menu">
      <div class="container">
        <div class="row text-center text-white">
          <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-up">
            <div class="shop-info">
              <i class="far fa-clock mb-3"></i>
              <h1 class="mb-4">Hours of operation</h1>
              <p>Mon to Fri: 8:00am - 6:00pm</p>
              <p>Sat to Sun: 8:00am - 1:00pm</p>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-down">
            <div class="shop-info">
              <i class="fas fa-map-marked-alt mb-3"></i>
              <h1 class="mb-4">Our Location</h1>
              <address>
                1234 First Avenue <br />
                New Haven, CT 06509
              </address>
            </div>
          </div>
          <div class="col-12 col-md-4 mb-4 mb-md-0" data-aos="fade-right">
            <div class="shop-info">
              <i class="fas fa-mobile-alt mb-3"></i>
              <h1 class="mb-4">Get in touch</h1>
              <p>Phone #: 203-123-6789</p>
              <p>Email: contact@backery.com</p>
            </div>
          </div>
        </div>
        <hr class="mt-5" />
      </div>

      <div class="container-fluid p-0">
        <div class="section-heading my-5 text-center">
          <h4 class="text-white">Our Tasty Food</h4>
          <h1 display-4>The Menu</h1>
        </div>
        <!-- Row 1 -->
        <div class="row no-gutters">
          <!-- Colum set #1 -->
          <div class="col-12 col-sm-6 col-xl-2 order-sm-1 order-xl-1">
            <img class="img-fluid" src="img/menu-item-1.jpg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-xl-2 order-sm-2 order-xl-2 point-left">
            <div class="menu-item-desc">
              <h6>$10</h6>
              <h1>The Cake</h1>
              <p>This cake is amazing! I recommend it to everyone.</p>
              <a href="#" class="btn mt-3 d-none d-xl-block">Learn More</a>
            </div>
          </div>
          <!-- Colum set #2 -->
          <div class="col-12 col-sm-6 col-xl-2 order-sm-4 order-xl-3">
            <img class="img-fluid" src="img/menu-item-2.jpg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-xl-2 order-sm-3 order-xl-4 point-left">
            <div class="menu-item-desc">
              <h6>$10</h6>
              <h1>The Cake</h1>
              <p>This cake is amazing! I recommend it to everyone.</p>
              <a href="#" class="btn mt-3 d-none d-xl-block">Learn More</a>
            </div>
          </div>
          <!-- Colum set #3 -->
          <div class="col-12 col-sm-6 col-xl-2 order-sm-5 order-xl-5">
            <img class="img-fluid" src="img/menu-item-3.jpg" alt="">
          </div>
          <div class="col-12 col-sm-6 col-xl-2 order-sm-6 order-xl-6 point-left">
            <div class="menu-item-desc">
              <h6>$10</h6>
              <h1>The Cake</h1>
              <p>This cake is amazing! I recommend it to everyone.</p>
              <a href="#" class="btn mt-3 d-none d-xl-block">Learn More</a>
            </div>
          </div>
          <!-- Row 2 -->
          <div class="row no-gutters">
            <!-- Colum set #4 -->
            <div class="col-12 col-sm-6 col-xl-2 order-sm-2 order-xl-2">
              <img class="img-fluid" src="img/menu-item-4.jpg" alt="">
            </div>
            <div class="col-12 col-sm-6 col-xl-2 order-sm-1 order-xl-1 point-right">
              <div class="menu-item-desc">
                <h6>$10</h6>
                <h1>The Cake</h1>
                <p>This cake is amazing! I recommend it to everyone.</p>
                <a href="#" class="btn mt-3 d-none d-xl-block">Learn More</a>
              </div>
            </div>
            <!-- Colum set #5 -->
            <div class="col-12 col-sm-6 col-xl-2 order-sm-3 order-xl-4">
              <img class="img-fluid" src="img/menu-item-5.jpg" alt="">
            </div>
            <div class="col-12 col-sm-6 col-xl-2 order-sm-5 order-xl-3 point-right">
              <div class="menu-item-desc">
                <h6>$10</h6>
                <h1>The Cake</h1>
                <p>This cake is amazing! I recommend it to everyone.</p>
                <a href="#" class="btn mt-3 d-none d-xl-block">Learn More</a>
              </div>
            </div>
            <!-- Colum set #6 -->
            <div class="col-12 col-sm-6 col-xl-2 order-sm-6 order-xl-6">
              <img class="img-fluid" src="img/menu-item-6.jpg" alt="">
            </div>
            <div class="col-12 col-sm-6 col-xl-2 order-sm-5 order-xl-5 point-right">
              <div class="menu-item-desc">
                <h6>$10</h6>
                <h1>The Cake</h1>
                <p>This cake is amazing! I recommend it to everyone.</p>
                <a href="#" class="btn mt-3 d-none d-xl-block">Learn More</a>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- Chef Section -->
    <section id="chef" class="contact us">
      <div class="container">
        <div class="section-heading my-5 text-center">
          <h1 display-4>Send us your query</h1>
        </div>

        <div class="row text-center">
          <div class="col-12 col-md-4" data-aos="fade-right">
            <form>
              Name:<input type="text" class="name"></br>
              Email:<input type="email" class="mail"></br>
              <textarea cols="10" rows="3"></textarea></br>
              <button>Send</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <footer class="text-center py-5">
      &copy; Bakery 2019
    </footer>
  </main>

  <script src="https://kit.fontawesome.com/cab53fa7cb.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="js/scripts.js" type="text/javascript"></script>
</body>

</html>
