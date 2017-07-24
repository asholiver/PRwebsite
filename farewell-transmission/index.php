<?php get_header(); ?>

	<main class="c-section c-section--alt" role="main">
		<section class="l-container">

            <h1 class="tagline tagline--alt">Roster</h1>

            <ul class="l-grid l-grid--gutter-vertical-large l-grid--gutter-horizontal-large">

			 <?php get_template_part('loop'); ?>

            </ul>

		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
