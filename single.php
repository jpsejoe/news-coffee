<?php get_header(); ?>

<div class="album py-5 bg-light">
	<div class="content container">
		<div class="shadow-sm p-3 mb-5 bg-body rounded">
			<div class="d-lg-flex">
				<div class="main">
					<main>
						<article>
			
							<?php if(have_posts()): while(have_posts()):the_post(); ?>
							
							<h1><a href="<?php the_permalink(); ?>" class="link-dark"><?php the_title(); ?></a></h1>
							
							<time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
							<p><?php the_category(', '); ?></p>
							<p><?php the_content('Read more'); ?></p>
							
							<?php endwhile; endif; ?>
							
							<?php previous_post_link('%link','古い記事へ'); ?>
							<?php next_post_link('%link','新しい記事へ'); ?>
			
						</article>
					</main>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_sidebar(); ?>
 
<?php get_footer(); ?>
