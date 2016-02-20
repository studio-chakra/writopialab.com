<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// get params
$sitename  = $this->params->get('sitename');
$slogan    = $this->params->get('slogan', '');
$logotype  = $this->params->get('logotype', 'text');
$logoimage = $logotype == 'image' ? $this->params->get('logoimage', T3Path::getUrl('images/logo.png', '', true)) : '';
$logoimgsm = ($logotype == 'image' && $this->params->get('enable_logoimage_sm', 0)) ? $this->params->get('logoimage_sm', T3Path::getUrl('images/logo-sm.png', '', true)) : false;

if (!$sitename) {
	$sitename = JFactory::getConfig()->get('sitename');
}

$logosize = 'col-sm-12';
if ($headright = $this->countModules('head-search or languageswitcherload')) {
	$logosize = 'col-sm-8';
}

?>
<!-- HEADER -->
<header id="header" class="header">
	<div class="container">
		<div class="row">
		
		  <!-- LOGO -->
		  <div class="col-xs-12 col-sm-4 logo">
		    <div class="logo-<?php echo $logotype ?>">
		      <h1>
		        <a href="<?php echo JURI::base(true) ?>" title="<?php echo strip_tags($sitename) ?>">
					<?php if($logotype == 'image'): ?>
						<img class="logo-img" src="<?php echo JURI::base(true) . '/' . $logoimage ?>" alt="<?php echo strip_tags($sitename) ?>" />
					<?php endif ?>
					<?php if($logoimgsm) : ?>
						<img class="logo-img-sm" src="<?php echo JURI::base(true) . '/' . $logoimgsm ?>" alt="<?php echo strip_tags($sitename) ?>" />
					<?php endif ?>
					<span><?php echo $sitename ?></span>
				</a>
				<small class="site-slogan"><?php echo $slogan ?></small>
		      </h1>
		    </div>
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
			
				<?php if ($this->getParam('navigation_collapse_enable', 1) && $this->getParam('responsive', 1)) : ?>
					<?php $this->addScript(T3_URL.'/js/nav-collapse.js'); ?>
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".t3-navbar-collapse">
						Menu <i class="fa fa-bars"></i>
					</button>
					
				<?php endif ?>
				
				<?php if ($this->getParam('addon_offcanvas_enable')) : ?>
					<?php $this->loadBlock ('off-canvas') ?>
				<?php endif ?>

			</div>

			<?php if ($this->getParam('navigation_collapse_enable')) : ?>
				<div class="navbar-collapse collapse"></div>
			<?php endif ?>
		  </div>
		  <!-- //LOGO -->
		  
		  <div class="col-xs-12 col-sm-8">
		  	<div class="head-global">
		  		<div class="head-globalnav"><jdoc:include type="modules" name="head-globalnav" /></div>
		  		<div class="head-actions"><jdoc:include type="modules" name="head-actions" /></div>
		  	</div>
		  	<div class="head-mainnav">
			  	<!-- MAIN NAVIGATION -->
			  	<!-- MAIN NAVIGATION -->
				<nav id="t3-mainnav" class="wrap t3-mainnav navbar-collapse-fixed-top">
					<div class="navbar">
						<div class="navbar-inner">

							<div class="navbar-collapse collapse">
								<jdoc:include type="<?php echo $this->getParam('navigation_type', 'megamenu') ?>" name="<?php echo $this->getParam('mm_type', 'mainmenu') ?>" />
							</div>
						</div>
					</div>
				</nav>
		  	</div>
		  </div>
		
		</div>
		
	</div>	
		
	<jdoc:include type="modules" name="head-slideshow" style="T3XHTML" />	
	
</header>
<!-- //HEADER -->


