<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<title>Fitness In A Can</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/imgs/favicon.png" />

	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous" />

	<!-- Additionals -->
	<script src="https://kit.fontawesome.com/e0b3909ecc.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />

	<!--Custom CSS-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
</head>


<body>
	<?php
	get_header();
	?>



	<main class="container defaultpage">

		<section class="row">
			<div class="offset-1 col-7">
				<?php
				if (have_posts()) {
					while (have_posts()) {
						the_post();
						the_title('<h1>', '</h1>');
						the_post_thumbnail('large');
						the_content();
					}
				}
				?>
			</div>
			<?php
			get_sidebar();
			?>



		</section>





	</main>




	<?php
	get_footer();
	?>

</body>

</html>

<!--jQuery & Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

<!--Custom JavaScript-->
<script src="js/main.js"></script>