<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<!-- Projects -->

<?php if ($this->checkSpotlight('projects', 'projects')) : ?>
		<div class="ts-projects ts-padding">
			<div class="container">
				<?php $this->spotlight('projects', 'projects') ?>
			</div>
		</div>
<?php endif ?>
<!-- Projects end -->