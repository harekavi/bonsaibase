<?php
/**
 * Index Template
 *
 * The index template is a placeholder for all cases that don't have a template file. 
 * Ideally, all fases would be handled by a more appropriate template according to the
 * current page context (for example, `tag.php` for a `post_tag` archive or `single.php`
 * for a single blog post).
 *
 * @package AVIBase
 * @subpackage Template
 */

 get_header();
?>
    <!-- #content Starts -->
    <main>
		<?php get_template_part( 'loop', 'index' ); ?>
    </main><!-- /#content -->
<?php get_footer(); ?>