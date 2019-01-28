@extends('travel.layout.master')

@section('title')
- Contact Us
@endsection

@section('content')
<div class="super_container">
    <<div class="home">
        <div class="background_image" style="background-image:url(img/contact.jpg);margin-top: -30px;"></div>
</div>
<!-- Contact -->
<div class="contact visible-lg visible-md">
    <div class="container">
        <div class="row">
            <!-- Get in touch -->
            <div class="col-lg-6">
                <div class="contact_content">
                    <div class="contact_title ">Get in touch with us</div>
                    <div class="contact_text">
                    </div>
                    <div class="contact_list">
                        <ul>
                            <li>
                                <div>address:</div>
                                <div>G-109 , No:789/769 , Anna Salai , Phase 2 , Spencers Plaza , Chennai-600002.</div>
                            </li>
                            <li>
                                <div>phone:</div>
                                <div>044 28491170/71 , +91 9840066320 , +91 9941348236 , +91 9840816333</div>
                            </li>
                            <li>
                                <div>email:</div>
                                <div>holiday@treasuretrav.co.in , treasuretrav@gmail.com</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact_form_container">
                    <form action="{{route('sendMail')}}" method="post" id="contact_form" class="contact_form" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div style="margin-bottom: 18px"><input type="text" class="contact_input contact_input_name inpt"
                                placeholder="Your Name" name="name" required="required">
                            <div class="input_border"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="margin-bottom: 18px">
                                <div><input type="text" class="contact_input contact_input_email inpt" name="email"
                                        placeholder="Your E-mail" required="required">
                                    <div class="input_border"></div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="margin-bottom: 18px">
                                <div><input type="text" class="contact_input contact_input_subject inpt" placeholder="Subject"
                                        name="subject" required="required">
                                    <div class="input_border"></div>
                                </div>
                            </div>
                        </div>
                        <div><textarea class="contact_textarea contact_input inpt" placeholder="Message" name="message"
                                required="required"></textarea>
                            <div class="input_border" style="bottom:3px"></div>
                        </div>
                        <button class="contact_button">send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact visible-xs visible-sm">
    <div class="container" style="margin-top:-30%">
        <div class="row">
            <!-- Get in touch -->
            <div class="col-lg-6">
                <div class="contact_content">
                    <div class="contact_title ">Get in touch with us</div>
                    <div class="contact_text">
                    </div>
                    <div class="contact_list">
                        <ul>
                            <li>
                                <div>address:</div>
                                <div>G-109 , No:789/769 , Anna Salai , Phase 2 , Spencers Plaza , Chennai-600002.</div>
                            </li>
                            <li>
                                <div>phone:</div>
                                <div>044 28491170/71 , +91 9840066320 , +91 9941348236 , +91 9840816333</div>
                            </li>
                            <li>
                                <div>email:</div>
                                <div>holiday@treasuretrav.co.in , treasuretrav@gmail.com</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-lg-6">
                <div class="contact_form_container">
                    <form action="#" id="contact_form" class="contact_form">
                        <div style="margin-bottom: 18px"><input type="text" class="contact_input contact_input_name inpt"
                                placeholder="Your Name" required="required">
                            <div class="input_border"></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6" style="margin-bottom: 18px">
                                <div><input type="text" class="contact_input contact_input_email inpt" placeholder="Your E-mail"
                                        required="required">
                                    <div class="input_border"></div>
                                </div>
                            </div>
                            <div class="col-lg-6" style="margin-bottom: 18px">
                                <div><input type="text" class="contact_input contact_input_subject inpt" placeholder="Subject"
                                        required="required">
                                    <div class="input_border"></div>
                                </div>
                            </div>
                        </div>
                        <div><textarea class="contact_textarea contact_input inpt" placeholder="Message" required="required"></textarea>
                            <div class="input_border" style="bottom:3px"></div>
                        </div>
                        <button class="contact_button">send</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Map -->
<div class="contact_map" style="margin-top: -50px">
    <!-- Google Map -->
    <div class="map">
        <div id="google_map" class="google_map">
            <div class="map_container">
                <div id="map"></div>
            </div>
        </div>
    </div>
