@extends('template')
@section('content')
<section class="hero-wrap hero-wrap-2" style="background-color: maroon;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Menu</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('kopi')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
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
				@if(Session::has('alert-success'))
          <div class="alert alert-success">
            <strong>{{ \Illuminate\Support\Facades\Session::get('alert-success') }}</strong>
          </div>
        @endif
        <div class="row">
        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>The Original Ice Blended Drinks</h3>
						</div>
            @foreach($data as $datas)
        		<div class="menus d-flex ftco-animate">
								<img src="{{ url('uploads/file/'.$datas->file) }}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{ $datas->nama_kopi}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{ $datas->harga }}</span>
	                </div>
	              </div>
	              <p><span>{{$datas->deskripsi}}</span></p>
              </div>
						</div>
						@endforeach
            <!-- <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-7.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/breakfast-8.jpg);"></div>
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>Grilled Crab with Onion</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">$29</span>
	                </div>
	              </div>
	              <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div> -->
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Iced Coffee & Espresso Drinks</h3>
        		</div>
        		@foreach($data as $datas)
        		<div class="menus d-flex ftco-animate">
								<img src="{{ url('uploads/file/'.$datas->file) }}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{ $datas->nama_kopi}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{ $datas->harga }}</span>
	                </div>
	              </div>
	              <p><span>{{$datas->deskripsi}}</span></p>
              </div>
						</div>
						@endforeach
        	</div>

        	<div class="col-md-6 col-lg-4 menu-wrap">
        		<div class="heading-menu text-center ftco-animate">
        			<h3>Hot Drinks Espresso</h3>
        		</div>
        		@foreach($data as $datas)
        		<div class="menus d-flex ftco-animate">
								<img src="{{ url('uploads/file/'.$datas->file) }}" class="menu-img img">
              <div class="text">
              	<div class="d-flex">
	                <div class="one-half">
	                  <h3>{{ $datas->nama_kopi}}</h3>
	                </div>
	                <div class="one-forth">
	                  <span class="price">{{ $datas->harga }}</span>
	                </div>
	              </div>
	              <p><span>{{$datas->deskripsi}}</span></p>
              </div>
						</div>
						@endforeach
        			</div>
            </div>
        	</div>
        </div>
    	</div>
		</section>
		<br>
		
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