XX
<?php get_header(); ?>
<div class="content-area">
    <div class="container">
        <div class="meta-blog mb-6">
            <h2 class="mb-2 text-black"><?php echo get_the_title(); ?></h2>
            <span>Posted on: <?php echo get_the_date("M d, Y"); ?></span>
        </div>

        <?php
            // Start the loop.
            while ( have_posts() ) : the_post();

                the_content();

            // End of the loop.
            endwhile;
        ?>
    </div>
</div>
<?php get_footer(); ?>		