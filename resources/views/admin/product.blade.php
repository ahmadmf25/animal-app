<x-app-layout>
    
</x-app-layout>

<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.css')

    <style type="text/css">
form {
    max-width: 600px;
    margin: 0 auto;
    padding: 20px;
    background: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Styling for form groups */
.form-group {
    margin-bottom: 15px;
}

.form-group label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
    color: #333;
}

.form-group input,
.form-group textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

.form-group textarea {
    resize: vertical; /* Allows vertical resizing only */
}

.form-group input[type="file"] {
    padding: 3px;
}

.btn-submit {
    background-color: #28a745;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    font-weight: bold;
}

.btn-submit:hover {
    background-color: #218838;
}
    </style>
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
         <div class="container-fluid page-body-wrapper">
          <div class="container" align="center">
          <h1 class="title">Add Product</h1>

          @if(session()->has('message'))

          <div class="alert alert-success">

          <button type="button" style="float:right" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          {{ session()->get('message') }}

          </div>

          @endif

          <form action="{{url('uploadproduct')}}" method="POST" enctype="multipart/form-data">

          @csrf
            <div class="form-group">
                <label for="title">Product Title</label>
                <input type="text" id="title" name="title" placeholder="Give a Product Title" style="color:black" required>
            </div>
            
            <div class="form-group">
                <label for="price">Price</label>
                <input type="number" id="price" name="price" placeholder="Masukan Harga" style="color:black" required>
            </div>
            
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Masukan Deskripsi Hewan" rows="4" style="color:black" required></textarea>
            </div>
            
            <div class="form-group">
                <label for="quantity">Quantity</label>
                <input type="number" id="quantity" name="quantity" placeholder="Masukan Jumlah" style="color:black" required>
            </div>
            
            <div class="form-group">
                <label for="file">Upload Image</label>
                <input type="file" id="file" name="file">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn-submit">Submit</button>
            </div>
          </form>

          </div>
         </div>
          <!-- partial -->
        @include('admin.script')
  </body>
</html>