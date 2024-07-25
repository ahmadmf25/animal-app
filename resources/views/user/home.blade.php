<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>Animal Ku | Reptile Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <style>
    .product-item {
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
      margin-bottom: 20px;
    }

    .product-item img {
      width: 100%; 
      height: 200px; 
      object-fit: cover;
    }

    .down-content {
      margin-top: 10px;
    }

    .product-grid {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .product-grid .col-md-4 {
      flex: 0 0 32%;
      max-width: 32%;
    }
    .search-form {
      display: flex;
      align-items: center;
      float: right;
      padding: 20px;
    }

    .search-form .form-control {
      margin-right: 10px;
    }
    .right-image {
    display: flex;
    justify-content: center;
}
    </style>
</head>
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Animal <em>Ku</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                      <a class="nav-link" href="{{url('ourproduct')}}">Our Products</a>
                    </li> 
              <!-- <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li> -->

              <li>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth

                    <li class="nav-item">
                      <a class="nav-link" href="{{url('showcart')}}">Cart[{{$count}}]</a>
                    </li>
                    <x-app-layout>
    
                    </x-app-layout>
    
                    @else
                        <li> <a class="nav-link" href="{{ route('login') }}" >Log in</a> </li>

                        @if (Route::has('register'))
                        <li>  <a class="nav-link" href="{{ route('register') }}">Register</a> </li>
                        @endif
                    @endauth
                </div>
                @endif
              </li>
            </ul>
          </div>
        </div>
      </nav>

      @if(session()->has('message'))

        <div class="alert alert-success alert-dismissible fade show" role="alert" align="center">

        <button type="button" style="float:right" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
          <span aria-hidden="true"></span>
        </button>
        {{ session()->get('message') }}
        </div>

      @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2>New Reptile On Sale</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Product -->
    @include('user.product')
    <!-- End Product -->

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Animal Ku | Reptile Shop</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Looking for the best Reptile Store?</h4>
              <p>
              Selamat datang di Animal Ku, tempat di mana kami mengabdikan diri untuk menghadirkan keajaiban dan keindahan dunia reptil kepada Anda.</br>
              Di sini, kami tidak hanya menjual hewan reptil, tetapi juga berkomitmen untuk menyediakan pengalaman belanja yang informatif dan bermakna.</br>
              Kami percaya bahwa setiap hewan reptil adalah ciptaan unik yang pantas dijelajahi dan dipahami. Dengan koleksi yang luas dan pengetahuan mendalam tentang perilaku serta kebutuhan mereka, kami siap membantu Anda menjalani petualangan baru dalam memelihara reptil.</br>
              Setiap hewan yang kami tawarkan telah dipilih dengan cermat untuk memastikan kesehatan dan kualitasnya. Dari kadal eksotis hingga ular menakjubkan, kami berkomitmen untuk menyediakan yang terbaik bagi komunitas pecinta hewan reptil.</br>
              Bergabunglah dengan Animal Ku dan temukan kecantikan serta keunikan dari dunia reptil. Kami tidak hanya menjual hewan, tetapi juga membuka pintu untuk memahami lebih dalam tentang kehidupan dan kebutuhan mereka.</br>
              Terima kasih telah memilih Animal Ku sebagai mitra Anda dalam menjelajahi dunia reptil. Kami siap memberikan pengalaman berbelanja yang memuaskan dan edukatif.</br>
              </p>
              <!-- <a href="about.html" class="filled-button">Read More</a> -->
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/logo1.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
       
    <!-- <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; 2020 Sixteen Clothing Co., Ltd.
            
            - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer> -->


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
      function clearField(t){                   //declaring the array outside of the
      if(! cleared[t.id]){                      // function makes it static and global
          cleared[t.id] = 1;  // you could use true and false, but that's more typing
          t.value='';         // with more chance of typos
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
