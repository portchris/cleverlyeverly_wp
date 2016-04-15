<?php 
/*
	Template Name: Testimonials Page
*/
?>
<?php $testimonials = simple_fields_fieldgroup("testimonials_table"); ?>
<div class="container">
	<?php while (have_posts()) : the_post(); ?>
		<div class="row">
		  <div class="col-md-12">
		  	<?php the_content(); ?>
		  </div>
		  <?php if (!empty($testimonials)): ?>
			  <div class="col-md-9">
			  	<table id="testimonials-table" cellborder="1" cellpadding="5" cellspacing="0">
			  		<thead>
				  		<tr>
				  			<td id="testimonial-name-title"><?php _e("Customer Name"); ?></td>
				  			<td id="testimonial-quote-title"><?php _e("Customer Testimonial");?></td>
				  			<td id="testimonial-rating-title"><?php _e("Customer Rating"); ?></td>
				  		</tr>
				  	</thead>
				  	<tbody>
					  	<?php foreach ($testimonials as $key => $value) : ?> 
					  		<tr>
					  			<td class="testimonial-name"><?php echo $value['testimonial_name']; ?></td>
					  			<td class="testimonial-quote"><?php  echo $value['testimonial_quote']; ?></td>
					  			<td class="testimonial-rating">
					  				<?php 
					  				$rating = $value['testimonial_rating']['selected_value']; 
					  				if (strstr(strtolower($rating), "1 star")) 
					  				{
					  					echo '<img src="' . get_template_directory_uri() . '/assets/img/1-star.png" alt="This testimonial has been rated 1 star" width="150px"/>';
					  				}
					  				else if (strstr(strtolower($rating), "2 stars")) 
					  				{
					  					echo '<img src="' . get_template_directory_uri() . '/assets/img/2-stars.png" alt="This testimonial has been rated 2 stars" width="150px"/>';
					  				}
					  				else if (strstr(strtolower($rating), "3 stars")) 
					  				{
					  					echo '<img src="' . get_template_directory_uri() . '/assets/img/3-stars.png" alt="This testimonial has been rated 3 stars" width="150px"/>';
					  				}
					  				else if (strstr(strtolower($rating), "4 stars")) 
					  				{
					  					echo '<img src="' . get_template_directory_uri() . '/assets/img/4-stars.png" alt="This testimonial has been rated 4 stars" width="150px"/>';
					  				}
					  				else if (strstr(strtolower($rating), "5 stars")) 
					  				{
					  					echo '<img src="' . get_template_directory_uri() . '/assets/img/5-stars.png" alt="This testimonial has been rated 5 stars" width="150px"/>';
					  				}

					  				?>
					  			</td>
					  		</tr>
					  	<?php endforeach; ?>
				  </tbody>
			  	</table>
			  </div>
			<?php endif; ?>
		</div>
	  <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
	<?php endwhile; ?>
</div>
