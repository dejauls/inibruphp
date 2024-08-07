<?php
/** 
 *------------------------------------------------------------------------------
 * @package       T3 Framework for Joomla!
 *------------------------------------------------------------------------------
 * @copyright     Copyright (C) 2004-2013 JoomlArt.com. All Rights Reserved.
 * @license       GNU General Public License version 2 or later; see LICENSE.txt
 * @authors       JoomlArt, JoomlaBamboo, (contribute to this project at github 
 *                & Google group to become co-author)
 * @Google group: https://groups.google.com/forum/#!forum/t3fw
 * @Link:         http://t3-framework.org 
 *------------------------------------------------------------------------------
 */

defined('_JEXEC') or die('Restricted access');

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the sliders style, you would use the following include:
 * <jdoc:include type="module" name="test" style="slider" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * three arguments.
 */


/*
 * Default Module Chrome that has semantic markup and has best SEO support
 */
function modChrome_T3Xhtml($module, &$params, &$attribs)
{ 
	$badge          = preg_match ('/badge/', $params->get('moduleclass_sfx'))? '<span class="badge">&nbsp;</span>' : '';
	$moduleTag      = htmlspecialchars($params->get('module_tag', 'div'));
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$headerClass    = $params->get('header_class');
	$bootstrapSize  = $params->get('bootstrap_size');
	$moduleClass    = !empty($bootstrapSize) ? ' col-sm-' . (int) $bootstrapSize . '' : '';
	$moduleClassSfx = htmlspecialchars($params->get('moduleclass_sfx'));

	$title_data = explode('//', $module->title);

    if( is_array($title_data) and isset($title_data[2]) ){
        $module->title = trim($title_data[0]);
        $module->title .= '<span class="sub-title">' .$title_data[1]. '</span>' . $title_data[2] ;
    } elseif (is_array($title_data) and isset($title_data[1])) {
    	$module->title = trim($title_data[0]);
        $module->title .= '<span class="sub-title">' .$title_data[1]. '</span>';
    } else {
    	$module->title;
    }

	if (!empty ($module->content)) {
		$html = "<{$moduleTag} class=\"t3-module module{$moduleClassSfx} {$moduleClass}\" id=\"Mod{$module->id}\">" .
					"<div class=\"module-inner\">" . $badge;

		if ($module->showtitle != 0) {
			$html .= "<{$headerTag} class=\"module-title {$headerClass}\">{$module->title}</{$headerTag}>";
		}

		$html .= "<div class=\"module-ct\">{$module->content}</div></div></{$moduleTag}>";

		echo $html;
	}
}
