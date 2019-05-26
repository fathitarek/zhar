<!doctype html>
	<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>تفاصيل عقار | نظام عقارات الزهار</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../../css/bootstrap.css">
        <link rel="stylesheet" href="../../vendors/linericon/style.css">
        <link rel="stylesheet" href="../../css/font-awesome.min.css">
        <link rel="stylesheet" href="../../vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="../../vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="../../vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="../../vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="../../css/style.css">
        <link rel="stylesheet" href="../../css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
        <header class="header_area">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container box_1620">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <a class="navbar-brand logo_h" href="#"><img src="../../img/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                            <ul class="nav navbar-nav menu_nav ml-auto">
                                @if(Auth::user()->type==1)
                                <li class="nav-item"><a class="nav-link" href="/home">  إضافة عقار جديد</a></li> 
                                @endif
                                                            <li class="nav-item"><a class="nav-link" href="/search">بحث عن عقار</a></li>
                                <li class="nav-item"><a class="nav-link" href="/today">العقارات المضافة اليوم</a></li>

                                
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
                        <h2>بيانات تفصيلية لعقار فى نظام عقارات الزهار</h2>
                    </div>
                </div>
            </div>
        </section>
        <!--================End Home Banner Area =================-->
        
        
        

            <!-- Start Align Area -->
            <div class="whole-wrap">
                <div class="container">
                
                    <div class="row">
                    <div class="col-12">
                        
                        <div class="section-top-border">
                        <div class="progress-table-wrap">
                            <div class="progress-table">
                                 <div class="table-responsive">          
                                <table class="table">
                                        <tr>
                                            <td>
											@if($realState->state==1)متاح
											@else
												غير متاح
											@endif
											</td>
                                            <th>حالة العقار</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $realState->date !!}</td>
                                            <th>تاريخ إنتهاء الحالة</th>
                                        </tr>
                                        <tr>
                                            <td>
											
											@if($realState->city==1)الرحاب
											@elseif($realState->city==2)مدينتى
											@elseif($realState->city==3)العاصمة الإدارية الجديدة
											@elseif($realState->city==4)التجمع الخامس
											@else
												أخرى
											@endif
											</td>
                                            <th>المدينة</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $realState->group !!}</td>
                                            <th>رقم المجموعة</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $realState->building !!}</td>
                                            <th>رقم العمارة</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $realState->flat !!}</td>
                                            <th>رقم العقار</th>
                                        </tr>
                                        <tr>
                                            <td>
												@if($realState->type==1)شقة
											@elseif($realState->type==2)فيلا
											@elseif($realState->type==3)تاون هاوس
											@elseif($realState->type==4)محل
											@else
												أرض
											@endif
											</td>
                                            <th>نوع العقار</th>
                                        </tr>
                                        <tr>
                                            <td>						
											@if($realState->view==1)جاردن
											@elseif($realState->view==2)باركينج											
											@else
												شارع
											@endif
											
											</td>
                                            <th>الفيو</th>
                                        </tr>
                                        <tr>
                                            <td>
											@if($realState->purpose==1)إيجار جديد
											@elseif($realState->purpose==2)إيجار جديد مفروش
											@elseif($realState->purpose==3)تمليك كاش
											@else
												تمليك تقسيط
											@endif
											</td>
                                            <th>الغرض</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $realState->name !!}</td>
                                            <th>إسم العميل</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $realState->mobile !!}</td>
                                            <th>رقم موبايل العميل</th>
                                        </tr>
                                        <tr>
                                            <td> {!! $realState->price !!}</td>
                                            <th>السعر</th>
                                        </tr>
										<tr>
                                            <td>{!! $realState->area !!}</td>
                                            <th>المساحه</th>
                                        </tr>
                                        <tr>
                                            <td>{!! $realState->note !!}</td>
                                            <th>ملاحظات</th>
                                        </tr>
                                    
                                     </table>
                                </div>
                                
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
        <script src="../../js/jquery-3.2.1.min.js"></script>
        <script src="../../js/popper.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../../js/stellar.js"></script>
        <script src="../../vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="../../vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="../../vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="../../vendors/isotope/isotope-min.js"></script>
        <script src="../../vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="../../vendors/jquery-ui/jquery-ui.js"></script>
        <script src="../../js/jquery.ajaxchimp.min.js"></script>
        <script src="../../js/mail-script.js"></script>
        <script src="../../js/theme.js"></script>
    </body>
</html>