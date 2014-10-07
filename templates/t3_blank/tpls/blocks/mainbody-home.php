<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="home">

  <?php if ($this->countModules('home-1')) : ?>
  <!-- HOME SL 1 -->
  <section class="wrap home-1">
  <div class="home-1-inner">
  	<div class="container">
	  	<jdoc:include type="modules" name="<?php $this->_p('home-1') ?>" style="T3Xhtml" />
  	</div>
  </div>
  </section>
  <!-- //HOME SL 1 -->
  <?php endif ?>

  <?php if ($this->countModules('home-2')) : ?>
  <!-- HOME SL 2 -->
  <section class="home-2">
	  <div class="home-2-inner">
		  <div class="container">
			  <jdoc:include type="modules" name="<?php $this->_p('home-2') ?>" style="T3Xhtml" />
		</div>
	  </div>
  </section>
  <!-- //HOME SL 2 -->
  <?php endif ?>

  <?php if ($this->countModules('home-3')) : ?>
  <!-- HOME SL 3 -->
  <section class="home-3">
  	<div class="home-3-inner">
  		<div class="container">
	  		<jdoc:include type="modules" name="<?php $this->_p('home-3') ?>" style="T3Xhtml" />
	  	</div>
  	</div>
  </section>
  <!-- //HOME SL 3 -->
  <?php endif ?>  

</div>
