<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

/**
 * Mainbody 2 columns: content - sidebar
 */
?>
<?php
  $app = JFactory::getApplication();
  $menu = $app->getMenu()->getActive();
  $pageheading = '';
 
  if (is_object($menu))
    $pageheading = $menu->params->get('page_heading');
?>



<section id="titlebar" class="titlebar">
	<div class="container">
		<div class="titlebar-header">
			<div class="span12">
				<div class="page-header clearfix">
					<h1 class="page-title"><?php echo $pageheading; ?></h1>
				</div>
			</div>
		</div>
		<div class="titlebar-nav">
			<div class="span12">
				<jdoc:include type="modules" name="titlebar-nav" />
				<div class="page-nav clearfix">
					<jdoc:include type="modules" name="pagenav" />
				</div>
			</div>
		</div>
	</div>
</section>
<div id="t3-mainbody" class="container t3-mainbody">
	<div class="row-content">

		<!-- MAIN CONTENT -->
		<div id="t3-content" class="t3-content col-xs-12 col-sm-8  col-md-8">
			<?php if($this->hasMessage()) : ?>
			<jdoc:include type="message" />
			<?php endif ?>
			<jdoc:include type="component" />
		</div>
		<!-- //MAIN CONTENT -->

		<!-- SIDEBAR RIGHT -->
		<div class="t3-sidebar t3-sidebar-right col-xs-12 col-sm-4  col-md-4 <?php $this->_c($vars['sidebar']) ?>">
			<div class="sidebar-inner">
				<jdoc:include type="modules" name="<?php $this->_p($vars['sidebar']) ?>" style="T3Xhtml" />
			</div>
		</div>
		<!-- //SIDEBAR RIGHT -->

	</div>
</div> 
