    <div class="topbar">
      <div class="fill">
        <div class="container">
          <a class="brand" href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            <?php get_search_form(); ?>
          <div class="nav-collapse">
            <ul class="nav">
              <?php echo $GLOBALS['menuitems']; ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!-- container -->
      </div><!-- fill -->
    </div><!-- topbar -->
