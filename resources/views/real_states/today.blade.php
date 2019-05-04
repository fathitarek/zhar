<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>عقارات اليوم | نظام عقارات الزهار</title>
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
                                @endif                                <li class="nav-item"><a class="nav-link" href="/search">بحث عن عقار</a></li>
                                <li class="nav-item active"><a class="nav-link" href="/today">العقارات المضافة اليوم</a></li>
                                
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
                        <h2>العقارات التى تمت إضافتها اليوم</h2>
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
                                    <thead>
                                        <tr>
                                            <th>بواسطة</th>
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
                                            <td>220</td>
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