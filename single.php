<?php get_header(); ?>

    <meta property="og:title" content="<?php the_title(); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:image" content="<?php echo get_post_meta($post->ID, "thumbnail", true); ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:locale" content="<?php echo $GLOBALS['fbLocale']; ?>" />
    <meta property="fb:admins" content="<?php echo $GLOBALS['fbAdmins']; ?>" />
    <meta property="og:description" content="<?php echo $GLOBALS['siteDescription']; ?>" />

    <meta name="keywords" content="<?php
$post_categories = wp_get_post_categories( $post->ID );
foreach($post_categories as $c){
  $cat = get_category( $c );
  echo $cat->name.',';
}
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo $tag->name.',';
  }
}
?>
" />

    <title><?php the_title(); ?></title>
    <link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>

    <style type="text/css">
      #pub {
        margin-top:25px;
      }

      #leaderb {
        margin-top:0px !important;
      }

    </style>

  <?php wp_head(); ?>
  </head>


  <body>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_CA/all.js#xfbml=1&appId=<?php echo $GLOBALS['appId']; ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>






  <script>



    $(document).ready(function () {
 
      $(document).keydown(function(e) {
          var url = false;
          if (e.which == 37) {  // Left arrow key code
            url = "<?php $nextPost = get_next_post(); echo get_permalink($nextPost->ID);?>";
          }
          else if (e.which == 39) {  // Right arrow key code
            url = "<?php $previousPost = get_adjacent_post(); echo get_permalink($previousPost->ID);?>"
          }
          if (url) {
            window.location = url;
          }
        });
    });

  </script>


  <?php include 'menu.php'; ?>

  
    <div class="content">
      <div class="container">
        <div class="row show-grid">
         <div class="span12">

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><div>
              <div class="row show-grid">
                <div class="span12" style="background-color:#222222;" >
                    <h1 class="white single-title">
                        <?php the_title(); ?>
                    </h1>

                  <div class="row show-grid">
                    <div class="span12" style="background-color:#222222;">
                      <div class="author" style="text-align:left;padding-left:25px;padding-top:10px;padding-bottom:10px;color:#999">
                        <?php the_time('d/m/Y @ G:i') ?> <?php echo $by; ?> <?php the_author() ?>
                        <div class="navigation-buttons pull-right">

                          <a href="<?php $nextPost = get_next_post(); echo get_permalink($nextPost->ID);?>" class="btn">&lt;</a><a href="<?php $previousPost = get_adjacent_post(); echo get_permalink($previousPost->ID);?>" class="btn">&gt;</a>  &nbsp; &nbsp; 
                        </div>
                      </div>



                    </div>
                  </div>
                  <div >
                    <div id="contenantimage" style="background-color:white;text-align: center;">
<?php if (get_post_meta($post->ID, "image", true)) {  ?>
<a href="<?php echo get_post_meta($post->ID, "image", true); ?>"><img src="<?php echo get_post_meta($post->ID, "image", true); ?>" alt="<?php the_title(); ?>" /></a>
<?php }else{  ?>
<?php echo "<br />";echo get_the_content() ?>
<?php } ?>

          <div id="modal-from-dom" class="modal hide fade">
            <div>
              <img src="<?php echo get_post_meta($post->ID, "image", true); ?>"/>
            </div>
          </div>


                    </div>

                </div>
                  <div class="row show-grid">



                  </div>
                  <div class="row" >

<div class="span12 noroundcorners">


<div style="float:left;padding-left:15px;padding-bottom:15px;">
<?php


if (get_post_meta($post->ID, "via", true)){


$parsedUrl = parse_url (get_post_meta($post->ID, "via", true));
$source = ucfirst(str_replace( 'www.', '', $parsedUrl['host']));
$urlPieces = explode(".", $source);

echo '<a href="'.get_post_meta($post->ID, "via", true).'" class="btn small" rel="popover" title="'.$urlPieces[0].'" data-content="'.get_post_meta($post->ID, "via", true).'">Source</a>';

}

?>


<?php
if (get_post_meta($post->ID, "merci", true)){


$parsedUrl = parse_url (get_post_meta($post->ID, "merci", true));
$merci = ucfirst(str_replace( 'www.', '', $parsedUrl['host']));
$urlPieces = explode(".", $merci);

echo '<a href="'.get_post_meta($post->ID, "merci", true).'" class="btn small" rel="popover" title="'.$urlPieces[0].'" data-content="'.get_post_meta($post->ID, "merci", true).'"> Via </a>';

}

