 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_header();
?>
        <section class="hiperbanner">
        	<img src="<?php bloginfo('template_url'); ?>/imgs/destaque.jpg" class="responsive-img">
        </section>
        <section class="sessao-destaques-noticias">
        	<div class="container">
				<div class="row">
					<div class="col s12 m12 l8">
						<div class="destaque-principal owl-carousel owl-theme">

						<?php query_posts(array( 'post_type' => 'post','showposts' => '8', 'cat' => '2' )); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
							<div class="chamadas-principais">
	                            <a href="<?php the_permalink(); ?>">
	                                <img src="<?php the_field('img_destaque'); ?>" alt="" class="responsive-img " />                                <div class="bloco-azul">
	                                    <h3>
	                                        <span><?php the_field('chapeu'); ?></span>
	                                       <?php echo strip_tags(get_the_title()); ?></h3>
	                                   
	                                </div><!--.bloco-azul-->
	                            </a>
	                        </div>
	                        <?php endwhile; endif; ?> 
			         		<?php wp_reset_query(); ?>
						</div>
					</div>

					<div class="col s12 m12 l4 hide-on-med-and-down">
						<div class="row">
							<div class="col s12">

							<?php query_posts(array( 'post_type' => 'post','showposts' => '1', 'cat' => '3' )); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<div class="chamadas-principais">
		                            <a href="<?php the_permalink(); ?>">
		                                <img src="<?php the_field('img_secundaria'); ?>" alt="" class="responsive-img "  />                                <div class="bloco-azul">
		                                    <h4>
		                                       <?php echo strip_tags(get_the_title()); ?>
		                                   </h4>
		                                </div><!--.bloco-azul-->
		                            </a>
		                        </div>

								<?php endwhile; endif; ?> 
			         		<?php wp_reset_query(); ?>
						</div>
						
					</div>
				</div>
			</div>
        </section>

        <section class="sessao-mais-noticias">
        	<div class="container">
				<div class="row">

					<?php query_posts(array( 'post_type' => 'post','showposts' => '4', 'cat' => '4' )); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="col s12 m3">
						<a href="<?php the_permalink(); ?>" class="not-detalhe">
							<h4><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
							 <?php echo strip_tags(get_the_title()); ?></h4>
							<img src="<?php the_field('img_outras'); ?>">
						</a>
					</div>
					<?php endwhile; endif; ?> 
			         		<?php wp_reset_query(); ?>

				</div>
				<div class="row no-margin">
					<div class="col s12">
						<p class="center"><a class="more-n" href="<?php bloginfo('url'); ?>/nav/noticias">[+] Mais noticias</a></p>
					</div>
				</div>
        	</div>
        </section>
        
        <section>
        	<div class="container">
				<div class="row">
					<div class="col s12 m8">
						<img src="<?php bloginfo('template_url'); ?>/imgs/bt-cadastro-atletas.jpg">
					</div>

					<div class="col s12 m4">
						<img src="<?php bloginfo('template_url'); ?>/imgs/bt-fenapaf.jpg" class="responsive-img">
					</div>
				</div>
        	</div>
        </section>

 <?php
  /* Busca o arquivo header.php do tema e includa na página */
  get_footer();
?>