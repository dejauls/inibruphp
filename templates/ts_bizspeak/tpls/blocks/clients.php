<?php
/**
 * @author Tripples http://www.themewinter.com
 * @copyright Copyright (c) 2013 - 2015
 * @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
*/

defined('_JEXEC') or die;
?>


<?php if ($this->checkSpotlight('clients', 'clients')) : ?>
		<div class="ts-clients">
			<div class="container">
				<?php $this->spotlight('clients', 'clients') ?>
			</div>
		</div>
<?php endif ?>
