<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>


<?php if ($this->countModules('slider')) : ?>
<div class="ts-slideshow">
	<jdoc:include type="modules" name="<?php $this->_p('slider') ?>" style="xhtml" />		
</div>
<?php endif ?>

