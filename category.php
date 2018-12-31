 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
       
       <section class="interna">
       		<div class="container">
				<div class="row">
					<div class="col s12 m9">

						<h1 class="titulo-interna"><span>//</span>NOTÍCIAS</h1>
					
						
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
				<div class="row linha-listagem">
					

						<div class="col s12 ">
						   	<a href="<?php the_permalink(); ?>">
							   <h2 class="titulo-noticia">
									<span><?php the_field('chapeu'); ?>  <?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
									<?php echo strip_tags(get_the_title()); ?>
								</h2>
							</a>
						    <div class="conteudo-lista">
						    	<p class="center"><img src="<?php echo catch_that_image() ?>" class="responsive-img"></p>
						    	<div class="texto">
									<?php the_excerpt(); ?> 
								</div>

								<p><a href="<?php the_permalink(); ?>"	class="ver-mais">LER MAIS</a></p>
						    </div>



						</div>
						
				
				</div>

				<?php endwhile; endif; ?> 

			         <?php wp_reset_query(); ?>

				<div class="row">
					<div class="col s12">
						<div class="navigation">
						    <?php if (function_exists('pagination_funtion')) pagination_funtion(); ?>
						</div>  
					</div>
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