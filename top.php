<!DOCTYPE html>
<html>
<meta charset="UTF-8">

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css" integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">

<!-- SCRIPTS -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>

<!-- FAVICON -->
<link href="./favicon.svg" rel="icon" type="image/x-icon" />
<link href="./favicon.svg" rel="shortcut icon" type="image/x-icon" />

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- STYLE -->
<style type="text/css">

	/* GENERIC */
	p {
		font-family: 'AvenirNext-Regular';
		margin: 0; 
		padding: 8px 13px 8px 13px;
	}

	h1, h2, h3, h4, h5, h6 {
		font-family: 'AvenirNext-Medium';
		margin: 0; 
		padding: 8px 13px 8px 13px;
	}

	h2 {
		font-size: 36px;
	}

	div {
		padding: 0 !important;
		margin: 0 !important;
	}

	/* NAVBAR */

	.p-nav {
		padding: 0;
		margin: 0;
	}
	
	.nav-left {
		text-align: left;
		padding: 0;
		margin: 0;
	}

	.nav-center, .nav-center-small, .nav-center-medium {
		text-align: center;
		padding: 0;
		margin: 0;
	}

	@media (max-width: 767px) {
		.nav-center {
			text-align: left;
		}
	}

	.nav-right {
		text-align: right;
		padding: 0;
		margin: 0;
	}

	.p-nav-top {
		font-size: 10px;
		font-family: 'AvenirNext-DemiBold';
		letter-spacing: 0.75px;
	}


	.p-nav-bottom {
		font-size: 20px;
		font-family: 'AvenirNext-Medium';
	}

	.p-nav-center {
		font-size: 12px;
		font-family: 'AvenirNext-Medium';
		letter-spacing: 0.75px;
	}

	.p-nav-logo {
		font-family: 'AvenirNext-Bold';
		font-size: 24px;
	}

	.p-gray {
		color: #343;
	}

	.p-blue {
		color: #3778DE;
	}

	.navbar {
		background-color: white;
		border-bottom: 1px solid;
		border-bottom-color: rgba(0,0,0,0.1);
	}

	.d-nav-logo {
		position: relative;
	}

	.v-center-align {
	 	display: flex; 
	    justify-content: center; 
	    flex-direction: column; 
	}

	.s-nav-center-text {
	 	display: flex; 
	    justify-content: center; 
	    flex-direction: column; 
	}

	.height-48 {
	    height: 48px; 
	}

	.height-24 {
	    height: 24px; 
	}

	.no-wrap {
		white-space: nowrap;
	}

	nav {
		padding: 8px 13px 8px 13px !important;
	}

	.btn-primary {
		background-color: #3778DE;
		border-color: #3778DE;
		font-family: 'AvenirNext-Medium';

	}


</style>


<!-- MOBILE NAVBAR -->


<nav class="navbar navbar-top navbar-light hidden-md-up">
	<div class="container-fluid">
		<div class="row d-nav-logo">
			<div class="col-xs-12 nav-center-small">
				<span class="s-nav-center-text height-48 no-wrap">
					<p class="p-nav p-nav-logo"><span class="p-gray">JACOB</span> <span class="p-blue">MOR</span></p>
					<p class="p-nav p-nav-top">Stunning Diamond Earrings</p>
				</span>
			
			</div>
		</div>
	</div>
</nav>

<nav class="navbar navbar-top navbar-light hidden-md-up">
	<div class="container-fluid">
		<div class="row d-nav-logo">
			<div class="col-xs-12 nav-center-small">
				<span class="s-nav-center-text height-24 no-wrap">
					<!-- <p class="p-nav p-nav-top">CALL US:</p> -->
					<p class="p-nav p-nav-bottom">(212) 921-4220</p>
				</span>
			
			</div>
	<!-- 		<div class="col-xs-6 nav-center-small">
				<span class="s-nav-center-text height-24 no-wrap">
					<p class="p-nav p-nav-top">CALL US:</p>
					<p class="p-nav p-nav-bottom">(212) 921-4220</p>
				</span>
			
			</div> -->
		</div>
	</div>
</nav>


<!-- NAVBAR -->

<nav class="navbar navbar-top navbar-light hidden-sm-down">
	<div class="container-fluid">
		<div class="row d-nav-logo">
			<div class="col-md-4 nav-left ">
				<span class="s-nav-center-text height-48 no-wrap">
					<p class="p-nav p-nav-top">PRESTINE QUALITY, EXCELLENT PRICES</p>
					<p class="p-nav p-nav-bottom">Stunning diamond earrings</p>
				</span>
			</div>
			<div class="col-md-4 nav-center col-xs-6">
				<span class="s-nav-center-text height-48 no-wrap">
					<p class="p-nav p-nav-logo hidden-sm-down"><span class="p-gray">JACOB</span> <span class="p-blue">MOR</span></p>
					<p class="p-nav p-nav-top">Stunning Diamond Earrings</p>
				</span>
			</div>
			<div class="col-md-4 nav-right col-xs-6" >
				<span class="s-nav-center-text height-48 no-wrap">
					<p class="p-nav p-nav-top hidden-sm-down">QUESTIONS?</p>
					<p class="p-nav p-nav-bottom">(212) 921-4220</p>
				</span>
			</div>
		</div>
	</div>
</nav>

<nav class="navbar navbar-top navbar-light">
	<div class="container-fluid">
		<div class="row d-nav-logo">
			<div class="col-xs-12 nav-center-small col-xs-6">
				<span class="s-nav-center-text height-24">
					<p class="p-nav p-nav-center">Live near NYC? We'll send you an uber, so you can pick up your earrings in person!</p>
				</span>
			</div>
		</div>
	</div>
</nav>
