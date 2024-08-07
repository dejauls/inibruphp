<?php
	/*
		# mod_sp_social - Social module by JoomShaper.com
		# Author    	JoomShaper http://www.joomshaper.com
		# Copyright 	2010 - 2013 JoomShaper.com. All Rights Reserved.
		# License	 	http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
		# Website 		http://www.joomshaper.com
	*/

    // no direct access
    defined('_JEXEC') or die('Restricted access');

    $layout                 = $params->get('layout', 'default');

    //Parameters
	$rss 			= $params->get('rss');
	$facebook 		= $params->get('facebook');
	$twitter 		= $params->get('twitter');
	$goggleplus 	= $params->get('goggleplus');
	$youtube 		= $params->get('youtube');
	$linkedin 		= $params->get('linkedin');
	$pinterest 		= $params->get('pinterest');
	$flickr 		= $params->get('flickr');
	$dribble 		= $params->get('dribble');
	$myspace 		= $params->get('myspace');
	$digg 			= $params->get('digg');
	$skype 			= $params->get('skype');
	$vimeo 			= $params->get('vimeo');
	$delicious 		= $params->get('delicious');
	
	$preset 		= $params->get('preset');
	$icon_size 		= $params->get('icon_size');
	$target 		= $params->get('target');
	$custom_text 	= ($params->get('custom_text')!='') ? '<strong>' . $params->get('custom_text') . '</strong>': '';
	
	
    $ID 				= $module->id;
    $document 			= JFactory::getDocument();
	require(JModuleHelper::getLayoutPath('mod_sp_social', $layout) );
    $document->addStylesheet(JURI::base(true) . '/modules/'.basename(dirname(__FILE__)).'/assets/css/' . $preset . '/sp_social.css');