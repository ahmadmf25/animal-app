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
      header {
        position: absolute;
        z-index: 99999;
        width: 100%;
        height: 80px;
        background-color: #232323;
        -webkit-transition: all 0.3s ease-in-out 0s;
          -moz-transition: all 0.3s ease-in-out 0s;
          -o-transition: all 0.3s ease-in-out 0s;
          transition: all 0.3s ease-in-out 0s;
      }
      header .navbar {
        padding: 17px 0px;
      }
      .background-header .navbar {
        padding: 17px 0px;
      }
      .background-header {
        top: 0;
        position: fixed;
        background-color: #fff!important;
        box-shadow: 0px 1px 10px rgba(0,0,0,0.1);
      }
      .background-header .navbar-brand h2 {
        color: #121212!important;
      }
      .background-header .navbar-nav a.nav-link {
        color: #1e1e1e!important;
      }
      .background-header .navbar-nav .nav-link:hover,
      .background-header .navbar-nav .active>.nav-link,
      .background-header .navbar-nav .nav-link.active,
      .background-header .navbar-nav .nav-link.show,
      .background-header .navbar-nav .show>.nav-link {
        color: #f33f3f!important;
      }
      .navbar .navbar-brand {
        float: 	left;
        margin-top: -12px;
        outline: none;
      }
      .navbar .navbar-brand h2 {
        color: #fff;
        text-transform: uppercase;
        font-size: 24px;
        font-weight: 700;
        -webkit-transition: all .3s ease 0s;
          -moz-transition: all .3s ease 0s;
          -o-transition: all .3s ease 0s;
          transition: all .3s ease 0s;
      }
      .navbar .navbar-brand h2 em {
        font-style: normal;
        color: #f33f3f;
      }
      #navbarResponsive {
        z-index: 999;
      }
      .navbar-collapse {
        text-align: center;
      }
      .navbar .navbar-nav .nav-item {
        margin: 0px 15px;
      }
      .navbar .navbar-nav a.nav-link {
        text-transform: capitalize;
        font-size: 15px;
        font-weight: 500;
        letter-spacing: 0.5px;
        color: #fff;
        transition: all 0.5s;
        margin-top: 5px;
      }
      .navbar .navbar-nav .nav-link:hover,
      .navbar .navbar-nav .active>.nav-link,
      .navbar .navbar-nav .nav-link.active,
      .navbar .navbar-nav .nav-link.show,
      .navbar .navbar-nav .show>.nav-link {
        color: #fff;
        padding-bottom: 25px;
        border-bottom: 3px solid #f33f3f;
      }
      .navbar .navbar-toggler-icon {
        background-image: none;
      }
      .navbar .navbar-toggler {
        border-color: #fff;
        background-color: #fff;	
        height: 36px;
        outline: none;
        border-radius: 0px;
        position: absolute;
        right: 30px;
        top: 20px;
      }
      .navbar .navbar-toggler-icon:after {
        content: '\f0c9';
        color: #f33f3f;
        font-size: 18px;
        line-height: 26px;
        font-family: 'FontAwesome';
      }
    /* .product-item img {
      width: 200px; 
      height: 200px; 
      object-fit: cover;
    } */
    .table-container {
      margin-top: 120px;
      text-align: center;
    }
    .product-item table {
        margin: 0 auto;
        border-collapse: collapse;
    }
    .product-item th, .product-item td {
        padding: 20px;
        text-align: center;
        border: 1px solid #ddd;
    }
    .product-item th {
        background-color: gray;
    }
    .product-item tr:nth-child(even) {
        background-color: #f9f9f9;
    }
    </style>
</head>
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <!-- <link rel="stylesheet" href="assets/css/templatemo-sixteen.css"> -->

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
    <header class="fixed-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="/"><h2>Animal <em>Ku</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
              </li> 
              <li class="nav-item">
                <a class="nav-link" href="products.html">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.html">Contact Us</a>
              </li>

              <li>
                @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth

                    <li class="nav-item active">
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
          <span aria-hidden="true">&times;</span>
        </button>
        {{ session()->get('message') }}
        </div>

      @endif
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="table-container">
      <div class="product-item">
        <table>
          <tr style="background-color:gray; align-items:center">
            <td style="padding:20px; text-align:center;">No</td>
            <td style="padding:20px; text-align:center;">Animal Name</td>
            <td style="padding:20px; text-align:center;">Price</td>
            <td style="padding:20px; text-align:center;">Image</td>
            <td style="padding:20px; text-align:center;">Delete</td>
          </tr>
          @foreach($cart as $carts)
          <tr style="background-color:white; align:center">
            <td style="padding:20px; vertical-align:middle;">{{ $loop->iteration }}</td>
            <td style="padding:20px; vertical-align:middle;">{{$carts->product_title}}</td>
            <td style="padding:20px; vertical-align:middle;">{{(formatRupiah($carts->price))}}</td>
            <td style="padding:20px; vertical-align:middle;">
              <img heigt="200" width="200"src="/productimage/{{$carts->image}}" alt="">
            </td>
            <td><a class="btn btn-danger" href="{{ url('deletecart/' . $carts->id) }}">Delete</a></td>
          </tr>
          @endforeach
          <tr style="background-color: white; align: center">
              <td colspan="4" style="padding: 20px; text-align: right;">Total Price</td>
              <td style="padding: 20px;">{{ formatRupiah($totalPrice) }}</td>
          </tr>
        </table>
      </div>
      <form action="{{ url('confirm_order') }}" method="GET">
        <button type="submit" class="btn btn-success" style="margin: 20px;">Confirm Order</button>
    </form>
    </div>

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
