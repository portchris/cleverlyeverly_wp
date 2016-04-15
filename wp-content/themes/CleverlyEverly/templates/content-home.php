<?php 
/*
	Template Name: Home Page
*/
?>

<?php if (!$_GET['event_id1']) : ?>
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
			<div class="row">
			  <div class="col-md-6">
			  	<?php the_content(); ?>
			  </div>
			  <div id="promo-vid" class="col-md-6">
			  		<h2>Cleverly Everly on YouTube</h2>
			  		<iframe width="100%" height="315px" style="max-width:560px;" src="//www.youtube.com/embed/5r_nOetl6Us" frameborder="0" allowfullscreen></iframe>
			  </div>
			</div>
		  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
		<?php endwhile; ?>
	</div>
<?php else : ?>
	<div class="container">
		<?php while (have_posts()) : the_post(); ?>
			<div class="row">
			  <div class="col-md-12">
			  	<?php the_content(); ?>
			  </div>
			</div>
		  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
		<?php endwhile; ?>
	</div>
<?php endif; ?>