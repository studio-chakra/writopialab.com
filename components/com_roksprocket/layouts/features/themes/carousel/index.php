<?php
/**
 * @version   $Id$
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2013 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @var $layout     RokSprocket_Layout_Features
 * @var $items      RokSprocket_Item[]
 * @var $parameters RokCommon_Registry
 */

?>
<script type="text/javascript">
jQuery(document).ready(function() {
	jQuery('.owl-carousel-<?php echo $parameters->get('module_id'); ?>').owlCarousel({
		items : jQuery(this).attr('data-items'),
		itemsDesktop: false,
		itemsDesktopSmall: false,
		navigation: false,
		pagination: <?php echo $parameters->get('features_show_pagination') ? 'true' : 'false'; ?>,
		autoPlay: false,
		autoHeight: true
	});
	var owl<?php echo $parameters->get('module_id'); ?> = jQuery('.owl-carousel-<?php echo $parameters->get('module_id'); ?>').data('owlCarousel');
	
	jQuery('.boxowl<?php echo $parameters->get('module_id'); ?> .prev ').on('click', function(event){
        owl<?php echo $parameters->get('module_id'); ?>.prev();
    });
	jQuery('.boxowl<?php echo $parameters->get('module_id'); ?> .next ').on('click', function(event){
        owl<?php echo $parameters->get('module_id'); ?>.next();
    });
	
});
</script>
<div class="boxowl<?php echo $parameters->get('module_id'); ?> sprocket-features layout-showcase">
	<div class="owl-carousel-<?php echo $parameters->get('module_id'); ?>" data-items="<?php echo $parameters->get('features_item_desktop'); ?>" data-items-tablet="[990,<?php echo $parameters->get('features_item_table'); ?>]" data-items-mobile="[479,<?php echo $parameters->get('features_item_mobile'); ?>]">
		<?php
		$index = 0;
			foreach($items as $item){
				$index++;
				echo $layout->getThemeContext()->load('item.php', array('item'=> $item,'parameters'=>$parameters,'index'=>$index,'layout'=>$layout));
			}
		?>
	</div>
	<?php if ($parameters->get('features_show_arrows')!='hide') : ?>
	<div class="sprocket-features-arrows">
		<span class="arrow prev" data-showcase-previous><span>&lsaquo;</span></span>
		<span class="arrow next" data-showcase-next><span>&rsaquo;</span></span>		
	</div>
	<?php endif; ?>
	
</div>
