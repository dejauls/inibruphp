<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>


<?php if ($this->checkSpotlight('bottom', 'bottom')) : ?>
		<div class="ts-bottom ts-padding">
			<div class="container">
				<?php $this->spotlight('bottom', 'bottom') ?>
			</div>
		</div>
<?php endif ?>
