<?php
	session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Home</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
	<script type="text/javascript" src="js/jquery-1.5.2.js"></script>
	<script type="text/javascript" src="js/cufon-yui.js"></script>
	<script type="text/javascript" src="js/cufon-replace.js"></script>
	<script type="text/javascript" src="js/Cabin_400.font.js"></script>
	<script type="text/javascript" src="js/tabs.js"></script>
	<script type="text/javascript" src="js/jquery.jqtransform.js"></script>
	<script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript" src="js/atooltip.jquery.js"></script>
	<script type="text/javascript" src="js/script.js"></script>

</head>

<body id="page1">
	<div class="main">
		<!--header -->
		<header>
			<div class="wrapper">
				<h1><a href="index.html" id="logo">Air lines</a></h1>
				<span id="slogan">Fast, Frequent &amp; Safe Flights</span>
				<nav id="top_nav">
					<ul>
						<li style="color: white;font-size:20px;padding:0px;width:auto;"><?php echo "welcome ".$_SESSION["username"]."" ?></li>
					</ul>
				</nav>
			</div>
			<nav>
				<ul id="menu">
					<li id="menu_active"><a href="index.html"><span><span>About</span></span></a></li>
					<li><a href="Book.html"><span><span>Book</span></span></a></li>
					<li class="end"><a href="Contacts.html"><span><span>Contact</span></span></a></li>

				</ul>
			</nav>
		</header>
		<!-- / header -->
		<!--content -->


		<section id="content">
			<div class="for_banners">
				<article class="col1">
					<div class="tabs">
						<ul class="nav">
							<li class="selected"><a href="#Flight">Flight</a></li>
						</ul>
						<div class="content">
							<div class="tab-content" id="Flight">
								<form id="form_1" method="post" action="index.php">
									<div>
										<div class="radio">
											<div class="wrapper">
												<input type="radio" name="name1" checked>
												<span class="left">Standard</span>
												<input type="radio" name="name1">

											</div>
										</div>
										<div class="row">
											<span class="left">From</span>
											<input type="text" class="input">
										</div>
										<div class="row">
											<span class="left">To</span>
											<input type="text" class="input">
										</div>
										<div class="wrapper">
											<div class="col1">
												<div class="row">
													<span class="left">Departure</span>
													<input type="text" class="input1" value="03.05.2011" onblur="if(this.value=='') this.value='03.05.2011'" onFocus="if(this.value =='03.05.2011' ) this.value=''">
												</div>
												<div class="row">
													<span class="left">Return</span>
													<input type="text" class="input1" value="10.05.2011" onblur="if(this.value=='') this.value='10.05.2011'" onFocus="if(this.value =='10.05.2011' ) this.value=''">
												</div>
											</div>
											<input type="text" class="input1 marg_top1" value="+/- 0 Days" onblur="if(this.value=='') this.value='+/- 0 Days'" onFocus="if(this.value =='+/- 0 Days' ) this.value=''">
										</div>
										<div class="row">
											<span class="left">Adults</span>
											<input type="text" class="input2" value="2" onblur="if(this.value=='') this.value='2'" onFocus="if(this.value =='2' ) this.value=''">
										</div>
										<div class="row">
											<span class="left">Children</span>
											<input type="text" class="input2" value="0" onblur="if(this.value=='') this.value='0'" onFocus="if(this.value =='0' ) this.value=''">
											<span class="pad_left1">(0-11 years)</span>
										</div>
										<div class="wrapper">
											<span class="right relative"><a href="#" class="button1" onClick="document.getElementById('form_1').submit()"><strong>Search</strong></a></span>

										</div>
									</div>
								</form>
							</div>
							<div class="tab-content" id="Hotel">
								<form id="form_2" method="post">
									<div>
										<div class="radio">
											<div class="wrapper">
								</form>
							</div>
						</div>
					</div>
				</article>
				<div id="slider">
					<img src="images/banner1.jpg" alt="">
					<img src="images/banner2.jpg" alt="">
					<img src="images/banner3.jpg" alt="">
				</div>
			</div>
			<div class="wrapper pad1">
				<article class="col1">
					<div class="box1">

					</div>
				</article>
				<article class="col2">
					<h3>About Our Airlines<span>The fastest and safest Airline</span></h3>
					<div class="wrapper">
						<article class="cols">
							<figure><img src="images/page1_img1.jpg" alt="" class="pad_bot2"></figure>
							<p class="pad_bot1"><strong>Our Airlines is known for it's fast and safe flights for our customers. </strong></p>
							<p> We offer a wide spectrum of various flight destinations for very affordable prices. </p>
						</article>
						<article class="cols pad_left1">
							<figure><img src="images/page1_img2.jpg" alt="" class="pad_bot2"></figure>
							<p class="pad_bot1"><strong>This Airline has satisfied customers all over the world.</strong></p>
							<p>We have created a bond with our customers because we have never disappointed them and always stuck up with our slogan
							<p class="pad_bot1"><strong> "The fastest and safest Airline".</strong></p>
						</article>
					</div>

				</article>
			</div>
		</section>
		<!--content end-->

	</div>
	<script type="text/javascript">
		Cufon.now();
	</script>
	<script>
		$(document).ready(function() {
			tabs.init();
		});
		jQuery(document).ready(function($) {
			$('#form_1, #form_2, #form_3').jqTransform({
				imgPath: 'jqtransformplugin/img/'
			});
		});
		$(window).load(function() {
			$('#slider').nivoSlider({
				effect: 'fade',
				slices: 15,
				animSpeed: 500,
				pauseTime: 6000,
				startSlide: 0,
				directionNav: false,
				directionNavHide: false,
				controlNav: false,
				controlNavThumbs: false,
				controlNavThumbsFromRel: false,
				controlNavThumbsSearch: '.jpg',
				controlNavThumbsReplace: '_thumb.jpg',
				keyboardNav: true,
				pauseOnHover: true,
				manualAdvance: false,
				captionOpacity: 1,
				beforeChange: function() {},
				afterChange: function() {},
				slideshowEnd: function() {}
			});
		});
	</script>
</body>

</html>