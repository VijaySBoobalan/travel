@extends('travel.layout.master')

@section('title')
- Flight
@endsection

@section('content')
<style media="screen">
.cruis{
  padding-top: 4%;
  padding-bottom: 4%;
}
.cruis_name
{
  background-color: white !important;
  width: 100%;
  margin-top: -12%;
}
.cruis_name p
{
  font-size: 16px;
  color: black;
}
.viewmore{
  width: 104px;
  height: 34px;
  background: red;
  font-family: 'Oswald',;
  color: #FFFFFF;
  font-size: 13px;
  text-transform: uppercase;
  text-align: center;
  line-height: 34px;
  border-radius: 10px;
  border: 0;
}
@media only screen and (max-width: 600px) {
  .cruis{
    padding-top: 7%;
    padding-bottom: 7%;
  }
}
</style>
<div class="home">
  <div class="background_image" style="background-image:url(img/cruises/LAND.jpg);margin-top: -30px;height:100%"></div>
</div>
<div  class="container" >
  <h1 class="contact_title" style="text-align: center;padding-bottom:2%">
  Cruises
  </h1>
  <div class="row">
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/1.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Avalon Waterways</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/2.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Carnival Cruise Shipvista</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/3.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Celebrity Cruise Line</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/4.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Celestyal Cruises</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/5.png" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Costa Cruises</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/6.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Crystal Cruise Liner</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/7.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Cunard New Ship Solo</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/8.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Disney Cruise Line</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/9.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Holland America</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/10.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Hurtigruten Cruise Line</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/11.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Luftner Cruises</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/12.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">MSC Cruises</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/13.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Norwegian Cruise Line</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/14.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Paul Gauguin</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/15.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Princess Cruises</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/16.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Regent Seven Sea</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/17.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Royal Caribbean Cruises</p>
      </div>
    </div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/18.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Sliver Sea Cruise</p>
      </div>
    </div>
    <div class="col-lg-4"></div>
    <div class="col-lg-4 col-xs-6">
      <img class="cruis" src="/img/cruises/19.jpg" alt="" width="100%" height="100%">
      <div class="cruis_name">
        <p class="">Star Cruises</p>
      </div>
    </div>
    <div class="col-lg-4"></div>
  </div>
  <div class="row">
    <div class="col-4 col-xs-3"></div>
    <div class="col-4 col-xs-6" style="text-align:center">
      <button type="button" name="button" class="viewmore" onclick="window.location.href='/package/Cruises'">View More</button>
    </div>
    <div class="col-4 col-xs-3"></div>
  </div>
</div>
<br>
@endsection
@section('topscriptfiles')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" type="text/css" href="css/cs.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/111">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/mainstyle.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection

@section('bottomscriptfiles')
<script src="js1/vendor/jquery-2.2.4.min.js"></script>
<script src="js1/superfish.min.js"></script>
<script src="js1/jquery.magnific-popup.min.js"></script>
<script src="js1/owl.carousel.min.js"></script>
<script src="js1/main.js"></script>
</body>
</html>
@endsection
