@section('title') App Dashboard @endsection
@extends('backend.app')
@section('content')
  <div class="row">
    <div class="col-12 col-lg-4">
      <div class="card radius-15">
        <div class="card-body">
          <div class="d-flex mb-2">
            <div>
              <p class="mb-0 font-weight-bold">Sessions</p>
              <h2 class="mb-0">501</h2>
            </div>
            <div class="ml-auto align-self-end">
              <p class="mb-0 font-14 text-primary"><i class='bx bxs-up-arrow-circle'></i> <span>1.01% 31 days
                  ago</span>
              </p>
            </div>
          </div>
          <div id="chart1"></div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card radius-15">
        <div class="card-body">
          <div class="d-flex mb-2">
            <div>
              <p class="mb-0 font-weight-bold">Visitors</p>
              <h2 class="mb-0">409</h2>
            </div>
            <div class="ml-auto align-self-end">
              <p class="mb-0 font-14 text-success"><i class='bx bxs-up-arrow-circle'></i> <span>0.49% 31 days
                  ago</span>
              </p>
            </div>
          </div>
          <div id="chart2"></div>
        </div>
      </div>
    </div>
    <div class="col-12 col-lg-4">
      <div class="card radius-15">
        <div class="card-body">
          <div class="d-flex mb-2">
            <div>
              <p class="mb-0 font-weight-bold">Page Views</p>
              <h2 class="mb-0">2,346</h2>
            </div>
            <div class="ml-auto align-self-end">
              <p class="mb-0 font-14 text-danger"><i class='bx bxs-down-arrow-circle'></i> <span>130.68% 31
                  days ago</span>
              </p>
            </div>
          </div>
          <div id="chart3"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="card radius-15">
    <div class="card-header border-bottom-0">
        <div class="d-flex align-items-center">
            <div>
                <h5 class="mb-0">Recent Orders</h5>
            </div>
            <div class="ml-auto">
                <button type="button" class="btn btn-white radius-15">View More</button>
            </div>
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table mb-0">
                <thead>
                    <tr>
                        <th>Photo</th>
                        <th>Product Name</th>
                        <th>Customer</th>
                        <th>Product id</th>
                        <th>Price</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="product-img bg-transparent border">
                                <img src="{{ asset('/') }}backend/assets/images/icons/smartphone.png" alt="" width="35">
                            </div>
                        </td>
                        <td>Honor Mobile 7x</td>
                        <td>Mitchell Daniel</td>
                        <td>#835478</td>
                        <td>$54.68</td>
                        <td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-img bg-transparent border">
                                <img src="{{ asset('/') }}backend/assets/images/icons/watch.png" alt="" width="35">
                            </div>
                        </td>
                        <td>Hand Watch</td>
                        <td>Milona Burke</td>
                        <td>#987546</td>
                        <td>$43.78</td>
                        <td><a href="javascript:;" class="btn btn-sm btn-light-warning btn-block radius-30">Pending</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-img bg-transparent border">
                                <img src="{{ asset('/') }}backend/assets/images/icons/laptop.png" alt="" width="35">
                            </div>
                        </td>
                        <td>Mini Laptop</td>
                        <td>Craig Clayton</td>
                        <td>#325687</td>
                        <td>$62.21</td>
                        <td><a href="javascript:;" class="btn btn-sm btn-light-success btn-block radius-30">Delivered</a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-img bg-transparent border">
                                <img src="{{ asset('/') }}backend/assets/images/icons/shirt.png" alt="" width="35">
                            </div>
                        </td>
                        <td>Slim-T-Shirt</td>
                        <td>Clark Andola</td>
                        <td>#658972</td>
                        <td>$75.68</td>
                        <td><a href="javascript:;" class="btn btn-sm btn-light-danger btn-block radius-30">Cancelled</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
@push('js')

@endpush

