<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>بحث عن عقار | نظام عقارات الزهار</title>
        <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{url('css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{url('vendors/linericon/style.css')}}">
        <link rel="stylesheet" href="{{url('css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{url('vendors/owl-carousel/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{url('vendors/lightbox/simpleLightbox.css')}}">
        <link rel="stylesheet" href="{{url('vendors/nice-select/css/nice-select.css')}}">
        <link rel="stylesheet" href="{{url('vendors/animate-css/animate.css')}}">
        <!-- main css -->
        <link rel="stylesheet" href="{{url('css/style.css')}}">
        <link rel="stylesheet" href="{{url('css/responsive.css')}}">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container box_1620">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="#"><img src="img/logo.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
@if(Auth::user()->type==1)
                                <li class="nav-item"><a class="nav-link" href="{{ url('home') }}">  إضافة عقار جديد</a></li> 
                                @endif								<li class="nav-item active"><a class="nav-link" href="{{ url('search') }}">بحث عن عقار</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ url('today') }}">العقارات المضافة اليوم</a></li>
                                
                                <!-- show this li when admin login only -->
<li class="nav-item">
 									 <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            تسجيل الخروج </a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="nav-link">
                                            {{ csrf_field() }}
                                        </form>
								</li>                                
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
        <section class="banner_area">
            <div class="banner_inner d-flex align-items-center">
            	<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
				<div class="container">
					<div class="banner_content">
						<h2>البحث عن عقار فى نظام عقارات الزهار</h2>
					</div>
				</div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        

			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
				
                    <div class="row">
                    <div class="col-8">
                        
                        <div class="section-top-border">
						<div class="progress-table-wrap">
							<div class="progress-table">
								 <div class="table-responsive">          
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>التاريخ</th>
                                            <th>المدينة</th>
                                            <th>المجموعة</th>
                                            <th>العمارة</th>
                                            <th>العقار</th>
                                            <th>المساحة</th>
                                            <th>السعر</th>
                                            <th>التفاصيل</th>
                                        </tr>
                                    </thead>
                                   <tbody>
                                         @foreach($realStates as $realState)
                                        <!-- start here -->
                                        <tr>
                                            <td>{!! $realState->date !!}</td>
                                            <td>
											@if($realState->city==1)الرحاب
											@elseif($realState->city==2)مدينتى
											@elseif($realState->city==3)العاصمة الإدارية الجديدة
											@elseif($realState->city==4)التجمع الخامس
											@else
												أخرى
											@endif
											</td>
                                            <td>{!! $realState->group !!}</td>
                                            <td>{!! $realState->building !!}</td>
                                            <td>{!! $realState->flat !!}</td>
                                            <td>{!! $realState->area !!}</td>
                                            <td>{!! $realState->price !!}</td>
                                            <td><a href="{!! route('realStates.show', [$realState->id]) !!}" class="genric-btn primary small">التفاصيل</a></td>
                                        </tr>
                                        <!-- end here -->
                                         @endforeach
                                    </tbody>
                                     </table>
                                </div>
								
							</div>
						</div>
					</div>
                        
                    </div>
                        
                        
                    <div class="col-4">
                   <div class="section-top-border">
						<div class="row">
							<div class="col-lg-12 col-md-12 searchh">
								{!! Form::open(['url' => '/search','method'=>'get']) !!}
                                    
                                    <div class="mt-10 title-s">العنوان</div>
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="city">
												<option value="">المدينة</option>
												<option value="1">الرحاب</option>
												<option value="2">مدينتى</option>
												<option value="3">العاصمة الإدارية الجديدة</option>
												<option value="4">التجمع الخامس</option>
												<option value="5">أخرى</option>
											</select>
										</div>
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="group" placeholder="رقم المجموعة" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم المجموعة'" class="single-input">
									</div>
                                    
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="apartment" placeholder="رقم العمارة" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم العمارة'" class="single-input">
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="flat" placeholder="رقم العقار" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم العقار'" class="single-input">
									</div>
                                    
                                    <div class="mt-10 title-s">تفاصيل العقار</div>
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-building-o" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="type">
												<option value="">نوع العقار</option>
												<option value="1">شقة</option>
												<option value="2">فيلا</option>
												<option value="3">تاون هاوس</option>
												<option value="4">محل</option>
												<option value="5">أرض</option>
											</select>
										</div>
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-building-o" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="view">
												<option value="">الفيو</option>
												<option value="1">جاردن</option>
												<option value="2">باركينج</option>
												<option value="3">شارع</option>
											</select>
										</div>
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-building-o" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="purpose">
												<option value="">الغرض</option>
												<option value="1">إيجار جديد</option>
												<option value="2">إيجار جديد مفروش</option>
												<option value="3">تمليك كاش</option>
												<option value="4">تمليك تقسيط</option>
											</select>
										</div>
									</div>
                                    
                                    <div class="mt-10 title-s">بيانات العميل</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
										<input type="text" name="name" placeholder="إسم العميل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'إسم العميل'" class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
										<input type="text" name="mobile" placeholder="رقم موبايل العميل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم موبايل العميل'" class="single-input">
									</div>
                                    
									
									<div class="mt-10 title-s">السعر</div>
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-money" aria-hidden="true"></i></div>
										<input type="text" name="from_price" placeholder="السعر من" onfocus="this.placeholder = ''" onblur="this.placeholder = 'السعر من'" class="single-input">
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-money" aria-hidden="true"></i></div>
										<input type="text" name="to_price" placeholder="السعر إلى" onfocus="this.placeholder = ''" onblur="this.placeholder = 'السعر إلى'"  class="single-input">
									</div>
									
									
									<div class="mt-10 title-s">المساحه</div>
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-square" aria-hidden="true"></i></div>
										<input type="text" name="from_area" placeholder=" المساحه من" onfocus="this.placeholder = ''" onblur="this.placeholder = 'المساحه من'" class="single-input">
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-square" aria-hidden="true"></i></div>
										<input type="text" name="to_area" placeholder="المساحه الى" onfocus="this.placeholder = ''" onblur="this.placeholder = 'المساحه الى'"  class="single-input">
									</div>
									
									
									
									
                                    <div class="mt-10">
                                        <input class="submit_btn single-input-secondary" type="submit" value="بحث">
									</div>
								</form>
							</div>
							
						</div>
					</div>
                        </div>
                    </div>
                    
					
                    

				</div>
			</div>
			<!-- End Align Area -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="{{url('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{url('js/popper.js')}}"></script>
        <script src="{{url('js/bootstrap.min.js')}}"></script>
        <script src="{{url('js/stellar.js')}}"></script>
        <script src="{{url('vendors/lightbox/simpleLightbox.min.js')}}"></script>
        <script src="{{url('vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
        <script src="{{url('vendors/isotope/imagesloaded.pkgd.min.js')}}"></script>
        <script src="{{url('vendors/isotope/isotope-min.js')}}"></script>
        <script src="{{url('vendors/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{url('vendors/jquery-ui/jquery-ui.js')}}"></script>
        <script src="{{url('js/jquery.ajaxchimp.min.js')}}"></script>
        <script src="{{url('js/mail-script.js')}}"></script>
        <script src="{{url('js/theme.js')}}"></script>
    </body>
</html>