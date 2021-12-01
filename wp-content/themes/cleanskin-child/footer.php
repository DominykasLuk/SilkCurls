<?php
/**
 * The Footer: widgets area, logo, footer menu and socials
 *
 * @package WordPress
 * @subpackage CLEANSKIN
 * @since CLEANSKIN 1.0
 */

// Widgets area inside page content
cleanskin_create_widgets_area('widgets_below_content');
?>
</div><!-- </.content> -->

<?php
// Show main sidebar
get_sidebar();

// Widgets area below page content
cleanskin_create_widgets_area('widgets_below_page');

$cleanskin_body_style = cleanskin_get_theme_option('body_style');
if ('fullscreen' != $cleanskin_body_style) {
    ?>
    </div><!-- </.content_wrap> -->
    <?php
}
?>
</div><!-- </.page_content_wrap> -->






</div><!-- /.page_wrap -->

</div><!-- /.body_wrap -->
<?php wp_footer(); ?>
<?php include 'new-footer.php'?>

</body>
</html>
