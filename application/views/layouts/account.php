<!DOCTYPE html>
<html lang="en">
    <head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Fav Icon -->
	<link id="favicon" rel="icon" type="image/png" href="img/favicon.ico" />
	<!-- Google Font Raleway -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:200,300,500,400,600,700,800' rel='stylesheet' type='text/css' />
	<!-- Google Font Dancing Script -->
	<link href='https://fonts.googleapis.com/css?family=Dancing+Script' rel='stylesheet' type='text/css' />
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/bootstrap.min.css" />
	<!-- Font Awesome CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/font-awesome.min.css" />
	<!-- Owl Carousel CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/owl.carousel.min.css" />
	<!-- Animate CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/animate.min.css" />
	<!-- simpleLens CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/jquery.simpleLens.css" />
	<!-- Price Slider CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/jquery-price-slider.css" />
	<!-- MeanMenu CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/meanmenu.min.css" />
	<!-- Magnific Popup CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/magnific-popup.css" />
	<!-- Nivo Slider CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/nivo-slider.css" />
	<!-- Stylesheet CSS -->
	<link rel="stylesheet" type="text/css" href="/public/styles/style.css" />
	<!-- Responsive Stylesheet -->
	<link rel="stylesheet" type="text/css" href="/public/styles/responsive.css" />

	<script src="/public/scripts/jquery.js"></script>
	<script src="/public/scripts/form.js"></script>
	<script src="/public/scripts/popper.js"></script>
	<script src="/public/scripts/bootstrap.js"></script>
    </head>
    <body>
    <div class="header-top"><!--Start Header Top Area-->
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-4">
                <div class="info">
                    <div class="phn-num float-left">
                        <i class="fa fa-phone float-left"></i>
                        <p> (343) 216-16-16 </p>
                    </div>
                    <div class="mail-id float-left">
                        <i class="fa fa-envelope-o float-left"></i>
                        <p><a href="#">danyatangens@yandex.ru</a></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div class="socials text-center">
                    <a href="https://www.instagram.com/aptekazhivika/" target="_blank"><i class="fa fa-instagram"></i></a>	
                </div>
            </div>
            <div class="col-sm-12 col-md-4">
                <div id="top-menu" class="float-right">
					<ul>
						<?php if (isset($_SESSION['account'])): ?>
						<li><a href="/account/personal">Профиль</a></li>
						<li><a href="/account/logout">Выход</a></li>
						<?php else: ?>
							<li><a href="/account/register">Регистрация</a></li>
                            <li><a href="/account/login">Войти</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div><!--End Header Top Area-->
    <div class="header-area"><!--Start Header Area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-lg-3">

			</div>
			<div class="col-sm-4 col-lg-6">
				<div class="logo text-center">
					<a href="/">
						<img src="/public/images/logo.png" alt="" />
						
					</a>
				</div>
			</div>
			<div class="col-sm-4 col-lg-3">
				<div class="cart-info float-right">
					<a href="/cart">
						<h5>В корзине <span><?php echo count($_SESSION['cart']) ?></span> товара(-ов)</h5>
						<i class="fa fa-shopping-cart"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</div><!--End Header Area-->
<div class="menu-area"><!--Start Main Menu Area-->
	<div class="container">
		<div class="row">
			<div class="clo-md-12">
           <!-- <div class="search float-right">
					<input type="text" value="" placeholder="Search Here...." />
					<button class="submit"><i class="fa fa-search"></i></button>
				</div> -->
				<div class="main-menu hidden-sm hidden-xs">
					<nav>
						<ul>
							<li><a href="/" class="active">Условия бронирования</a></li>
                            <li><a href="/" class="active">Условия доставки</a></li>
                            <li><a href="/" class="active">Адреса</a></li>
                            <li><a href="/" class="active">Новости</a></li>
                            <li><a href="/" class="active">Скидки и акции</a></li>
                            <li><a href="/" class="active">Оргиназация</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</div>
</div><!--End Main Menu Area-->
        <?php echo $content; ?>
        <hr>
        <div class="footer-top-area fix"><!--Start Footer top area-->
	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-6">
				<div class="row">
					<div class="col-sm-4 footer-account footer-links">
						<h2>Как заказать</h2>
						<ul>
							<li><a href="#">Карта клиента</a></li>
							<li><a href="#">Поиск товара</a></li>
							<li><a href="#">Условия бронирования</a></li>
							<li><a href="#">Личный кабинет</a></li>
							<li><a href="#">Предприятиям и ИП</a></li>
						</ul>
					</div>
					<div class="col-sm-4 footer-account footer-links">
						<h2>Об аптечной сети</h2>
						<ul>
							<li><a href="#">Новости компании</a></li>
							<li><a href="#">Отзывы производителей</a></li>
							<li><a href="#">Благотворительность</a></li>
                            <li><a href="#">Арендодателям</a></li>
                            <li><a href="#">Контакты</a></li>
						</ul>
                    </div>
                    <div class="col-sm-4 footer-account footer-links">
					<p>Информация, представленная на этой странице не является публичной офертой согласно ст. 435-437 Гражданского Кодекса РФ.

Вся информация и товары категории 18+</p>
                    </div>
				</div>			
			</div>
		</div>
	</div>
</div><!--Start Footer top area-->
                
                <!-- jQuery 2.1.4 -->
               
                <script type="text/javascript" src="/public/js/jquery.maskedinput.min.js"></script>
                <!-- Bootstrap JS -->
                <script type="text/javascript" src="/public/js/bootstrap.min.js"></script>
                <!-- Owl Carousel JS -->
                <script type="text/javascript" src="/public/js/owl.carousel.min.js"></script>
                <!--countTo JS -->
                <script type="text/javascript" src="/public/js/jquery.countTo.js"></script>
                <!-- mixitup JS -->
                <script type="text/javascript" src="/public/js/jquery.mixitup.min.js"></script>
                <!-- magnific popup JS -->
                <script type="text/javascript" src="/public/js/jquery.magnific-popup.min.js"></script>
                <!-- Appear JS -->
                <script type="text/javascript" src="/public/js/jquery.appear.js"></script>
                <!-- MeanMenu JS -->
                <script type="text/javascript" src="/public/js/jquery.meanmenu.min.js"></script>
                <!-- Nivo Slider JS -->
                <script type="text/javascript" src="/public/js/jquery.nivo.slider.pack.js"></script>
                <!-- Scrollup JS -->
                <script type="text/javascript" src="/public/js/jquery.scrollup.min.js"></script>
                <!-- simpleLens JS -->
                <script type="text/javascript" src="/public/js/jquery.simpleLens.min.js"></script>
                <!-- Price Slider JS -->
                <script type="text/javascript" src="/public/js/jquery-price-slider.js"></script>
                <!-- WOW JS -->
                <script type="text/javascript" src="/public/js/wow.min.js"></script>
                <script>
                    new WOW().init();
                </script>	
                <!-- Main JS -->
                <script type="text/javascript" src="/public/js/main.js"></script>

    </body>
</html>