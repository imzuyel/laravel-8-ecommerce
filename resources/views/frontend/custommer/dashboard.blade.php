@extends('frontend.app')
@push('css')
  <style>
    .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 100px;
      height: 100px;
      border-radius: 50%;
    }


    @keyframes sway {
  0% {
    transform: rotate(8deg);
  }
  50% {
    transform: rotate(-8deg);
  }
  100% {
    transform: rotate(8deg);
  }
}

.object {
  position: absolute;
  animation: sway 2.4s infinite;
  animation-timing-function: ease-in-out;
  -webkit-transform-origin: top;
  -moz-transform-origin: top;
  transform-origin: top;
  left: 0;
  right: 0;
  height: 5%;
  z-index: 999;
  text-transform: uppercase;
}

.object-shape {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  display: block;
  background-color: #2187C7;
  margin: 0 auto;
  position: relative;
  color: #fff;
  text-align: center;
  padding-top: 25px;
  font-weight: 800;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.object-shape span {
  font-size: 22px;
  color:white;
}

.object-rope {
  height: 100%;
  width: 5px;
  background-color: #2187C7;
  content: "";
  display: block;
  margin-left: 50%;
}

.content {
  display: flex;
  flex-direction: column;
  align-items: center;
  margin: 0 auto;
  max-width: 500px;
  padding: 35vh 20px 20px 20px
}



p {
  font-family: sans-serif;
  text-align: center;
}

.message {
  margin-top: 40px;
}

  </style>
@endpush
@section('title')
  {{ Auth::user()->name }} dashboard
@endsection
@section('content')
  <!-- breadcrumb start -->
  <div class="breadcrumb-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="page-title">
            <h2>Dashboard</h2>
          </div>
        </div>
        <div class="col-sm-6">
          <nav aria-label="breadcrumb"
            class="theme-breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('frontend.home') }}">Home</a></li>
              <li class="breadcrumb-item active"
                aria-current="page">Dashboard</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </div>
  <!-- breadcrumb End -->


  <!-- section start -->
  {{-- <section class="section-b-space">
    <div class="container">
      <div class="row">
        <div class="col-lg-3">
          <div class="account-sidebar"><a class="popup-btn">my account</a></div>
          <div class="dashboard-left">
            <div class="collection-mobile-back"><span class="filter-back"><i class="fa fa-angle-left"
                  aria-hidden="true"></i> back</span></div>
            <div class="block-content">
              <ul>
                <li class="active"><a href="#">Account Info</a></li>
                <li><a href="#address">Address Book</a></li>
                <li><a href="#">My Orders</a></li>
                <li><a href="#">My Wishlist</a></li>
                <li><a href="#">Newsletter</a></li>
                <li><a href="#">My Account</a></li>
                <li><a href="#">Change Password</a></li>
                <li class="last">
                  <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();"><i
                      class="bx bx-power-off"></i><span>Logout</span></a>
                  <form id="logout-form"
                    action="{{ route('logout') }}"
                    method="POST"
                    class="d-none">
                    @csrf
                  </form>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="dashboard-right">
            <div class="dashboard">
              <div class="page-title">
                <h2>My Dashboard</h2>
                <img src="http://www.garcard.com/images/garcard_symbol.png"
                  alt="Paris"
                  class="center">
              </div>
              <div class="welcome-msg">
                <p>Hello, MARK JECNO !</p>
                <p>From your My Account Dashboard you have the ability to view a snapshot of your recent
                  account activity and update your account information. Select a link below to view or
                  edit information.</p>
              </div>
              <div class="box-account box-info">
                <div class="box-head">
                  <h2>Account Information</h2>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <div class="box">
                      <div class="box-title">
                        <h3>Contact Information</h3><a href="#">Edit</a>
                      </div>
                      <div class="box-content">
                        <h6>MARK JECNO</h6>
                        <h6>MARk-JECNO@gmail.com</h6>
                        <h6><a href="#">Change Password</a></h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="box">
                      <div class="box-title">
                        <h3>Newsletters</h3><a href="#">Edit</a>
                      </div>
                      <div class="box-content">
                        <p>You are currently not subscribed to any newsletter.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="box">
                    <div class="box-title"
                      id="address">
                      <h3>Address Book</h3><a href="#">Manage Addresses</a>
                    </div>
                    <div class="row">
                      <div class="col-sm-6">
                        <h6>Default Billing Address</h6>
                        <address>You have not set a default billing address.<br><a href="#">Edit
                            Address</a></address>
                      </div>
                      <div class="col-sm-6">
                        <h6>Default Shipping Address</h6>
                        <address>You have not set a default shipping address.<br><a href="#">Edit Address</a></address>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}



  <div class="object">
    <div class="object-rope"></div>
    <div class="object-shape">
    	Coming <span class="soon">Soon</span>
    </div>
</div>

<div class="content">
  <a href="{{ route('frontend.home') }}" class="btn btn-primary">Back to home</a>

  <p class="message">Our website is now under constractions . We are comming soon .</p>

  <p class="mailtoaddress"><em>admin <a href="https://imzuyel.com"> <code>Zuyel Rana</code></a></em></p>
</div>


  <!-- section end -->


@endsection
