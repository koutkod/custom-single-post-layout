<?php
get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content">
    <?php
        while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
                <div class="entry-content">
                <?php
                    the_content();
                ?>
                </div>
            </article>
    <?php endwhile; ?>
</div>

<?php
get_footer();
?>
