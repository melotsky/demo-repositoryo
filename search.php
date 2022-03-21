<?php
    /*
     Template Name: Blog
    */
?>
XXXXXXXXX
<?php get_header(); ?>
<div class="content-area">
    <div class="container">
        <div class="blog-list">
           <?php
                $args = array(
                    'post_type'=> 'blogs',
                    's'    => $s,
                    'paged' => $paged,
                );

                query_posts($args);
                while ( have_posts() ) : the_post();
                echo    '<div class="blog-item">
                            <div class="meta-blog">
                                <h2><a class="text-black" href="'. get_the_permalink() .'">' . get_the_title() . '</a></h2>
                                <span>Posted by: ' . get_the_author() . ' on ' . get_the_date("M d, Y") . '</span>
                            </div>

                            <div class="blog-item-content">
                                <img src="' . get_the_post_thumbnail_url() . '" alt="">
                                <p>' . wp_trim_words(get_the_content(), 40) . '</p>
                                <a href="' . get_the_permalink() . '">Read more..</a>
                            </div>
                        </div>';

                endwhile;
                wp_pagenavi();
                wp_reset_postdata(); 
                // Reset Query
                wp_reset_query();    
           ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>		