<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>

<!-- Testimonials -->

<?php if ($this->checkSpotlight('testimonials', 'testimonials')) : ?>
		<div class="ts-testimonials ts-padding">
			<div class="container">
				<?php $this->spotlight('testimonials', 'testimonials') ?>
			</div>
		</div>
<?php endif ?>
<!-- Testimonials end -->