<footer class="content-info" role="contentinfo">
	<div class="container">
	  <div class="row">
	    <div class="col-lg-12">
	      <?php dynamic_sidebar('sidebar-footer'); ?>
	      <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?> | <a href="<?php echo home_url(); ?>/wp-admin">Admin Log in</a> | Web development by <a target="_blank" href="http://www.portchris.co.uk">Chris Rogers</a></p>
	    </div>
	  </div>
	</div>
</footer>

<?php wp_footer(); ?>
