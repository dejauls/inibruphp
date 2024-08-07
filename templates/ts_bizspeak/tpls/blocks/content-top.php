<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<div class="ts-content-top">
	<div class="container-fluid">
		<div class="row"> 
			<?php if ($this->countModules('content-top1')) : ?>
			<div class="col-md-6 ts-content-padding left">
				<jdoc:include type="modules" name="<?php $this->_p('content-top1') ?>" style="raw" />		
			</div>
			<?php endif ?>
			
			<?php if ($this->countModules('content-top2')) : ?>
			<div class="col-md-6 right">
				<jdoc:include type="modules" name="<?php $this->_p('content-top2') ?>" style="raw" />		
			</div>
			<?php endif ?>
		</div>
	</div>
</div>