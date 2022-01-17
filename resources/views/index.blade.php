@extends('template')
@section('content')
<section class="home-slider js-fullheight owl-carousel bg-white">
      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-md-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight">
                  <img src="{{url('public/images/cover1.jpg')}}">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">Drink Healthy <br> and Natural Drink</h1>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            	<img src="{{url('public/images/kd10.jpg')}}" class="img">
		            		<h4>Mango Ice Blended drink</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            	<img src="{{url('public/images/kd7.jpg')}}" class="img">
		            		<h4>Iced Caramel Latte</h4>
		            	</a>
		            	<a href="#" class="thumb-menu pr-md-4 text-center">
		            	<img src="{{url('public/images/kp1.jpg')}}" class="img">
		            		<h4>Espresso</h4>
		            	</a>
		            </div>
		            <p><a href="{{url('pesanadmin')}}" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>

      <div class="slider-item js-fullheight">
      	<div class="overlay"></div>
        <div class="container-fluid p-0">
          <div class="row d-flex no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
          	<div class="one-third order-md-last img js-fullheight">
                  <img src="{{url('public/images/cover3.jpg')}}">
          		<div class="overlay"></div>
          	</div>
	          <div class="one-forth d-flex js-fullheight align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
	          	<div class="text mt-md-5">
		            <h1 class="mb-4">We Love <br> Delicious Drinks</h1>
		            <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country.</p>
		            <div class="thumb mt-4 mb-3 d-flex">
                    <a href="#" class="thumb-menu pr-md-4 text-center">
                    <img src="{{url('public/images/kd11.jpg')}}" class="img">
                        <h4>TSunrise Ice Blended Drink</h4>
                    </a>
                    <a href="#" class="thumb-menu pr-md-4 text-center">
                    <img src="{{url('public/images/kd8.jpg')}}" class="img">
                        <h4>Iced Vanilla Latte</h4>
                    </a>
                    <a href="#" class="thumb-menu pr-md-4 text-center">
                    <img src="{{url('public/images/kp2.jpg')}}" class="img">
                        <h4>Macchiato</h4>
                    </a>
		            </div>
		            <p><a href="{{url('pesanadmin')}}" class="btn btn-primary px-4 py-3 mt-3">Book A Table</a></p>
	            </div>
	          </div>
        	</div>
        </div>
      </div>
    </section>
	

		<section class="ftco-section ftco-wrap-about ftco-no-pb ftco-no-pt">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-sm-5 img img-2 d-flex align-items-center justify-content-center justify-content-md-end">
                        <img src="{{url('public/images/cover4.jpg')}}">
  					</a>
					</div>
					<div class="col-sm-7 wrap-about py-5 ftco-animate">
	          <div class="heading-section mt-5 mb-4">
	          	<div class="pl-lg-5 ml-md-5">
		          	<span class="subheading">About</span>
		            <h2 class="mb-4">Welcome to nKopi Shop</h2>
	            </div>
	          </div>
	          <div class="pl-lg-5 ml-md-5">
							<p>nKopi Indonesia was established in 2001 and was managed by Telkom School which is a subsidiary of Telkom since 2006.
								 nKopi Indonesia is introducing a new concept to our stores, which will allow our customers to enjoy high quality coffee & tea drinks more comfortably. nKopi Indonesia currently has 100 stores all over Indonesia.
							</p>
							<h3 class="mt-5">Special Recipe</h3>
							<div class="thumb my-4 d-flex">
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
                    <img src="{{url('public/images/kd10.jpg')}}" class="img">
	            		<h4>Mango Ice Blended drink</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            	<img src="{{url('public/images/kd7.jpg')}}" class="img">
	            		<h4>Iced Mocha Latte</h4>
	            	</a>
	            	<a href="#" class="thumb-menu pr-md-4 text-center">
	            	<img src="{{url('public/images/kp6.jpg')}}" class="img">
	            		<h4>Café Latte</h4>
	            	</a>
	            </div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-counter img" id="section-counter" style="background-color:brown;" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row d-md-flex align-items-center justify-content-center">
    			<div class="col-lg-10">
    				<div class="row d-md-flex align-items-center">
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="18">0</strong>
		                <span>Years of Experienced</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="20000">0</strong>
		                <span>Happy Customers</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="564">0</strong>
		                <span>Finished Projects</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18">
		              <div class="text">
		                <strong class="number" data-number="300">0</strong>
		                <span>Working Days</span>
		              </div>
		            </div>
		          </div>
	          </div>
          </div>
        </div>
    	</div>
    </section>


    <section class="ftco-section">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>The Original Ice Blended Drinks</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
                <img src="{{url('public/images/kd1.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>The Original Mocha Ice Blended drink</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Mocha</span>, <span>Sugar</span>, <span>Milk</span>, <span>Cream</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
            <img src="{{url('public/images/kd9.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Matcha Green Tea Ice Blended Drink</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Matcha</span>, <span>Milk</span>, <span>Sugar</span>, <span>Milk</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
            <img src="{{url('public/images/kd3.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Caramel Ice Blended Drink</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Caramel</span>, <span>Milk</span>, <span>Sugar</span>, <span>Syrup</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Iced Coffee & Espresso Drinks</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
                <img src="{{url('public/images/kd6.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Iced Coffee</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Coffee</span>, <span>Sugar</span>, <span>Water</span>, <span>Ice</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
            <img src="{{url('public/images/kd7.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Iced Cappuccino</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Cappuccino</span>, <span>Milk</span>, <span>Sugar</span>, <span>Water</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
            <img src="{{url('public/images/kd8.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Iced Vanilla Latte</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Vanilla</span>, <span>Coffee</span>, <span>Milk</span>, <span>Sugar</span></p>
              </div>
            </div>
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Hot Drinks Espresso</h3>
        		</div>
        		<div class="menus d-flex ftco-animate">
                <img src="{{url('public/images/kp1.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Espresso</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Coffee</span>, <span>Sugar</span>, <span>Milk</span>, <span>Water</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
            <img src="{{url('public/images/kp2.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Macchiato</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Caramel Mocchiato</span>, <span>Coffee</span>, <span>Milk</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
            <img src="{{url('public/images/kp3.jpg')}}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Americano</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Coffee Americano</span>, <span>Sugar</span>, <span>Water</span></p>
              </div>
            </div>
        	</div>
        </div>
        <div class="row">
        	<div class="col-md-12 text-center ftco-animate">
        		<p><a href="{{url('menu')}}" class="btn btn-black py-3 px-5">View All Menu</a></p>
        	</div>
        </div>
    </div>
    </section>

    <section class="ftco-section testimony-section" style="background-color:brown;" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
          	<span class="subheading">Testimony</span>
            <h2 class="mb-4">Happy Customer</h2>
          </div>
        </div>
        <div class="row ftco-animate justify-content-center">
          <div class="col-md-7">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4">
                      <img src="{{url('public/images/person_1.jpg')}}">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text p-3">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Arthur Browner</p>
                    <span class="position">Customer</span>
                  </div>
                </div>
              </div>    
            </div>
          </div>
        </div>
      </div>
    </section>
			
		<section class="ftco-section">
			<div class="container">
				<div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Our Barista</span>
           
          </div>
        </div>	
				<div class="row">
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
						<img src="{{url('public/images/barista1.jpg')}}" class="img">
							<div class="text px-4 pt-4">
								<h3>John Smooth</h3>
								<span class="position mb-2">CEO, Co Founder</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
                        <img src="{{url('public/images/barista2.jpg')}}" class="img">
							<div class="text px-4 pt-4">
								<h3>Rebeca Welson</h3>
								<span class="position mb-2">Head Barista</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
                        <img src="{{url('public/images/barista3.jpg')}}" class="img">
							<div class="text px-4 pt-4">
								<h3>Kharl Branyt</h3>
								<span class="position mb-2">Barista</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
                        <img src="{{url('public/images/barista4.jpg')}}" class="img">
							<div class="text px-4 pt-4">
								<h3>Luke Simon</h3>
								<span class="position mb-2">Barista</span>
								<div class="faded">
									<!-- <p>I am an ambitious workaholic, but apart from that, pretty simple person.</p> -->
									<ul class="ftco-social d-flex">
		                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-google-plus"></span></a></li>
		                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">nKopi</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> Closed</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="col-md-6 col-lg-3 ftco-animate">
			  <div class="staff">
              <img src="{{url('public/images/logo.jpg')}}" class="img">
            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
@endsection