<?php
/**
 * The template to display the Author bio
 *
 * @package WordPress
 * @subpackage CLEANSKIN
 * @since CLEANSKIN 1.0
 */
?>

<div class="author_info scheme_dark author vcard" itemprop="author" itemscope itemtype="//schema.org/Person">

	<div class="author_avatar" itemprop="image">
		<?php
		$cleanskin_mult = cleanskin_get_retina_multiplier();
		echo get_avatar( get_the_author_meta( 'user_email' ), 120 * $cleanskin_mult );
		?>
	</div><!-- .author_avatar -->

	<div class="author_description">
		<div>
            <?php
            echo esc_html__( 'About Author', 'cleanskin');
            ?>
        </div>
        <h5 class="author_title" itemprop="name">
		<?php
			// Translators: Add the author's name in the <span>
			echo '<span class="fn">' . get_the_author() . '</span>';

		?>
		</h5>

		<div class="author_bio" itemprop="description">
			<?php echo wp_kses( wpautop( get_the_author_meta( 'description' ) ), 'cleanskin_kses_content' ); ?>
		</div><!-- .author_bio -->

	</div><!-- .author_description -->

</div><!-- .author_info -->
