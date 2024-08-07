<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<!-- Content -->

<?php if ($this->checkSpotlight('content', 'content')) : ?>
		<div class="ts-content">
			<div class="container">
				<?php $this->spotlight('content', 'content') ?>
			</div>
		</div>
<?php endif ?>
<!-- Content end -->