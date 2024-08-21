<?php
/**
 * @author  SoftCoders
 * @since   1.0
 * @version 1.0
 */

namespace SoftCoders\spria;
// use SoftCoders\spria\Helper;

?>

<?php get_header(); ?>

<!--=====================================-->
<!--=         Blog Details Start    	=-->
<!--=====================================-->
<section class="sc-blog-details sc-pt-120 sc-md-pt-80 sc-pb-20 sc-md-pb-20 blog-single">
    <div class="container">
        <div class="row">
            <div class="<?php // Helper::the_layout_class(); ?>">
                <?php while ( have_posts() ) : the_post(); ?>
                    <p>This is single page</p>
					<?php //get_template_part( 'framework/content-single' ); ?>
				<?php endwhile; ?>
            </div>
            <?php //Helper::spria_sidebar(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>