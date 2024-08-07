<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<!-- Action -->

<?php if ($this->checkSpotlight('action', 'action')) : ?>
		<div class="ts-action">
			<div class="container">
				<?php $this->spotlight('action', 'action') ?>
			</div>
		</div>
<?php endif ?>
<!-- Action end -->