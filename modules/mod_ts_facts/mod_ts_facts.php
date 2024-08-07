<?php
    /**
    * @author    Tripples http://www.themewinter.com
    * @copyright Copyright (C) 2013- 2015 Tripples
    * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2
    */

    // no direct access
    defined('_JEXEC') or die('Restricted access');
    
    $layout                 = $params->get('layout', 'default');
    $moduleclass_sfx        = $params->get('moduleclass_sfx');

    $data = array();

    //Facts 1
    if( $params->get('title1') ){
        $data[0][ 'icon' ]              = $params->get('icon1');
        $data[0][ 'num' ]              = $params->get('num1');
        $data[0][ 'title' ]             = $params->get('title1');
    }

    //Facts 2
    if( $params->get('title2') ){
        $data[1][ 'icon' ]              = $params->get('icon2');
        $data[1][ 'num' ]              = $params->get('num2');
        $data[1][ 'title' ]             = $params->get('title2');
    }

    //Facts 3
    if( $params->get('title3') ){
        $data[2][ 'icon' ]              = $params->get('icon3');
        $data[2][ 'num' ]              = $params->get('num3');
        $data[2][ 'title' ]             = $params->get('title3');
    }

    //Facts 4
    if( $params->get('title4') ){
        $data[3][ 'icon' ]              = $params->get('icon4');
        $data[3][ 'num' ]              = $params->get('num4');
        $data[3][ 'title' ]             = $params->get('title4');
    }

    //Facts 5
    if( $params->get('title5') ){
        $data[4][ 'icon' ]              = $params->get('icon5');
        $data[4][ 'num' ]              = $params->get('num5');
        $data[4][ 'title' ]             = $params->get('title5');
    }

    //Facts 6
    if( $params->get('title6') ){
        $data[5][ 'icon' ]              = $params->get('icon6');
        $data[5][ 'num' ]              = $params->get('num6');
        $data[5][ 'title' ]             = $params->get('title6');
    }

    

    require(JModuleHelper::getLayoutPath('mod_ts_facts', $layout) );