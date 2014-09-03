<?php $theLayout = get_post_meta( $post->ID, '_btm_layout_select', true); ?>
<?php get_template_part( 'post-formats/format', $theLayout ); ?>