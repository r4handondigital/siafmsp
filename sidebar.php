
					<div class="col s12 m3">
						<div class="row">
							<div class="col s12">
							<?php query_posts(array( 'post_type' => 'post','showposts' => '1', 'cat' => '4' )); ?>
								<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
				
						<a href="<?php the_permalink(); ?>" class="not-detalhe">
							<h4><span><?php echo get_the_date('d'); ?> de <?php echo get_the_date('F'); ?></span>
							 <?php echo strip_tags(get_the_title()); ?></h4>
							<img src="<?php the_field('img_outras'); ?>">
						</a>
					
					<?php endwhile; endif; ?> 
			         		<?php wp_reset_query(); ?>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<a href="http://www.fenapaf.org.br/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/imgs/Filiado-a_3.png" class="responsive-img"></a>
							</div>
						</div>

						<div class="row">
							<div class="col s12">
								<a href="<?php bloginfo('url'); ?>/cadastro-de-atletas"><img src="<?php bloginfo('template_url'); ?>/imgs/bt-cadastro-int.jpg" class="responsive-img"></a>
							</div>
						</div>

					</div>
