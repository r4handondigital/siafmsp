 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
       
       <section class="interna">
       		<div class="container">
				<div class="row">
					<div class="col s12 m9">

						<h1 class="titulo-interna"><span>//</span>NOTÍCIAS</h1>
					
							
						<h2 class="titulo-noticia"><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span><?php echo strip_tags(get_the_title()); ?></h2>

						<div class="texto">
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							 <?php the_content(); ?> 



						<?php endwhile; endif; ?> 
         				<?php wp_reset_query(); ?> 
						</div>

					</div>
					<?php
						  /* Busca o arquivo header.php do tema e includa na página */
						  get_sidebar();
						?>
				</div>
       		</div>
       </section>

        
 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>