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
                    <td style="padding:20px; text-align:center;">Customer Name</td>
                    <td style="padding:20px; text-align:center;">Phone</td>
                    <td style="padding:20px; text-align:center;">Address</td>
                    <td style="padding:20px; text-align:center;">Animal Name</td>
                    <td style="padding:20px; text-align:center;">Harga</td>
                    <td style="padding:20px; text-align:center;">Status</td>
                    <td style="padding:20px; text-align:center;">Image</td>
                    <td style="padding:20px; text-align:center;">Action</td>
                </tr>

                @foreach($payment as $payments)

                <tr style="background-color:black; align:center">
                    <td style="padding:20px; vertical-align:middle;">{{$loop->iteration}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{$payments->name}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{$payments->phone}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{$payments->address}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{$payments->product_name}}</td>
                    <td style="padding:20px; vertical-align:middle;">{{ formatRupiah($payments->price) }}</td>
                    <!-- <td style="padding:20px; vertical-align:middle;">{{$payments->status}}</td> -->
                    <td style="padding:20px; vertical-align:middle;">
                      <div style="display: inline-block; font-size: 0.875rem;">
                          @if ($payments->status == 'Pending')
                              <span class="badge bg-label-warning me-1">{{ $payments->status }}</span>
                          @elseif ($payments->status == 'Disetujui')
                              <span class="badge bg-label-success me-1">{{ $payments->status }}</span>
                          @elseif ($payments->status == 'Ditolak')
                              <span class="badge bg-label-danger me-1">{{ $payments->status }}</span>
                          @endif
                      </div>
                      <div class="btn-container">
                          @if ($payments->status == 'Pending')
                              <form action="{{ route('orders.updateStatus', $payments->id) }}" method="post">
                                  @csrf
                                  @method('PUT')
                                  <input type="hidden" name="status" value="Disetujui">
                                  <button class="btn btn-sm btn-success" type="submit">Terima</button>
                              </form>
                          @endif
                      </div>
                      <div class="btn-container">
                          @if ($payments->status == 'Pending')
                              <form action="{{ route('orders.updateStatus', $payments->id) }}" method="post">
                                  @csrf
                                  @method('PUT')
                                  <input type="hidden" name="status" value="Ditolak">
                                  <button class="btn btn-sm btn-secondary" type="submit">Tolak</button>
                              </form>
                          @endif
                      </div>
                    </td>
                    <td style="padding:20px; vertical-align:middle;">
                        <a href="{{ asset($payments->image) }}" target="_blank">
                            <img height="200" width="200" src="{{ asset($payments->image) }}" alt="Payment">
                        </a>
                    </td>
                    <td>
                      <div class="btn-container">
                          <form action="{{ url('deleteorder/' . $payments->id) }}" method="POST">
                              @csrf
                              @method('DELETE')
                              <button type="submit" class="btn btn-danger">Delete</button>
                          </form>
                      </div>
                  </td>
                </tr>
                @endforeach
            </table>

            </div>
        </div>

          <!-- partial -->
        @include('admin.script')
  </body>
</html>