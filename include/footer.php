<?php
include ('config.php');
?>
<style>
	.footer {
		background-color: #f2f2f2;
		padding: 50px 80px;
		border-top: 1px solid #d1d1d1;
	}

	.footer-upper {
		margin-bottom: 50px;
		text-align: center;
	}

	.footer-upper img {
		margin-bottom: 15px;
		height: 50px;
	}

	.footer-upper p {
		text-align: center;
	}

	.contain {

		margin: auto;
	}

	.row {
		display: flex;
		flex-wrap: wrap;
	}

	ul {
		list-style: none;
	}

	.footer-col {
		width: 25%;
		padding: 0 15px;
	}

	.footer-col h4 {
		font-size: 18px;
		color: #2b2a2a;
		text-transform: capitalize;
		margin-bottom: 25px;
		font-weight: 600;
		position: relative;
	}

	.footer-col h4::before {
		content: "";
		position: absolute;
		left: 0;
		bottom: -10px;
		background-color: #FF0808;
		width: 40px;
		height: 3px;
	}

	.footer-col ul li:not(:last-child) {
		margin-bottom: 10px;
	}

	.footer-col ul li a {
		color: #2b2a2a;
		display: block;
		font-size: 15px;
		font-weight: 500;
		text-transform: capitalize;
		text-decoration: none;
		transition: all 0.3s ease;
	}

	.footer-col ul li a:hover {
		color: #FF0808;
		padding-left: 7px;
	}

	.footer-col .social-links a {
		color: #FFF;
		background-color: rgba(255, 255, 255, 0.2);
		display: inline-block;
		height: 40px;
		width: 40px;
		border-radius: 50%;
		text-align: center;
		margin: 0 10px 10px 0;
		line-height: 40px;
		transition: all 0.5s ease;
		background-color: #FFF;
	}

	.footer-col .social-links a:hover {}

	@media(max-width: 767px) {
		.footer-col {
			width: 50%;
			margin-bottom: 30px;
		}
	}

	@media(max-width: 574px) {
		.footer-col {
			width: 100%;
		}
	}

	.footer-bottom {
		padding: 15px;
		background: #fff;
	}

	.footer-bottom h2 {
		text-align: center;
		font-size: 14px;
		font-weight: 500;
		color: #2b2a2a;
		line-height: normal;
	}

	.address-wrap {
		margin-bottom: 15px;
	}

	.address-wrap .country {
		font-size: 16px;
		font-weight: 600;
		color: #ff0808;
	}

	.address-wrap .add {
		font-weight: 600;
		line-height: normal;
		font-size: 14px;
	}

	.address-wrap .mail {
		color: #ff0808;
		font-size: 14px;
		font-weight: 600;
	}

	@media only screen and (min-width: 768px) and (max-width: 1024px) {
		.footer {
			background-color: #f2f2f2;
			padding: 50px;
		}
	}

	@media only screen and (max-width: 767px) {
		.footer {
			background-color: #f2f2f2;
			padding: 50px 20px;
		}
	}
</style>


<head>
	<script src="https://kit.fontawesome.com/3b161c540c.js" crossorigin="anonymous"></script>
</head>
<footer class="footer">
	<div class="footer-upper">
		<img src="<?= WEB_URL ?>images/sagartech.png" alt="sagartech logo">
		<p>
			Sagar Tech was founded in 2018 by young entrepreneurs with a customer & employee centric mind. Having
			contributed many services in the IT industry serving clients with services like web development, application
			development and software product development, we are capable of delivering solutions and exceeding your
			expectations
		</p>
	</div>
	<div class="contain row">
		<div class="footer-col">
			<h4>company</h4>
			<ul>
				<li><a href="<?= WEB_URL ?>about">About Us</a></li>
				<li><a href="<?= WEB_URL ?>contact">Contact Us</a></li>
				<!-- <li><a href="#">Team</a></li> -->
				<li><a href="<?= WEB_URL ?>blog">Blogs</a></li>
				<li><a href="<?= WEB_URL ?>our-portfolio">Portfolio</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<h4>Quick Links</h4>
			<ul>
				<li><a href="<?= WEB_URL ?>web-development-company-in-mumbai">Web Development</a></li>
				<li><a href="<?= WEB_URL ?>mobile-app-development-company-in-mumbai">App Development</a></li>
				<li><a href="<?= WEB_URL ?>digital-marketing-company-in-mumbai">Digital Marketing</a></li>
				<li><a href="<?= WEB_URL ?>graphic-design-services-in-mumbai">Graphic Designing</a></li>
				<li><a href="<?= WEB_URL ?>bulk-sms-service-provider-in-mumbai">Bulk SMS</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<h4>Our Address</h4>
			<div class="address-wrap">
				<span class="country">INDIA</span>
				<br>
				<span class="add">501, Vyapar Bhavan (Bldg No. 368), Narshi Natha Street, Masjid Bunder, Mumbai -
					400009</span>
				<br>
				<span class="mail"><a href="mailto:info@sagartech.co.in">info@sagartech.co.in</a></span>
			</div>
			<div class="address-wrap">
				<span class="country">DUBAI</span>
				<br>
				<span class="add">P.O. Box 7152, Dubai, UAE</span>
				<br>
				<span class="mail"><a href="mailto:info@sagartech.ae">info@sagartech.ae</a></span>
			</div>
		</div>
		<div class="footer-col">
			<h4>Contact Number</h4>
			<div class="address-wrap">
				<a href="tel:919820133303" class="country">+91 98201 33303</a>
				<br>
				<a href="tel:919152220484" class="country">+91 91522 20484</a>
			</div>
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.14610188209!2d72.820677774249!3d18.969153955319968!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7cf7f0baae5fd%3A0xe15b1154ec3eb6e9!2sSagar%20Tech%20-%20Web%20Developers%20%26%20Digital%20Marketing%20Agency!5e0!3m2!1sen!2sin!4v1708425595087!5m2!1sen!2sin"
				width="100%" height="120" style="border:0;" allowfullscreen="" loading="lazy"
				referrerpolicy="no-referrer-when-downgrade"></iframe>
			<div class="social-links">
				<a href="https://www.facebook.com/sagartechwebdevelopersmumbai"><i
						class="fa-brands fa-facebook-f"></i></a>
				<a href="https://www.instagram.com/sagartechsolutions/"><i class="fa-brands fa-instagram"></i></a>
				<a href="https://www.linkedin.com/company/sagar-tech-technical-solutions/"><i
						class="fa-brands fa-linkedin-in"></i></a>
			</div>

		</div>
	</div>
</footer>
<div class="footer-bottom">
	<h2>Copyright
		<span id="copyright">
			<script data-cfasync="false" src="../../../ email-decode.min.js"></script>
			<script>
				document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
			</script>
		</span>
		<a class="interlink" href="https://sagartech.co.in/">Sagar Tech - Technical Solutions</a> - Web Development &
		Web Design Company in Mumbai | All Rights Reserved
	</h2>
</div>
