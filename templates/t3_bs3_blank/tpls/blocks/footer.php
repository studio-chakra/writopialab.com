<?php
/**
 * @package   T3 Blank
 * @copyright Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<?php if ($this->countModules('connect')) : ?>
  <section id="connect" class="wrap connect">
  	<div class="connect-inner">
  		<div class="container">
  			<jdoc:include type="modules" name="connect" style="T3Xhtml" />
  		</div>
  	</div>    
  </section>
<?php endif ?>
<!-- FOOTER -->
<!-- FOOTER -->
<footer id="footer" class="wrap footer">

	<div class="footer-brand">
	 	<div class="container">
			<div class="footer-logo"></div>
	 	</div>
	</div>
	
	<div class="footer-main">
		 <!-- FOOT NAVIGATION -->
		 <div class="container">
		   <div class="row footer-top">
				<div class="col-sm-3 footer-right"><jdoc:include type="modules" name="footer-3" /></div>
		        <div class="col-sm-6 footer-left"><jdoc:include type="modules" name="footer-1" /></div>
		        <div class="col-sm-3 footer-middle"><jdoc:include type="modules" name="footer-2" /></div>
		        
		   </div>
		 </div>
		 <!-- //FOOT NAVIGATION -->
		 
		 <section class="copyright">
		   <div class="container">
		     <div class="row">
		       <div class="span12">
		         <jdoc:include type="modules" name="copyright" />
		       </div>
		     </div>
		   </div>
		 </section>
	</div>

</footer>
<!-- //FOOTER -->