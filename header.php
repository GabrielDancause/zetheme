<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
  <head>

    <meta charset="utf-8">
    <meta name="author" content="Gabriel Dancause" />
    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le styles -->

    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

    <!-- Le jquery -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

    <!-- Le bootstrap javascript -->

    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-alerts.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-twipsy.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-popover.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-dropdown.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-scrollspy.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-tabs.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-buttons.js"></script>
    <script src="<?php bloginfo( 'template_url' ); ?>/js/bootstrap-modal.js"></script>

<script type="text/javascript" language="JavaScript">
    (function() {
      var proto = (window.location.protocol == "https:" ? "https:" : "http:");
      document.writeln('<scr' + 'ipt type="text/ja' + 'vascr' + 'ipt" s' + 'rc="' +
                  proto + '//cdn.oboxmedia.com/oboxads/oboxads-min.js?ver=2' +
                  '"></scr' + 'ipt>');

    })();
</script>
<script type="text/javascript" language="JavaScript">
    /*--------------------------------------------------------------*
     *                       VALUES TO SET                          *
     *--------------------------------------------------------------*/
    OBOXADS.vars.lang = 'fr'; /* identify the language [fr|en] */

    OBOXADS.vars.sectionPathName = '<?php echo (is_home() ? 'home' : 'website'); ?>';

    /*--------------------------------------------------------------*
     *                     END VALUES TO SET                        *
     *--------------------------------------------------------------*/

    OBOXADS.vars.postID = <?php echo (is_single() && key_exists('post', $GLOBALS) ? $GLOBALS['post']->ID : 0); ?>;
    OBOXADS.vars.custom = "<?php echo (key_exists('custom',$_GET) ? preg_replace('/[^a-zA-Z0-9]/','', $_GET['custom']) : '') ?>";
    OBOXADS.fn.init();
	  
</script>




<?php include 'analytics.php'; ?>