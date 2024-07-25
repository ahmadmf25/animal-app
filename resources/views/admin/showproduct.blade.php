<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div style="padding-bottom:20px" class="container-fluid page-body-wrapper">
            <div class="container" align="center">

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" style="float:right" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          {{ session()->get('message') }}

          </div>

          @endif

            <table>
                <tr style="background-color:brown; align-items:center">
                    <td style="padding:20px; text-align:center;">No</td>
                    <td style="padding:20px; text-align:center;">Title</td>
                    <td style="padding:20px; text-align:center;">Description</td>
                    <td style="padding:20px; text-align:center;">Quantity</td>
                    <td style="padding:20px; text-align:center;">Price</td>
                    <td style="padding:20px; text-align:center;">Image</td>
                    <td style="padding:20px; text-align:center;">Update</td>
                    <td style="padding:20px; text-align:center;">Delete</td>
                </tr>

                @foreach($data as $product)

                <tr style="background-color:black; align:center">
                    <td style="padding:20px; vertical-align:middle;">{{$loop->iteration}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{$product->title}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{$product->description}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{$product->quantity}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{formatRupiah($product->price)}}</td>
                    <td style="padding:20px; vertical-align:middle;">
                        <img heigt="200" width="200"src="/productimage/{{$product->image}}" alt="">
                    </td>
                    <td><a class="btn btn-primary"href="{{ url('updateview/' . $product->id) }}">Update</a></td>
                    <td><a class="btn btn-danger" href="{{ url('deleteproduct/' . $product->id) }}">Delete</a></td>
                </tr>

                @endforeach
            </table>

            </div>
        </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>