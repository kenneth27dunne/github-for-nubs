<html><head>	<link type="stylesheet" href="styles/style.css"></head><body>		<!--- header --->		<div class="head-container overlay">			<?php //Include("Includes/nav.php");?>			<div class="hero-text">				<h1 class="site-title"><span>Expand  Your Reach</span></h1>				<p class="site-description">					Simple. Creative. Powerful.				</p>			</div>		</div>
		<!--- sign up --->		<div class="signup-container">			<form class="signup-form">				<h2>Join Our Newsletter Today</h2>				<p>					Our monthly newsletter is packed full of useful tips to help grow your business, special offers, discounts and More.. Enter your email below to join today!				</p>				<input class="signup-email" type="text" name="email" placeholder="Enter your email address">				<input class="signup-submit" type="submit" value="Sign Up">			</form>		</div>
		<!---services --->		<div class="services-container">			<h1 class="design-title">Our Services</h1>			<div class="service-widget-area">				<div class="service-widget">					<h3>eCommerce</h3>					<div class="icon eCommerce"></div>					<p>						An eCommerce website can help your business expand and reach new customers from all around the world with minimal hassle.					</p>					<a href="services.php"><button>						Read More					</button></a>				</div>				<div class="service-widget">					<h3>Web Design</h3>					<div class="icon web-design"></div>					<p>						Here at click shift we provide you with professional, modern designs which will captivate your audience. We design all types of websites from small personal sites to large business websites.					</p>					<a href="services.php#web-design"><button>						Read More					</button></a>				</div>				<div class="service-widget">					<h3>CMS</h3>					<div class="icon wordpress"></div>					<p>						We create custom CMS templates for users who want to take control of there own content. This is easily done using content management systems such as Wordpress or Magento. Ideal for blogs & eCommerce websites.					</p>					<a href="services.php#wordpress"><button>						Read More					</button></a>				</div>				<div class="service-widget">					<h3>Support</h3>					<div class="icon support"></div>					<p>						Having a problem? We are always on hand to help you with any issues you may find. We can provide you with training and advice at a moments notice.					</p>					<a href="services.php#digiMarket-service"><button>						Read More					</button></a>				</div>			</div>		</div>
		<!--- clients --->		<div class="client-container overlay">			<h1 class="design-title">Our Clients</h2>			<div class="client-area">				<div class="client-icon-area">					<div class="item "><img src="assets/mw365.png"/ width="200px"></div>					<div class="item kickstart"><img src="assets/kickstart graphicslogo.png"/></div>					<div class="item earthware"><img src="assets/eartwareskincarelogo.png"/></div>	        	<!---	<div class="item ivosta"><img src="assets/ivosta.png"/></div> --->				</div>			</div>		</div>
		<!--- responsive --->		<div class="responsive-area-container">			<div class="inner-responsive-container">				<h1 class="design-title">We Do Responsive Design</h2>				<div class="desktop-area">					<div class="desktop-text">						<h3 class="accent-color">From desktop...</h3>						<p>							Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de stanetterzetting. Het is in de jaren '60 populair geworden met de ientelijk door desktop publishing software						</p>					</div>					<div class="desktop-img">						<img src="assets/icons/desktop.png">					</div>				</div>				<div class="mobile-area">					<div class="mobile-img">						<img src="assets/icons/mobile.png">					</div>					<div class="mobile-text">						<h3 class="accent-color">... to mobile</h3>						<p>							Lorem Ipsum is slechts een proeftekst uit het drukkerij- en zetterijwezen. Lorem Ipsum is de stanetterzetting. Het is in de jaren '60 populair geworden met de ientelijk door desktop publishing software						</p>					</div>				</div>			</div>		</div>
		<!--- Quote Area--->		<div class="request-quote-container">			<h1 class="design-title">Get In Touch</h2>			<form>				<input  type="text" placeholder="Name">				<input  type="email" placeholder="Email">				<br>				<textarea  placeholder="Message"></textarea>
				<br>				<div>					<input type="submit" value="Send"/>				</div>			</form>		</div></body>
</html>
<script>	$(window).scroll(function(){		var wScroll = $(this).scrollTop();		$('.hero-text').css({			'transform'  : 'translate(0px, '+ (wScroll / 5) + '%)'		});		$('.page-title').css({			'transform'  : 'translate(0px, '+ (wScroll / 9) + '%)'		});		if (wScroll > $(".service-widget-area").offset().top - $(window).height() / 1.7){	    	animateServices();		}	});</script>