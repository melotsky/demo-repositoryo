<form id="cptsearch" action="<?php echo home_url(); ?>" method="get">
    <input type="text" placeholder="Search Our Website..." name="s" id="search" value="<?php the_search_query(); ?>"  />
    <input type="hidden" name="post_type" value="blogs" />
    <button class="submit-btn">SEARCH</button>
</form>