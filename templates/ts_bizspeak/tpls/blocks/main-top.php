<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<!-- Main top -->

<?php if ($this->checkSpotlight('main-top', 'main-top')) : ?>
		<div class="ts-main-top ts-padding">
			<div class="container">
				<?php $this->spotlight('main-top', 'main-top') ?>
			</div>
		</div>
<?php endif ?>
<!-- Main top -->