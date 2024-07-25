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
<!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

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
    </style>

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
              <li class="nav-item">
                <a class="nav-link" href="/">Home
                  <span class="sr-only">(current)</span>
                </a>
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

                    <!-- <li class="nav-item active">
                      <a class="nav-link" href="products.html">Our Products</a>
                    </li> -->

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
    </header>

    <!-- Page Content -->
    <div class="page-heading products-heading header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>New Reptile</h4>
              <h2>Animal Ku - Reptile Shop</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="filters">
              <ul>
                  <li class="active" data-filter="*">All Products</li>
              </ul>
            </div>
          </div>
          <div class="row product-grid">
        @foreach($data as $product)
        <div class="col-md-4">
          <div class="product-item">
            <a href="#"><img src="/productimage/{{$product->image}}" alt=""></a>
            <div class="down-content">
              <a href="#"><h4>{{$product->title}}</h4></a>
              <p>{{formatRupiah($product->price)}}<p>
              <p>{{ Str::limit($product->description, 50)}}</p>
              <form action="{{url('addcart', $product->id)}}" method="POST">
                @csrf
                <input class="btn btn-primary" type="submit" value="Add Cart">
              </form>
            </div>
          </div>
        </div>
        @endforeach
            @if(method_exists($data,'links'))
            <div class="d-flex justify-content-center">
            {!! $data->links() !!}
            </div>
            @endif
        </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright &copy; </p>
            
            <!-- - Design: <a rel="nofollow noopener" href="https://templatemo.com" target="_blank">TemplateMo</a></p> -->
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


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
