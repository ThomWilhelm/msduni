<?
// Use a custom background image for homepage or node type
$uri = "";
if($is_front) {
	$uri = "public://images/backgrounds/home.jpg";
} else if(isset($node)) {
	$uri = "public://images/backgrounds/" . $node->type . ".jpg";
}

// Fallback to using homepage background if a custom one doesn't exists
// for this content type
if (!file_exists($uri)) {
	$uri = "public://images/backgrounds/home.jpg";
}
?>

<script type="text/javascript">
jQuery(function($){
	$.supersized({
		slides : [ {image : '<? echo file_create_url($uri); ?>', title : ''} ]
	});
});
</script>
  	
	<?php if ($logged_in) : ?>
		<div class="tabs">
			<?php print "<ul>" . drupal_render($tabs['#primary']) . "</ul>"; ?>
			<?php print "<ul>" . drupal_render($tabs['#secondary']) . "</ul>"; ?>
 		</div>
	<?php endif; ?>

<div class="bg-pattern-rpt"></div>


  <div class="wrapper-main">
  
  <div class="main-header"><a href="http://www.unimelb.edu.au">
  <img src="/<? echo path_to_theme(); ?>/images/msd-logo.png" width="440" height="110" alt="msd logo" /></a>
  
    <div class="navigation">
	    <div id='cssmenu'>
		<? print render($main_menu_expanded); ?>
  	    </div>
    </div>
  
    <div style="clear:both"></div>
  </div>
  
   <div id="mobile-toggle" style="display:none"> 
  <a href="#" id="toggle-menu">
    <img id="changer" src="/sites/all/themes/msd2014/images/mob-toggle.png" width="85" height="85" onclick="changeImage(this)" />  
  </a>
  </div>
  
  	<?php if ($logged_in) : ?>		
     	<?php print $messages; ?>
	<?php endif; ?>
 
  <?php print render($page['content']); ?>
  
  </div>
  <div style="clear:both"></div>

<?php print render($page['footer']); ?>