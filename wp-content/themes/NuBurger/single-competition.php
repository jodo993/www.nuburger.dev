<?php get_header(); ?>

<!-- start content -->

<div class="container">
	
    <div class="row">

        <div class="<?php echo suevafree_template('span') . " " . suevafree_template('sidebar'); ?>">

            <div class="row">

                <div <?php post_class(); ?> >
                    
                    <?php 
                        do_action('suevafree_postformat'); ?>
						<p class="entry-content"> <?php echo types_render_field("comment", array()); ?> </p>
						<p class="entry-content"> <?php echo types_render_field("rate", array()); ?> </p>
						<p class="entry-content"> <?php echo types_render_field("pictures", array()); ?> </p>
                        <?php
                        while ( have_posts() ) : the_post(); 
						
						endwhile;
                        
                    ?>
                        
                    <div style="clear:both"></div>
                    
                </div>

    		</div>
            
    	</div>

		<?php get_sidebar(); ?>
        	   
    </div>

</div>

<?php get_footer(); ?>