</div>
<div class="r1 visible-md visible-lg" style="padding-bottom:2%">
    <h1 class="h" style="text-align: center; ">
        Recommended Destinations
    </h1>
    <h3 style="text-align: center; margin-top:-20%;  padding-bottom: 4%"><small>We love to tell our successful far far
            away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
            texts.</small></h3>
    <div class="container  visible-md visible-lg">
   <div class="row">
    @foreach($trending as $trend)
    @if(!empty($trend->image->image_name))
    @if($trend->trending=='yes')
     
    <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
     
      <div class="container11" onclick="window.location.href = '{{ url("/package/".$trend->id."/".@$trend->multicatagory->CatagoryData->category) }}';">
        <a href = "{{ url('/package/'.$trend->id."/".@$trend->multicatagory->CatagoryData->category) }}">
        <img src="{{ url($trend->image->image_name) }}"  alt="" class="image">
        <div class="overlay1">
            <h6 class="h7">{{ @$trend->packagename }}</h6>
          <p class="h7">₹ {{ @$trend->cost }}</p>
        </div>
        </a>
        
      </div>
      
    </div>
    @endif
    @endif
    @endforeach
  </div>
    </div>
    <div class="container section-gap visible-xs visible-sm" style="margin-top: -30%">
   <div class="row">
    @foreach($trending as $trend)
    @if(!empty($trend->image->image_name))
    @if($trend->trending=='yes')
     
    <div class="col-md-4 col-sm-6 col-xs-6 no-padding">
     
      <div class="container11" onclick="window.location.href = '{{ url("/package/".$trend->id."/".@$trend->multicatagory->CatagoryData->category) }}';">
        <a href = "{{ url('/package/'.$trend->id."/".@$trend->multicatagory->CatagoryData->category) }}">
        <img src="{{ url($trend->image->image_name) }}"  alt="" class="image">
        <div class="overlay1">
            <h6 class="h7">{{ @$trend->packagename }}</h6>
          <p class="h7">₹ {{ @$trend->cost }}</p>
        </div>
        </a>
        
      </div>
      
    </div>
    @endif
    @endif
    @endforeach
  </div>
    </div>
</div>
@endsection
@section('topscriptfiles')
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/contact.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style1.css" />
<link rel="stylesheet" type="text/css" href="css/cs.css">
<!--
    CSS
    ============================================= -->
<link rel="stylesheet" href="css/linearicons.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/111">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/mainstyle.css">
<style>
    .pp {
        font-family: "Oswald";
        font-size: 36px;
        line-height: line-height: 43.2px;
        font-weight: 300;
        color: rgb(24, 24, 24);
    }

    .r1 {
        padding-right: 1%;
        padding-left: 2%;
        margin-top: -4%;
    }

    .r2 {
        padding-right: 1%;
        padding-left: 2%;
        margin-top: -4%;
        margin-bottom: -5%;
    }

    .c1 {
        padding-top: 2%;
        padding-bottom: 2%;
        padding-right: 2%;
        padding-top: 2%;
        width: 100%;
        height: auto;
    }

    .r1 img {
        opacity: 1;
    }

    .h {
        padding-bottom: 25%;
    }

    .h a {
        color: black;
    }

    .h a:hover {
        color: orange;
    }

    .star .checked {
        color: orange;
    }

    .h h3 a:hover {
        color: red !important;
    }

    .container11 {
        position: relative;
        width: 100%;
        max-width: 400px;
        max-height: 700px;
        padding-left: 5px;
        padding-top: 30px;

    }

    .image {
        display: block;
        width: 100%;
        height: 400px;
    }

    .overlay1 {
        font-family: Oswald;
        position: absolute;
        bottom: 0;
        color: white;
        width: 100%;
        transition: .5s ease;
        opacity: 1;
        padding: 20px;
        text-align: left;
    }

    .overlay1 span {
        font-size: 20px;
        font-weight: 300;

    }

    .h7 {
        color: white;
        font-size: 24px;
        font-weight: 400;

    }

    .container11:hover .overlay1 {
        opacity: 1;
        background-color: White;
        color: black;
    }

    .container11:hover .overlay1 .h7 {
        opacity: 1;
        color: black;
    }

</style>
@endsection
@section('bottomscriptfiles')
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js1/vendor/jquery-2.2.4.min.js"></script>
<script src="js1/superfish.min.js"></script>
<script src="js1/jquery.magnific-popup.min.js"></script>
<script src="js1/owl.carousel.min.js"></script>
<script src="js1/main.js"></script>
</body>

</html>
@endsection
