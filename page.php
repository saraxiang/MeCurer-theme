<?php get_header(); ?>
<header>
  <nav>
    <a href="#" data-activates="slide-out-nav" class="button-collapse"><i class="material-icons">menu</i></a>
    <div class="container page-title"> page.php being loaded </div>
  </nav>
</header>

<main>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="container">
			<h2><?php the_title() ?></h2>
			<h5>Hardcoded Details</h5>
			<p><?php the_content() ?></p>        
			<hr>
	<?php endwhile; else : ?>

		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>

	<?php endif; ?>
</main>
<?php get_footer(); ?>