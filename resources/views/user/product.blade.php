<div class="latest-products">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Latest Products</h2>
            <a href="{{url('ourproduct')}}">view all products <i class="fa fa-angle-right"></i></a>

            <div class="container">
                <form action="{{url('search')}}" method="get" class="form-inline search-form">
                    <input class="form-control" type="search" name="search" placeholder="Search">
                    <input type="submit" value="Search" class="btn btn-success">
                </form>
            </div>
          </div>
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
  </div>