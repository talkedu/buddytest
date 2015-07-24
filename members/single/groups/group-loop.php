<?php do_action( 'bp_before_my_groups_loop' ) ?>

<div id="group-loop">
	
	<?php if ( bp_has_groups() ) : ?>
		
		<div class="pagination">
			
			<div class="pag-count">
				<?php bp_groups_pagination_count() ?>
			</div>
			
			<div class="pagination-links" id="<?php bp_group_pag_id() ?>">
				<?php bp_groups_pagination_links() ?>
			</div>
		
		</div>
		
		<?php do_action( 'bp_before_my_groups_list' ) ?>

		<ul id="group-list" class="item-list">
			<?php while ( bp_groups() ) : bp_the_group(); ?>
				
				<li>
					<?php bp_group_avatar_thumb() ?>
					<h4><a href="<?php bp_group_permalink() ?>"><?php bp_group_name() ?></a><span class="small"> - <?php printf( __( '%s members', 'buddypress' ), bp_group_total_members( false ) ) ?></span></h4>
	
					<?php if ( bp_group_has_requested_membership() ) : ?>
						<p class="request-pending"><?php _e( 'Membership Pending Approval', 'buddypress' ); ?></p>
					<?php endif; ?>
					
					<div class="desc">
						<?php bp_group_description_excerpt() ?>
					</div>
				
					<?php do_action( 'bp_before_my_groups_list_item' ) ?>
				</li>
				
			<?php endwhile; ?>
		</ul>
	
		<?php do_action( 'bp_after_my_groups_list' ) ?>
		
	<?php else: ?>

		<?php if ( bp_group_show_no_groups_message() ) : ?>

			<div id="message" class="info">
				<p><?php bp_word_or_name( __( "You haven't joined any groups yet.", 'buddypress' ), __( "%s hasn't joined any groups yet.", 'buddypress' ) ) ?></p>
			</div>

			

		<?php else: ?>

			<div id="message" class="error">
				<p><?php _e( "No matching groups found.", 'buddypress' ) ?></p>
			</div>

		<?php endif; ?>

	<?php endif;?>
	
</div>

<?php do_action( 'bp_after_my_groups_loop' ) ?>