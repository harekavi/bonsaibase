<?php
/**
 * 404 Template
 *
 * This template is displayed when the page being requested by the viewer cannot be found
 * or doesn't exist. From here, we'll try to assist the user and keep them browsing the website.
 * @link http://codex.wordpress.org/Pages
 *
 * @package AVIBase
 * @subpackage Template
 */

get_header();
?>
    <!-- main Starts -->
    <main>
<?php get_template_part( 'content', '404' ); ?>
    </main><!-- /main -->
<?php get_footer(); ?>