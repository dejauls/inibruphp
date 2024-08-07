<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<!-- Action -->

<?php if ($this->checkSpotlight('action2', 'action2')) : ?>
		<div class="ts-action2">
			<div class="container">
				<?php $this->spotlight('action2', 'action2') ?>
			</div>
		</div>
<?php endif ?>
<!-- Action end -->