<?php 
/**
 * Template Name: Competition
 *
 */
get_header(); ?>

<div class="container">

	<div class="row" id="blog" >
    
    <?php 
 
//Define your custom post type name in the arguments
 
$args = array('post_type' => 'competition');
 
//Define the loop based on arguments
 
$loop = new WP_Query( $args );
 
//Display the contents
 
while ( $loop->have_posts() ) : $loop->the_post();
?>
<h1 class="entry-title"><?php the_title(); ?></h1>
<div class="entry-content">
<?php the_content(); ?>

<p class="entry-content"> <?php echo types_render_field("comment", array()); ?> </p>
<p class="entry-content"> <?php echo types_render_field("rate", array()); ?> </p>
<p class="entry-content"> <?php echo types_render_field("pictures", array()); ?> </p>
</div>
<?php endwhile;?>
    
    
	<?php if ( ( suevafree_template('sidebar') == "left-sidebar" ) || ( suevafree_template('sidebar') == "right-sidebar" ) ) : ?>
        
	<div class="<?php echo suevafree_template('span') .' '. suevafree_template('sidebar'); ?>"> 
        
		<div class="row"> 
        
    <?php 
	
		endif;
		
		if ( have_posts() ) :  
		
	?>
            
            <div <?php post_class(); ?> >
        
                <div class="post-article category">
        
                        <p> <?php echo suevafree_get_archive_title(); ?> </strong> </p>
                        
                </div>
        
            </div>
            
	<?php while ( have_posts() ) : the_post(); ?>
    
            <div <?php post_class(); ?> >
        
                <?php do_action('suevafree_postformat'); ?>
            
                <div style="clear:both"></div>
                
            </div>
            
	<?php endwhile; else:  ?>
    
            <div class="post-container col-md-12" >
        
                <div class="post-article category">
                        
                    <h1><?php _e( 'Not found.',"suevafree" ) ?></h1>
                        
                    <p><?php _e( 'Sorry, no posts matched into ',"suevafree" ) ?> <strong>: <?php the_category(' '); ?></strong></p>
         
                </div>
        
            </div>
        
	<?php 
	
		endif;
		
		if ( ( suevafree_template('sidebar') == "left-sidebar" ) || ( suevafree_template('sidebar') == "right-sidebar" ) ) : ?>
        
		</div>
    
	</div>
        
    <?php 
	
		endif;
		
		if ( suevafree_template('span') == "col-md-8" ) :  
		
			do_action('suevafree_side_sidebar', 'category-sidebar-area');

    	endif; 
	
	?>

    </div>
    
</div>

<?php

	get_template_part('pagination');
	get_footer(); 

?>