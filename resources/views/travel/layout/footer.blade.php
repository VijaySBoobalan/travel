<footer class="ftco-footer ftco-bg-dark ftco-section" style="font-size:14px;">
     <div class="container">
       <div class="row mb-5">
         <div class="col-md">
           <div class="ftco-footer-widget mb-4">
             <h2 class="ftco-heading-2">  Treasure travels</h2>
             <p>Treasure travels was established in 1999 by eminent travel visionary, Mrs Sasirekha; is one of the longest established travel company with a vision to provide customers value based service, exotic holidays and memorable experience to travelers.</p>
           </div>
         </div>
         <div class="col-md">
            <div class="ftco-footer-widget mb-4">
             <h2 class="ftco-heading-2">Holiday Packages</h2>
             <ul class="list-unstyled" style="font-size:13px;">
              @foreach(App\Category::get()->all() as $Catagory)
               <li><a href="{{ url('/package/'.$Catagory->category) }}" class="py-2 d-block">{{  $Catagory->category }}</a></li>
               @endforeach
             </ul>
           </div>
         </div>

         <div class="col-md">
            <div class="ftco-footer-widget mb-4" >
             <h2 class="ftco-heading-2">Contact Information</h2>
             <ul class="list-unstyled" style="font-size:13px;">
               <li><h2 class="ftco-heading-2" style="padding-top: 1.5% ">Address:</h2><a href="#" class="py-2 d-block">G-109, No:789/769,Anna Salai, Phase 2,Spencers Plaza, Chennai-600002.</a></li>
               <li><h2 class="ftco-heading-2">Telephone:</h2><a href="#" class="py-2 d-block">044 28491170/71</a></li>
               <li><h2 class="ftco-heading-2">Mobile/Customer Service:</h2><a href="#" class="py-2 d-block">+91 9840066320, +91 9941348236, +91 9840816333</a></li>
               <li><h2 class="ftco-heading-2">E-Mail:</h2><a href="#" class="py-2 d-block">holiday@treasuretravels.co.in, treasuretrav@gmail.com</a></li>
             </ul>
           </div>
         </div>
         <div class="col-md">
           <div class="ftco-footer-widget mb-4" style="text-align: center;">
             <h2 class="ftco-heading-2" style="padding-bottom: 5%; ">Instafeed</h2>
             <div class="row">
               <div class="col-md-12 col-sm-12 col-xs-12">
                 <span><img src="{{ url('img/a1.jpg') }}" style="width:50px;height: 50px;"></span>
                 <span><img src="{{ url('img/a2.jpg') }}" style="width:50px;height: 50px;"></span>
                 <span><img src="{{ url('img/a3.jpg') }}" style="width:50px;height: 50px;"></span>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12" style="padding-top: 2%; ">
                 <span><img src="{{ url('img/a4.jpg') }}" style="width:50px;height: 50px;"></span>
                 <span><img src="{{ url('img/a1.jpg') }}" style="width:50px;height: 50px;"></span>
                 <span><img src="{{ url('img/a3.jpg') }}" style="width:50px;height: 50px;"></span>
               </div>


             </div>


           </div>
         </div>
         <div class="col-md">
           <div class="ftco-footer-widget mb-4" style="text-align: center">
             <h2 class="ftco-heading-2" style="padding-bottom: 5%;">Follow us</h2>

             <ul class="ftco-footer-social list-unstyled float-md-right float-lft">
               <li class="ftco-animate" ><a href="#"><i class="fa fa-twitter" style=" margin-top: 20%; font-size:16px;" ></i></a></li>
               <li class="ftco-animate"><a href="https://www.facebook.com/treasuretravs/"><i class="fa fa-facebook" style="margin-top: 20%; font-size: 16px;" ></i></a></li>
               <li class="ftco-animate"><a href=""><i class="fa fa-instagram" style="margin-top: 20%; font-size: 16px;" ></i></a></li>
               <li class="ftco-animate"><a href=""><i class="fa fa-linkedin" style="margin-top: 20%; font-size: 16px;" ></i></a></li>
             </ul>
           </div>
         </div>
       </div>
       <div class="row">
         <div class="foot_link col-md-12 text-center">

           <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 Copyright &copy;<script>document.write(new Date().getFullYear());</script> &nbsp All rights reserved | made with <i class="fa fa-heart" style="color: red" aria-hidden="true"></i> by <a href="http://kteq.in/" target="_blank">K-Teq Solutions</a>
 <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
         </div>
       </div>
     </div>
   </footer>
