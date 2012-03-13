      $(document).ready(function () {
 
        $(document).keydown(function(e) {
          var url = false;
          if (e.which == 37) {  // Left arrow key code
            url = "<?php
                     global $wp_query;
                     $max_page = $wp_query->max_num_pages;
                     echo previous_posts( false );
                   ?>";
          }else if (e.which == 39) {  // Right arrow key code
            url = "<?php
                     global $wp_query;
                     $max_page = $wp_query->max_num_pages;
                     echo next_posts( $max_page, false );
                   ?>"
          }
          if (url) {
            window.location = url;
          }
        });
      });
