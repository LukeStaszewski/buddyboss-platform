<?php
/**
 * BuddyBoss - Media Entry
 *
 * @since BuddyBoss 1.0.0
 */

$attachment_id = bp_get_document_attachment_id();
if ( $attachment_id ) {
	$extension = bp_document_extension( $attachment_id );
	$svg_icon  = bp_document_svg_icon( $extension );
	$link = wp_get_attachment_url( $attachment_id );
	$move_class = 'ac-document-move';
	$listing_class = 'ac-document-list';
} else {
	$svg_icon  = bp_document_svg_icon('folder' );
	$link = bp_get_folder_link();
	$move_class = 'ac-folder-move';
	$listing_class = 'ac-folder-list';
}

?>
<div class="media-folder_items <?php echo $listing_class; ?>" data-id="<?php bp_document_id(); ?>">
	<div class="media-folder_icon">
		<a href="<?php echo esc_url( $link ); ?>"><img src="<?php echo esc_url( $svg_icon ); ?>" /></a>
	</div>
	<div class="media-folder_details">
		<a class="media-folder_name" href="<?php echo esc_url( $link ); ?>"><?php bp_document_name(); ?></a>
		<input type="text" value="" class="media-folder_name_edit" />
		<div  class="media-folder_details__bottom">
			<span class="media-folder_date"><?php bp_document_date_created(); ?></span>
			<?php if ( ! bp_is_user() ) { ?>
				<span class="media-folder_author"><?php bp_document_author(); ?></td></span>
			<?php } ?>
		</div>
	</div>
	<div class="media-folder_actions">
		<a href="#" class="media-folder_action__anchor">
			<i class="bb-icon-menu-dots-v"></i>
		</a>
		<div class="media-folder_action__list">
			<ul>
				<li><a href="#" class="ac-document-rename"><?php _e( 'Rename', 'buddyboss' ); ?></a></li>
				<li><a href="#" class="<?php echo $move_class; ?>"><?php _e( 'Move', 'buddyboss' ); ?></a></li>
				<li><a href="#"><?php _e( 'Delete', 'buddyboss' ); ?></a></li>
			</ul>
		</div>
	</div>

</div>