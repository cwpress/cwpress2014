<?php
/* Merch Template */

?>



<div class="merch-wrapper">
	<div class="merch-content">

	<div class="home-order">
	<a href="<?php echo site_url(); ?>/quote-request/"><img src="<?php echo site_url(); ?>/wp-content/themes/cwpress2014/images/place-order.svg"></a>
	</div>

	<div class="tesimonial-container">
	<?php echo get_new_royalslider(4); ?>
	</div>

	<div class="clear"></div>
	<div class="retail-divide">OUR OWN LINE OF RETAIL GOods are READILY AVAILABLE online and our brick and mortar STORE</div>
	
	<!-- Shopify Plugin linkcious - plugin lives on shopify and they give this code -->
	<div id = "linkcious_ads" style = "display: inline-block;" ></div>
	<script charset="utf-8" src = "<?php echo site_url(); ?>/wp-content/themes/cwpress2014/js/linkcious.js"></script>
	<script>
	Linkcious.init({
		settings: {
			type: 'products',
			key: '5322f771fd92ad9bc9d231363cd70c5292f4ce20',
			rows: 1,
			cols: 4,
			img_width: 180,
			img_height: 180,
			title: true,
			price: true,
		},
		theme: {
			ads: {
				color: '#000000',
				background: 'transparent',
				font: 'Helvetica Neue',
				size: 15,
				title_bold: true,
				img_border: true,
				img_border_color: '#ECECEC',
			},
		}
	});	
	</script> <!-- end linkcious -->



	<div class="print2live">PRINT TO LIVE <i class="fa fa-instagram"></i> LIVE TO PRINT</div>

	</div>
</div>