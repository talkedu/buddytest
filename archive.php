<?php get_header(); ?>
<div id="container">
<div id="contents">
	<div id="content">
		<?php do_action( 'bp_before_archive' ) ?>
		<div class="page widget" id="blog-archives">
		
			<h2 class="pagetitle widgettitle"><?php _e( 'Blog', 'buddypress' ) ?></h2>
			<div class="widget-content">
			<?php if ( have_posts() ) : ?>

				<p class="info"><?php printf( __( 'You are browsing the archive for <em> %1$s </em>.', 'buddypress' ), wp_title( false, false ) ); ?></p>

				<div class="navigation">
					
					<div class="alignleft"><?php next_posts_link( __( '&laquo; Previous Entries', 'buddypress' ) ) ?></div>
					<div class="alignright"><?php previous_posts_link( __( 'Next Entries &raquo;', 'buddypress' ) ) ?></div>
					<div class="clear"> </div>
				</div>

				<?php while (have_posts()) : the_post(); ?>

					<?php do_action( 'bp_before_blog_post' ) ?>
				
					<div class="post">
						<?php if(has_post_thumbnail()):?>
							<div class="post-thumb cb-thumb-wrap">
							<?php the_post_thumbnail();?>
							</div>
						<?php endif;?>
						<h2 id="post-<?php the_ID(); ?>" class="post-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e( 'Permanent Link to', 'buddypress' ) ?> <?php the_title(); ?>"><?php the_title(); ?></a></h2>
						<small><?php the_time('F j, Y') ?></small>

						<div class="entry">
							<?php the_content() ?>
						</div>

						<p class="postmetadata"><?php _e( 'Posted in', 'buddypress' ) ?> <?php the_category(', ') ?> | <?php edit_post_link( __( 'Edit', 'buddypress' ), '', ' | '); ?>  <?php comments_popup_link( __( 'No Comments &#187;', 'buddypress' ), __( '1 Comment &#187;', 'buddypress' ), __( '% Comments &#187;', 'buddypress' ) ); ?></p>

					</div>

					<?php do_action( 'bp_after_blog_post' ) ?>

				<?php endwhile; ?>

				<div class="navigation">
					
					<div class="alignleft"><?php next_posts_link( __( '&laquo; Previous Entries', 'buddypress' ) ) ?></div>
					<div class="alignright"><?php previous_posts_link( __( 'Next Entries &raquo;', 'buddypress' ) ) ?></div>
				
				</div>

			<?php else : ?>

				<h2 class="center"><?php _e( 'Not Found', 'buddypress' ) ?></h2>
				<?php locate_template( array( 'searchform.php' ), true ) ?>
			
			<?php endif; ?>
		</div>
		</div>
		<?php do_action( 'bp_after_archive' ) ?>
	</div>
	<?php get_sidebar("blog");?>
	<br class="clear" />
</div>
</div><!--end of container-->
	
<?php get_footer(); ?>