?>




</div>

<script>
            $(function () {
              $("a[rel=popover]")
                .popover({
                  offset: 10
                })
                .click(function(e) {
                  e.preventDefault()
                  window.open("<?php echo get_post_meta($post->ID, "via", true); ?>");
                })
            })
          </script>

<div class="social pull-right" style="padding-top:5px;">

<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_pinterest" pi:pinit:url="<?php echo urlencode(the_permalink()); ?>" pi:pinit:media="<?php echo get_post_meta($post->ID, "image", true); ?>" pi:pinit:layout="horizontal"></a>
<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
<a class="addthis_button_tweet" tw:via="<?php echo $GLOBALS['twitterAccount']; ?>"></a>
<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>

</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f31a102440808e2"></script>
<!-- AddThis Button END -->

</div>





</div>

                  <div class="span12 noroundcorners">

<div >
<ul class="breadcrumb">
<?php
$post_categories = wp_get_post_categories( $post->ID );
foreach($post_categories as $c){
  $cat = get_category( $c );
  echo '<li><a href="'.get_category_link($cat->term_id).'">'.$cat->name.'</a><span class="divider">/</span></li>';
}
$posttags = get_the_tags();
if ($posttags) {
  foreach($posttags as $tag) {
    echo '<li><a href="'.get_tag_link($tag->term_id).'">'.$tag->name.'</a><span class="divider">/</span></li>';
  }
}


?>
</ul>
</div>

<?php echo $GLOBALS['leaderboard']; ?>
<div class="fb-comments" style="text-align: center;background-color:#fff;" data-href="<?php echo urlencode(the_permalink()); ?>" data-num-posts="10" data-width="728"></div>


</div>

                  </div>

                </div>

              </div>
            </div><br />
        <?php endwhile; else: ?>
        <p><?php echo $GLOBALS['sorry']; ?></p>
        <p><?php echo $GLOBALS['maybe']; ?> <?php get_search_form(); ?> </p>

        <?php endif; ?>

 




</div>  
<div class="span6" style="float: right;">

<div class="span6" style="background:#222222;float: right;" id="previous6">
 
<ul class="media-grid" style="padding-top:25px;padding-bottom:25px;">

 <?php

 $querystr = "
    SELECT $wpdb->posts.* 
    FROM $wpdb->posts
    WHERE $wpdb->posts.post_status = 'publish' 
    AND $wpdb->posts.post_type = 'post'
    AND $wpdb->posts.ID < ".$post->ID."
    ORDER BY $wpdb->posts.post_date DESC
    LIMIT 6
 ";

 $pageposts = $wpdb->get_results($querystr, OBJECT);

?>
 <?php if ($pageposts): ?>
  <?php global $post; ?>
  <?php foreach ($pageposts as $post): ?>
    <?php setup_postdata($post); ?>


  <li>
    <a href="<?php the_permalink() ?>" >
<?php if (get_post_meta($post->ID, "thumbnail", true)){ ?>
  <img class="thumbnail" src="<?php echo get_post_meta($post->ID, "thumbnail", true); ?>" alt="Thumbnail for : <?php the_title(); ?>" width="85" height="85" >
<?php }else if (get_post_meta($post->ID, "youtube", true)){ ?>
  <img class="thumbnail" src="http://img.youtube.com/vi/<?php echo get_post_meta($post->ID, "youtube", true); ?>/0.jpg" alt="Thumbnail for : <?php the_title(); ?>" width="85" height="85" >
<?php }else{ ?>

<?php 
$html = $post->post_content;

$dom = new domDocument;
libxml_use_internal_errors(true);
$dom->loadHTML($html);
$dom->preserveWhiteSpace = false;
$images = $dom->getElementsByTagName('img');
foreach ($images as $image) { ?>

<img class="thumbnail" src="<?php echo $image->getAttribute('src'); ?>" alt="Thumbnail for : <?php the_title(); ?>" width="85" height="85">                      


<?php
  break;
}


 ?>
                       
                      <?php } ?>

    </a>
  </li>

  <?php endforeach; ?>
  
  <?php else : ?>
 <?php endif; ?>


</ul>
 
        </div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>
