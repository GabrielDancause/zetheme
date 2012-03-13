 <h2 style="padding-left:25px;padding-top:15px;color:white;font-weight:normal;"><?php echo $GLOBALS['indexTopText']; ?>
</h2>
<div class="navigation-buttons pull-right" style="padding-top:-10px;margin-top:-30px;margin-right:10px;">
                          <a href="<?php 
//Code pour vérifier si on est à la première page pour disabler le bouton
global $wp_query; $max_page = $wp_query->max_num_pages; echo previous_posts( false ).'"'; 

$paged = $wp_query->get( 'paged' );

if ( ! $paged || $paged < 2 ) 
{
 echo ' class="btn disabled">';

} 
else 
{
   echo ' class="btn">';

}


 ?> &lt;</a><a href="<?php global $wp_query; $max_page = $wp_query->max_num_pages; echo next_posts( $max_page, false ); ?>" class="btn">&gt;</a>  &nbsp; &nbsp; 
                        </div> 