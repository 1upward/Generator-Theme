<? get_header(); ?>
<div class="container">
    <div id="primary" class="content-area">
        <div id="content" class="site-content" role="main">

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <?php get_template_part( 'content', get_post_format() );?>
               
            <?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->
</div>
<? get_footer(); ?>