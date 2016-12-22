<?php get_header(); ?>



<!--///////////Generación de contenido/////////////-->	
		
		<div class="ed-item l-75 main-content">	
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="articulo">			
				<article class="ed-item main-text">	
					<hgroup><h1 class="main-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1></hgroup>
					<div class="date"><?php echo get_the_date( $post_id ); ?> en <span class="main-category"><?php the_category(); ?></span></div>
					
					<div class="extract"><?php the_content(); ?></div>
				</article>
			</div>

			<?php endwhile; else: ?>
			<h1>No se encontraron articulos</h1>
			<?php endif; ?>	
			
		</div>

		<?php include (TEMPLATEPATH. '/sidebar.php'); ?>
		
		<div class="main-comentarios" id="comentarios">
			<h3>Comentarios</h3>
			<div id="caja_comentarios">
				<?php comments_template(); ?>
			</div>
		</div>
		

<?php get_footer(); ?>
