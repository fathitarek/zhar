<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>إضافة عقار جديد | نظام عقارات الزهار</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="vendors/linericon/style.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive.css">
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
								<li class="nav-item active"><a class="nav-link" href="add.php">إضافة عقار جديد</a></li> 
								<li class="nav-item"><a class="nav-link" href="search.php">بحث عن عقار</a></li>
								<li class="nav-item"><a class="nav-link" href="today.php">العقارات المضافة اليوم</a></li>
                                
                                <!-- show this li when admin login only -->
								<li class="nav-item"><a class="nav-link" href="logout.php">تسجيل الخروج</a></li>
                                
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
						<h2>إضافة عقار جديد فى نظام عقارات الزهار</h2>
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
                                        
                                        <!-- start here -->
                                        <tr>
                                            <td>01-01-2019</td>
                                            <td>الرحاب</td>
                                            <td>115</td>
                                            <td>35</td>
                                            <td>6</td>
                                            <td>220</td>
                                            <td>7000</td>
                                            <td><a href="edit.php" class="genric-btn primary small">تعديل</a></td>
                                        </tr>
                                        <!-- end here -->
                                        
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
								<form method="post" action="#">
                                    
                                    <div class="mt-10 title-s">العنوان</div>
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="city" required>
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
										<input type="text" name="address_group" placeholder="رقم المجموعة" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم المجموعة'" class="single-input" required>
									</div>
                                    
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="address_apartment" placeholder="رقم العمارة" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم العمارة'" class="single-input" required>
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="address_flat" placeholder="رقم العقار" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم العقار'" class="single-input" required>
									</div>
                                    
                                    <div class="mt-10 title-s">تفاصيل العقار</div>
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-building-o" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="type" required>
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
											<select name="view" required>
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
											<select name="why" required>
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
										<input type="text" name="client_name" placeholder="إسم العميل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'إسم العميل'" class="single-input" required>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
										<input type="text" name="client_mobile" placeholder="رقم موبايل العميل" onfocus="this.placeholder = ''" onblur="this.placeholder = 'رقم موبايل العميل'" class="single-input" required>
									</div>
                                    
									
									<div class="mt-10 title-s">السعر</div>
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-money" aria-hidden="true"></i></div>
										<input type="text" name="price" placeholder="السعر" onfocus="this.placeholder = ''" onblur="this.placeholder = 'السعر'" class="single-input" required>
									</div>
                                    
                                    <div class="mt-10 title-s">أخرى</div>
                                     <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-check" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="status" required>
												<option value="">حالة الطلب</option>
												<option value="1">متاح</option>
												<option value="2">غير متاح</option>
											</select>
										</div>
									</div>
                                    
                                    <div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
										<input type="date" name="date_finish" placeholder="تاريخ إنتهاء الحالة" onfocus="this.placeholder = ''" onblur="this.placeholder = 'تاريخ إنتهاء الحالة'" class="single-input" required>
									</div>
                                    
                                    <div class="mt-10">
										<textarea name="notes" class="single-textarea" placeholder="ملاحظات" onfocus="this.placeholder = ''" onblur="this.placeholder = 'ملاحظات'" required></textarea>
									</div>
									
                                    <div class="mt-10">
                                        <input class="submit_btn single-input-secondary" type="submit" value="إضافة العقار">
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
        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/stellar.js"></script>
        <script src="vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="vendors/isotope/isotope-min.js"></script>
        <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="vendors/jquery-ui/jquery-ui.js"></script>
        <script src="js/jquery.ajaxchimp.min.js"></script>
        <script src="js/mail-script.js"></script>
        <script src="js/theme.js"></script>
    </body>
</html>