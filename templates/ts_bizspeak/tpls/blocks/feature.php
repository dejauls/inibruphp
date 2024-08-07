<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<!-- Features -->

<?php if ($this->checkSpotlight('features', 'feature1, feature2')) : ?>
	<div class="ts-features">
		<div class="container">
			<?php $this->spotlight('features', 'feature1, feature2') ?>
		</div>
	</div>
<?php endif ?>
<!-- Features end -->