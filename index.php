<?php require_once("top.php") ?>

<!-- TITLE & OTHER -->
<title>Diamond Stud Earrings from Jacob Mor | New York's Finest Diamond Studs</title>

<script src='/jacobmor/static/js/easing.js'></script>

<style type="text/css">

.middle-section {
	background-color: white;
	height: 400px;
	overflow-x: auto;
	overflow-y: hidden;
    white-space: nowrap;
    padding: 0px 0px 0px 0px !important;
}

.item {
	/*background: url("/jacobmor/static/e1.jpg") no-repeat center center;*/
	background-color: white;
	height: 100%;
	width: 33.3333333%;
	min-width: 300px;
	margin-left: 0px !important;
	margin-right: 0px !important;
	display: inline-block;
	text-align: center;
}



.item-hero {
	width: 100%;
	height: 210px;
	display: inline-block;
    /*background-image: url("/jacobmor/static/e1.jpg");*/
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
}

@media (max-width: 500px) {
	.item {
		width: 100%;
	}

	.item-hero {
		height: 180px;
	}

	.middle-section {
		height: 370px;
	}
}

.item-hero {
    background-image: url("/jacobmor/static/e1.jpg");
}

.item-princess-classic {
	background-image: url("/jacobmor/static/img/diamond-stud-earrings/princess/classic/side.jpg")
}
.item-round-classic {
	background-image: url("/jacobmor/static/img/diamond-stud-earrings/round/classic/side.jpg")
}
.item-antique-classic {
	background-image: url("/jacobmor/static/img/diamond-stud-earrings/antique/classic/side.jpg")
}
.item-round-halo {
	background-image: url("/jacobmor/static/img/diamond-stud-earrings/round/halo/side.jpg")
}
.item-princess-halo {
	background-image: url("/jacobmor/static/img/diamond-stud-earrings/princess/halo/side.jpg")
}

.item-content {
	display: auto;
}

p.lead {
	padding-top: 0px !important;
	padding-bottom: 10px !important;
}

</style>

<script type="text/javascript">
	
	$(document).ready(function() {
		if ($(window).width() < 768) {
			makeItemFeatureFirst()
		}
		// $('.middle-section').scrollLeft(100)
	})

	function makeItemFeatureFirst() {
		var ft = $('.item-feature')
		$('.item-feature').remove()
		$('.middle-section').prepend(ft)
	}

	$(window).on('load', function() {

		var animation = $('.middle-section').stop().animate({scrollLeft:150}, 500, 'easeOutExpo', function() { 
   			// alert("Finished animating");
		}).animate({scrollLeft:0}, 1000, 'easeOutBounce', function() { 
   			// alert("Finished animating");
		});

	})

</script>

<!-- BODY -->
<div class="container-fluid">
	<div class="middle-section">
		<div class="item">
			<div class='item-hero item-princess-classic'></div>
			<h2 class="item-content">Princess Classic</h2>
			<p class="item-content lead">from $199 - $499</p>
			<button type="button" class="btn btn-primary btn-lg">Shop Now</button>
		</div>
		<div class="item item-feature">
			<div class='item-hero item-round-classic'></div>
			<h2 class="item-content">Round Classic</h2>
			<p class="item-content lead">from $199 - $499</p>
			<button type="button" class="btn btn-primary btn-lg">Shop Now</button>
		</div>
		<div class="item">
			<div class='item-hero item-antique-classic'></div>
			<h2 class="item-content">Antique Classic</h2>
			<p class="item-content lead">from $199 - $499</p>
			<button type="button" class="btn btn-primary btn-lg">Shop Now</button>
		</div>
		<div class="item">
			<div class='item-hero item-round-halo'></div>
			<h2 class="item-content">Round Halo</h2>
			<p class="item-content lead">from $199 - $499</p>
			<button type="button" class="btn btn-primary btn-lg">Shop Now</button>
		</div>
		<div class="item">
			<div class='item-hero item-princess-halo'></div>
			<h2 class="item-content">Princess Halo</h2>
			<p class="item-content lead">from $199 - $499</p>
			<button type="button" class="btn btn-primary btn-lg">Shop Now</button>
		</div>
	</div>	
		
</div>

<?php require_once("bottom.php") ?>
