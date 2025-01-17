<?php
/**
 * @version   $Id: item.php 10885 2013-05-30 06:31:41Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2015 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

?>
<li class="sprocket-strips-s-block" data-strips-item>
	<div class="sprocket-strips-s-item" data-strips-content>
		<?php if ($item->getPrimaryImage()) :?>
			<img class="img-responsive" src="<?php echo $item->getPrimaryImage()->getSource(); ?>" alt="<?php echo $item->getPrimaryImage()->getAlttext(); ?>" />
		<?php endif; ?>
		<div class="sprocket-strips-s-content">
			<?php if ($item->getTitle()) : ?>
			<h4 class="sprocket-strips-s-title" data-strips-toggler>
				<?php if ($item->getPrimaryLink()) : ?><a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>"><?php endif; ?>
					<?php echo $item->getTitle();?>
				<?php if ($item->getPrimaryLink()) : ?></a><?php endif; ?>
			</h4>
			<?php endif; ?>
			<?php if ($item->getText()) :?>
				<span class="sprocket-strips-s-text">
					<?php echo $item->getText(); ?>
				</span>
			<?php endif; ?>
			<?php if ($item->getPrimaryLink()) : ?>
			<a href="<?php echo $item->getPrimaryLink()->getUrl(); ?>" class="readon"><span><?php rc_e('READ_MORE'); ?></span></a>
			<?php endif; ?>
		</div>
	</div>
</li>
