<?php
/**
 * ------------------------------------------------------------------------
 * JA Decor Template
 * ------------------------------------------------------------------------
 * Copyright (C) 2004-2011 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
 * @license - Copyrighted Commercial Software
 * Author: J.O.O.M Solutions Co., Ltd
 * Websites:  http://www.joomlart.com -  http://www.joomlancers.com
 * This file may not be redistributed in whole or significant part.
 * ------------------------------------------------------------------------
 */

defined('_JEXEC') or die;
$app = JFactory::getApplication();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/ts_bizspeak/css/offline.css" type="text/css" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0;">
</head>
<body>
<jdoc:include type="message" />
	<div id="frame" class="outline">
		
		<div id="offline-title">
			<h1>
			<?php echo htmlspecialchars($app->getCfg('sitename')); ?>
			</h1>
		</div>
		<?php if ($app->getCfg('offline_image') && file_exists($app->getCfg('offline_image'))) : ?>
		<div id="offline-img"><img src="<?php echo $app->getCfg('offline_image'); ?>" alt="<?php echo htmlspecialchars($app->getCfg('sitename')); ?>" /></div>
		<?php endif; ?>
	<?php if ($app->getCfg('display_offline_message', 1) == 1 && str_replace(' ', '', $app->getCfg('offline_message')) != ''): ?>
		<div id="offline-content">
		<p class="offline-des">
			<?php echo $app->getCfg('offline_message'); ?>
		</p>
	<?php elseif ($app->getCfg('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != ''): ?>
		<p>
			<?php echo JText::_('JOFFLINE_MESSAGE'); ?>
		</p>
	<?php  endif; ?>
	<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="form-login">
	<fieldset class="input">
		<p id="form-login-username">
			<label for="username"><?php echo JText::_('JGLOBAL_USERNAME') ?></label>
			<input name="username" id="username" type="text" class="inputbox" alt="<?php echo JText::_('JGLOBAL_USERNAME') ?>" size="18" />
		</p>
		<p id="form-login-password">
			<label for="passwd"><?php echo JText::_('JGLOBAL_PASSWORD') ?></label>
			<input type="password" name="password" class="inputbox" size="18" alt="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" id="passwd" />
		</p>
		<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
		<p id="form-login-remember">
			<input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" id="remember" />
			<label for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?></label>
		</p>
		<?php  endif; ?>
		<p id="submit-buton">
			<input type="submit" name="Submit" class="button login" value="<?php echo JText::_('JLOGIN') ?>" />
		</p>
		<input type="hidden" name="option" value="com_users" />
		<input type="hidden" name="task" value="user.login" />
		<input type="hidden" name="return" value="<?php echo base64_encode(JURI::base()) ?>" />
		<?php echo JHtml::_('form.token'); ?>
	</fieldset>
	</form>
	</div>
	</div>
</body>
</html>
