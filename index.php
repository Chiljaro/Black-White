<?php get_header(); ?>

<!--///////////Generar slideshow////////-->
		<article class=" slideshow ed-item">
			<div class="no-slide">
				<?php include (TEMPLATEPATH. '/slideshow.php'); ?>
			</div>			
		</article>

<!--///////////Generación de contenido/////////////-->	
		
		<div class="ed-item l-75 main-content">	
			<?php query_posts("paged=$paged"); ?>
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="articulo">		
				<aside class="ed-item l-30 main-image">				
					<a href="<?php the_permalink(); ?>">
						<?php  if (has_post_thumbnail() ) { the_post_thumbnail('list_articles_thumbs'); } ?>
					</a>
				</aside>		
				<article class="ed-item l-70 main-text">	
					<hgroup><h1 class="main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></hgroup>
					<div class="date"><?php echo get_the_date( $post_id ); ?> en <span class="main-category"><?php the_category(); ?></span></div>
					<div class="extract"><?php the_excerpt(); ?></div>
				</article>
			</div>

			<?php endwhile; else: ?>
			<h1>No se encontraron articulos</h1>
			<?php endif; ?>	
			
			<div class="pagination ed-item">
				<p>
					<?php next_posts_link('<- Post Siguiente') ?>
					<?php previous_posts_link('Post	Anteriores ->') ?>
				</p>
			</div>

		</div>

		<?php include (TEMPLATEPATH. '/sidebar.php'); ?>
		
		

<?php get_footer(); ?>
