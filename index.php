<?php get_header(); ?>


    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>


    <meta name="description" content="<?php echo $siteDescription; ?>" />
    <meta name="keywords" content="<?php echo $metaKeywords; ?>" />

    <meta property="og:title" content="<?php bloginfo('name'); ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php the_permalink(); ?>" />
    <meta property="og:image" content="<?php echo $GLOBALS['logo']; ?>" />
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
    <meta property="og:locale" content="<?php echo $GLOBALS['fbLocale']; ?>" />
    <meta property="fb:admins" content="<?php echo $GLOBALS['fbAdmins']; ?>" />
    <meta property="og:description" content="<?php echo $GLOBALS['siteDescription']; ?>" />

 <style type="text/css">
 #previous6
{
display:none;
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
    </script>
     
<?php include 'menu.php'; ?>

  
    <div class="content">
      <div class="container">
        <div class="row show-grid">
          <div class="span12">
            <div class="row show-grid">
              <div class="span12" style="background-color:#222222;" >         

<?php include 'navigation.php'; ?>

<br />
                <ul class="media-grid">
                  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<li>
                      <a href="<?php the_permalink() ?>">

<?php if (get_post_meta($post->ID, "thumbnail", true)){ ?>
<img class="thumbnail test" src="<?php echo get_post_meta($post->ID, "thumbnail", true); ?>" alt="" width="155" height="155" >
<?php }else if(get_post_meta($post->ID, "youtube", true)){ ?>
<img class="thumbnail test" src="http://img.youtube.com/vi/<?php echo get_post_meta($post->ID, "youtube", true); ?>/0.jpg" alt="" width="155" height="155" >
<?php }else{ ?>
<?php 
$html = $post->post_content;
$dom = new domDocument;
libxml_use_internal_errors(true);
$dom->loadHTML($html);
$dom->preserveWhiteSpace = false;
$images = $dom->getElementsByTagName('img');
foreach ($images as $image) { ?>

<img class="thumbnail" src="<?php echo $image->getAttribute('src'); ?>" alt="" width="155" height="155"><?php break; } } ?></a><!-- lien vers l'article -->
                  </li><!-- liste -->
                    <?php endwhile; else: ?>
                    <div style="text-align:center;" ><img src="<?php bloginfo('template_directory'); ?>/images/404.jpg" alt="Erreur 404" /></div>        
                  <?php endif; ?>
                </ul><!-- unordered list -->
<div class="span12" style="background-color:#222222;" >         
 
<?php include 'navigation.php'; ?>
<br />
              </div><!-- span12 noir -->
            </div><!-- row show-grid -->
          </div><!-- span12 -->

<?php echo $GLOBALS['leaderboard']; ?>
</div>
<?php get_sidebar(); ?>

      </div><!-- container -->
<?php get_footer(); ?>
