<?php 

$product_id = empty($_GET["id"]) ? '' : $_GET["id"];

$products = [
	'round-classic-diamond-stud-earrings' => [
		'img_dir' => '/jacobmor/static/img/diamond-stud-earrings/round/classic/',
		'title' => 'Round Classic'
	],
	'round-halo-diamond-stud-earrings' => [
		'img_dir' => '/jacobmor/static/img/diamond-stud-earrings/round/halo/',
		'title' => 'Round Halo'
	],
	'princess-classic-diamond-stud-earrings' => [
		'img_dir' => '/jacobmor/static/img/diamond-stud-earrings/princess/classic/',
		'title' => 'Princess Classic'
	],
	'princess-halo-diamond-stud-earrings' => [
		'img_dir' => '/jacobmor/static/img/diamond-stud-earrings/princess/halo/',
		'title' => 'Princess Halo'
	],
	'antique-classic-diamond-stud-earrings' => [
		'img_dir' => '/jacobmor/static/img/diamond-stud-earrings/antique/classic/',
		'title' => 'Antique Classic'
	],
];


// exit if product not found
if (!array_key_exists($product_id, $products)) {
	echo "<h1>Not Found</h1>";
	exit();
}

require_once("top.php");
$product = $products[$product_id];
$product['id'] = $product_id;

echo "<title>" . $product['title'] . " Diamond Stud Earrings from Jacob Mor | New York's Finest Diamond Studs</title>";

?>



<!-- TITLE & OTHER -->

<script src='/jacobmor/static/js/easing.js'></script>

<style type="text/css">


.item-hero {
	width: 100%;
	height: 315px;
	display: inline-block;
    /*background-image: url("/jacobmor/static/e1.jpg");*/
    background-size: cover;
    background-repeat: no-repeat;
    /*background-position: 50% 0%;*/
}

@media (max-width: 500px) {
	.item-hero {
		height: 210px;
	}
}

.item-hero-front {
    background-image: url("<?php echo $product["img_dir"] . 'crop/front.jpg'; ?>");
}

.item-hero-side {
    background-image: url("<?php echo $product["img_dir"] . 'crop/side.jpg'; ?>");
}


p.lead {
	padding-top: 0px !important;
	padding-bottom: 10px !important;
}

p.item-description {
	line-height: 30px;
}

.row-top-padding {
	padding-top: 100px !important;
}

.h1-item-options {
	padding-top: 0 !important;
	font-family: 'AvenirNext-Regular'
}

.h2-item-options {
	font-family: 'AvenirNext-Regular';
	font-size: 28px;
	padding-bottom: 0px !important;
}

hr {
	margin: 24px 13px 24px 13px !important;
}


/*.btn {
	margin: 8px 8px 8px 8px !important;
}*/

.btn-option {
	text-align: left !important;
}

.option-block {
	margin-top: 20px !important;
}

.btn-option-vertical {
	padding-left: 13px !important;
	padding-right: 13px !important;
}

</style>

<script type="text/javascript">
	
	$(document).ready(function() {

	})


	$(window).on('load', function() {


	})

</script>

<!-- BODY -->
<div class="container-fluid">
	<div class="row row-top-padding">
		<div class="col-md-1">
		</div>
		<div class="col-md-5 col-left">
			<div class="item-hero item-hero-side">
				
			</div>
		</div>
		<div class="col-md-4 col-right">
			<h1 class="h1-item-options"> <?php echo $product["title"]; ?> </h1>
			<p class="item-description">
			Free 2 Day Shipping or In-Store Pickup<br>
			0.50ct - 10.00ct total weight<br>
			14k White or Yellow Gold, 18k White gold, Rose Gold or Platinum<br>
			5 Setting Options<br>
			3 Backing Types<br>
			</p>
			<hr>
			<div id="option-size" class="option-block">
				<h2 class="h2-item-options"> Size </h2>
				<p><a href="#">Which size is right for you?</a></p>
				<div class="btn-option-vertical">
					<button type="button" class="btn btn-outline-primary btn-lg btn-option btn-block">Option 1</button>
					<button type="button" class="btn btn-outline-primary btn-lg btn-option btn-block">Option 2</button>
					<button type="button" class="btn btn-outline-primary btn-lg btn-option btn-block">Option 3</button>
				</div>
			</div>
			<div id="option-material" class="option-block">
				<h2 class="h2-item-options"> Material </h2>
				<p><a href="#">Which size is right for you?</a></p>
				<div class="btn-option-vertical">
					<button type="button" class="btn btn-outline-primary btn-lg btn-option btn-block">Option 1</button>
					<button type="button" class="btn btn-outline-primary btn-lg btn-option btn-block">Option 2</button>
					<button type="button" class="btn btn-outline-primary btn-lg btn-option btn-block">Option 3</button>
				</div>
			</div>
			<br>
			<br>
			<br>
		</div>

	</div>
</div>

<?php require_once("bottom.php") ?>
