<?php
/**
 * The template to display the Comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}



// Callback for output single comment layout
if ( ! function_exists( 'cleanskin_output_single_comment' ) ) {
	function cleanskin_output_single_comment( $comment, $args, $depth ) {
		switch ( $comment->comment_type ) {
			case 'pingback':
				?>
				<li class="trackback"><?php esc_html_e( 'Trackback:', 'cleanskin' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'cleanskin' ), '<span class="edit-link">', '<span>' ); ?>
				<?php
				break;
			case 'trackback':
				?>
				<li class="pingback"><?php esc_html_e( 'Pingback:', 'cleanskin' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'cleanskin' ), '<span class="edit-link">', '<span>' ); ?>
				<?php
				break;
			default:
				$author_id   = $comment->user_id;
				$author_link = ! empty( $author_id ) ? get_author_posts_url( $author_id ) : '';
				$mult        = cleanskin_get_retina_multiplier();
				?>
				<li id="comment-<?php comment_ID(); ?>" <?php comment_class( 'comment_item' ); ?>>
					<div id="comment_body-<?php comment_ID(); ?>" class="comment_body">
						<div class="comment_author_avatar"><?php echo get_avatar( $comment, 90 * $mult ); ?></div>
						<div class="comment_content">
							<div class="comment_info">
								<h6 class="comment_author">
								<?php
									echo ( ! empty( $author_link ) ? '<a href="' . esc_url( $author_link ) . '">' : '' )
											. esc_html( get_comment_author() )
											. ( ! empty( $author_link ) ? '</a>' : '' );
								?>
								</h6>
								<div class="comment_posted">
									<span class="comment_posted_label"><?php esc_html_e( 'Posted', 'cleanskin' ); ?></span>
									<span class="comment_date">
									<?php
										echo esc_html( get_comment_date( get_option( 'date_format' ) ) );
									?>
									</span>
									<span class="comment_time">
									<?php
										echo esc_html( get_comment_date( get_option( 'time_format' ) ) );
									?>
									</span>
									<?php if ( 1 == $comment->comment_approved ) { ?>
									<span class="comment_counters"><?php cleanskin_show_comment_counters(); ?></span>
									<?php } ?>
								</div>
								<?php
								// Add rating to the comments
								do_action( 'trx_addons_action_post_rating', array( 'location' => 'comment' ) );
								?>
							</div>
							<div class="comment_text_wrap">
								<?php if ( 0 == $comment->comment_approved ) { ?>
								<div class="comment_not_approved"><?php esc_html_e( 'Your comment is awaiting moderation.', 'cleanskin' ); ?></div>
								<?php } ?>
								<div class="comment_text"><?php comment_text(); ?></div>
							</div>
							<?php
							if ( $depth < $args['max_depth'] ) {
								?>
								<div class="reply comment_reply">
								<?php
									comment_reply_link(
										array_merge(
											$args, array(
												'add_below' => 'comment_body',
												'depth' => $depth,
												'max_depth' => $args['max_depth'],
											)
										)
									);
								?>
								</div>
								<?php
							}
							?>
						</div>
					</div>
				<?php
				break;
		}
	}
}


// Output comments list
if ( have_comments() || comments_open() ) {
	?>
	<section class="comments_wrap">
	<?php
	if ( have_comments() ) {
		?>
		<div id="comments" class="comments_list_wrap">
			<h4 class="section_title comments_list_title">
			<?php
			$cleanskin_post_comments = get_comments_number();
			echo esc_html( $cleanskin_post_comments );
			?>
		<?php echo esc_html( ($cleanskin_post_comments === 1) ? esc_html__('Comment', 'cleanskin') :  esc_html__('Comments', 'cleanskin') ); ?></h4>
			<ul class="comments_list">
				<?php
				wp_list_comments( array( 'callback' => 'cleanskin_output_single_comment' ) );
				?>
			</ul><!-- .comments_list -->
				<?php
				if ( ! comments_open() && get_comments_number() != 0 && post_type_supports( get_post_type(), 'comments' ) ) {
					?>
				<p class="comments_closed"><?php esc_html_e( 'Comments are closed.', 'cleanskin' ); ?></p>
					<?php
				}
				if ( get_comment_pages_count() > 1 ) {
					?>
				<div class="comments_pagination"><?php paginate_comments_links(); ?></div>
					<?php
				}
				?>
		</div><!-- .comments_list_wrap -->
			<?php
	}

	if ( comments_open() ) {
		?>
		<div class="comments_form_wrap">
			<div class="comments_form">
			<?php
			$cleanskin_form_style = esc_attr( cleanskin_get_theme_option( 'input_hover' ) );
			if ( empty( $cleanskin_form_style ) || cleanskin_is_inherit( $cleanskin_form_style ) ) {
				$cleanskin_form_style = 'default';
			}
			$cleanskin_commenter     = wp_get_current_commenter();
			$cleanskin_req           = get_option( 'require_name_email' );
			$cleanskin_comments_args = apply_filters(
				'cleanskin_filter_comment_form_args', array(
					// class of the 'form' tag
					'class_form'           => 'comment-form ' . ( 'default' != $cleanskin_form_style ? 'sc_input_hover_' . esc_attr( $cleanskin_form_style ) : '' ),
					// change the id of send button
					'id_submit'            => 'send_comment',
					// change the title of send button
					'label_submit'         => esc_html__( 'Leave a comment', 'cleanskin' ),
					// change the title of the reply section
					'title_reply'          => esc_html__( 'Leave a comment', 'cleanskin' ),
					'title_reply_before'   => '<h4 id="reply-title" class="section_title comments_form_title">',
					'title_reply_after'    => '</h4>',
					// remove "Logged in as"
					'logged_in_as'         => '',
					// remove text before textarea
					'comment_notes_before' => '',
					// remove text after textarea
					'comment_notes_after'  => '',
					'fields'               => array(
						'author' => cleanskin_single_comments_field(
							array(
								'form_style'        => $cleanskin_form_style,
								'field_type'        => 'text',
								'field_req'         => $cleanskin_req,
								'field_icon'        => 'icon-user',
								'field_value'       => isset( $cleanskin_commenter['comment_author'] ) ? $cleanskin_commenter['comment_author'] : '',
								'field_name'        => 'author',
								'field_title'       => esc_attr__( 'Name', 'cleanskin' ),
								'field_placeholder' => esc_attr__( 'Your Name', 'cleanskin' ),
							)
						),
						'email'  => cleanskin_single_comments_field(
							array(
								'form_style'        => $cleanskin_form_style,
								'field_type'        => 'text',
								'field_req'         => $cleanskin_req,
								'field_icon'        => 'icon-mail',
								'field_value'       => isset( $cleanskin_commenter['comment_author_email'] ) ? $cleanskin_commenter['comment_author_email'] : '',
								'field_name'        => 'email',
								'field_title'       => esc_attr__( 'E-mail', 'cleanskin' ),
								'field_placeholder' => esc_attr__( 'Your E-mail', 'cleanskin' ),
							)
						),
					),
					// redefine your own textarea (the comment body)
					'comment_field'        => cleanskin_single_comments_field(
						array(
							'form_style'        => $cleanskin_form_style,
							'field_type'        => 'textarea',
							'field_req'         => true,
							'field_icon'        => 'icon-feather',
							'field_value'       => '',
							'field_name'        => 'comment',
							'field_title'       => esc_attr__( 'Comment', 'cleanskin' ),
							'field_placeholder' => esc_attr__( 'Your comment', 'cleanskin' ),
						)
					),
				)
			);

			comment_form( $cleanskin_comments_args );
			?>
			</div>
		</div><!-- /.comments_form_wrap -->
			<?php
	}
	?>
	</section><!-- /.comments_wrap -->
	<?php
}
