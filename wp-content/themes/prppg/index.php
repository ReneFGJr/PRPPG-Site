<?php
get_header();
?>

<?php
require("carousel.php");
?>

    <!-- MIOLO -->  
     
    <section>
        <div class="container texto_destaque">
            <h1>Lorem ipsum dolor sit <br>amet, consectetur</h1>
            <p>Phasellus feugiat at metus quis malesuada. Ut sed diam neque. Curabitur diam erat, pharetra id augue in, tempor tincidunt lacus. Integer suscipit euismod sodales. Ut congue nulla turpis, non elementum nisi tempor vitae. Cras vitae sapien sed massa laoreet porttitor eget non nibh. Vivamus blandit euismod urna, ut scelerisque enim tincidunt ac. Fusce eu diam ac sapien iaculis condimentum. Mauris congue arcu ut turpis ultrices congue.</p>
        </div>
    </section>

	<!--- Destaque ---->
	<section>
	<div class="row">
	<?php
	$id_post = 0;
	if(have_posts()) : while(have_posts() and ($id_post < 3)) : the_post();
	$id_post++;
	$img = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' );
	$img_scr = $img[0];
	?>
		
            <a href="<?php the_permalink();?>">
            <div class="card-box col-md-4 col-sm-6">
                 <div class="card" data-background="image" data-src="<?php echo $img_scr;?>" style="background-image: url('<?php echo $img_scr;?>'); background-size: cover; background-position: 50% 50%;">
                    <div class="header">
                        <div class="category">
                            <h6 class="label label-danger">Categoria</h6>    
                        </div>
                    </div>
                    <div class="content" style="z-index: 5;">
                        <h4 class="title title-uppercase"><?php the_title(); ?></h4>
                        <p class="description"><?php the_excerpt(); ?></p>
                    </div>                            
                    <div class="filter"></div>
                </div> <!-- end card --> 
            </div>
            </a>
<?php endwhile; else: ?>
	<p>nenhum post encontrado!</p>
<?php
endif;
?>
     </div>
</section>            		

<!-------------------- SIDE BAR ------------->
<?php get_sidebar(); ?>

<?php
	get_footer();
?>
