<section id="slideshow">
	
	<?php query_posts("paged=$paged"); ?>
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="slide ">
			<aside class="ed-item l-45 main-image thump ">				
				<a href="<?php the_permalink(); ?>">
					<?php  if (has_post_thumbnail() ) { the_post_thumbnail('slider_thumbs'); } ?>
				</a>
			</aside>		
			<article class="ed-item l-55 show-content">	
				<hgroup><h1 class="main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></hgroup>
				<div class="date"><?php echo get_the_date( $post_id ); ?> en <span class="main-category"><?php the_category(); ?></span></div>
				<div class="extract"><?php the_excerpt(); ?></div>
			</article>
		</div>

		<?php endwhile; else: ?>
		<h1>No se encontraron articulos</h1>
		<?php endif; ?>	
	
</section>