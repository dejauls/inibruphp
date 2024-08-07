<?php
/**
 * @subpackage	mod_ts_team
 * @copyright	Copyright (C) 2013 - 2014 Themewinter. All rights reserved.
 * @license		GNU General Public License version 2 or later; 
 */

// no direct access
defined('_JEXEC') or die;

$data = array();

//Team 1
if( $params->get('team1_img') ){
	$data[0][ 'img' ] 				= $params->get('team1_img');
	$data[0][ 'name' ] 				= $params->get('team1_name');
	$data[0][ 'desg' ] 				= $params->get('team1_desg');
	$data[0][ 'desc' ] 				= $params->get('team1_desc');
	$data[0][ 'facebook' ] 			= $params->get('team1_facebook');
	$data[0][ 'twitter' ] 			= $params->get('team1_twitter');
	$data[0][ 'googleplus' ] 		= $params->get('team1_googleplus');
	$data[0][ 'pinterest' ] 		= $params->get('team1_pinterest');
	$data[0][ 'linkedin' ] 			= $params->get('team1_linkedin');
}

//Team 2
if( $params->get('team2_img') ){
	$data[1][ 'img' ] 				= $params->get('team2_img');
	$data[1][ 'name' ] 				= $params->get('team2_name');
	$data[1][ 'desg' ] 				= $params->get('team2_desg');
	$data[1][ 'desc' ] 				= $params->get('team2_desc');
	$data[1][ 'facebook' ] 			= $params->get('team2_facebook');
	$data[1][ 'twitter' ] 			= $params->get('team2_twitter');
	$data[1][ 'googleplus' ] 		= $params->get('team2_googleplus');
	$data[1][ 'pinterest' ] 		= $params->get('team2_pinterest');
	$data[1][ 'linkedin' ] 			= $params->get('team2_linkedin');
}

//Team 3
if( $params->get('team3_img') ){
	$data[2][ 'img' ] 				= $params->get('team3_img');
	$data[2][ 'name' ] 				= $params->get('team3_name');
	$data[2][ 'desg' ] 				= $params->get('team3_desg');
	$data[2][ 'desc' ] 				= $params->get('team3_desc');
	$data[2][ 'facebook' ] 			= $params->get('team3_facebook');
	$data[2][ 'twitter' ] 			= $params->get('team3_twitter');
	$data[2][ 'googleplus' ] 		= $params->get('team3_googleplus');
	$data[2][ 'pinterest' ] 		= $params->get('team3_pinterest');
	$data[2][ 'linkedin' ] 			= $params->get('team3_linkedin');
}

//Team 4
if( $params->get('team4_img') ){
	$data[3][ 'img' ] 				= $params->get('team4_img');
	$data[3][ 'name' ] 				= $params->get('team4_name');
	$data[3][ 'desg' ] 				= $params->get('team4_desg');
	$data[3][ 'desc' ] 				= $params->get('team4_desc');
	$data[3][ 'facebook' ] 			= $params->get('team4_facebook');
	$data[3][ 'twitter' ] 			= $params->get('team4_twitter');
	$data[3][ 'googleplus' ] 		= $params->get('team4_googleplus');
	$data[3][ 'pinterest' ] 		= $params->get('team4_pinterest');
	$data[3][ 'linkedin' ] 			= $params->get('team4_linkedin');
}

//Team 5
if( $params->get('team5_img') ){
	$data[4][ 'img' ] 				= $params->get('team5_img');
	$data[4][ 'name' ] 				= $params->get('team5_name');
	$data[4][ 'desg' ] 				= $params->get('team5_desg');
	$data[4][ 'desc' ] 				= $params->get('team5_desc');
	$data[4][ 'facebook' ] 			= $params->get('team5_facebook');
	$data[4][ 'twitter' ] 			= $params->get('team5_twitter');
	$data[4][ 'googleplus' ] 		= $params->get('team5_googleplus');
	$data[4][ 'pinterest' ] 		= $params->get('team5_pinterest');
	$data[4][ 'linkedin' ] 			= $params->get('team5_linkedin');
}

//Team 6
if( $params->get('team6_img') ){
	$data[5][ 'img' ] 				= $params->get('team6_img');
	$data[5][ 'name' ] 				= $params->get('team6_name');
	$data[5][ 'desg' ] 				= $params->get('team6_desg');
	$data[5][ 'desc' ] 				= $params->get('team6_desc');
	$data[5][ 'facebook' ] 			= $params->get('team6_facebook');
	$data[5][ 'twitter' ] 			= $params->get('team6_twitter');
	$data[5][ 'googleplus' ] 		= $params->get('team6_googleplus');
	$data[5][ 'pinterest' ] 		= $params->get('team6_pinterest');
	$data[5][ 'linkedin' ] 			= $params->get('team6_linkedin');
}

//Team 7
if( $params->get('team7_img') ){
	$data[6][ 'img' ] 				= $params->get('team7_img');
	$data[6][ 'name' ] 				= $params->get('team7_name');
	$data[6][ 'desg' ] 				= $params->get('team7_desg');
	$data[6][ 'desc' ] 				= $params->get('team7_desc');
	$data[6][ 'facebook' ] 			= $params->get('team7_facebook');
	$data[6][ 'twitter' ] 			= $params->get('team7_twitter');
	$data[6][ 'googleplus' ] 		= $params->get('team7_googleplus');
	$data[6][ 'pinterest' ] 		= $params->get('team7_pinterest');
	$data[6][ 'linkedin' ] 			= $params->get('team7_linkedin');
}

//Team 8
if( $params->get('team8_img') ){
	$data[7][ 'img' ] 				= $params->get('team8_img');
	$data[7][ 'name' ] 				= $params->get('team8_name');
	$data[7][ 'desg' ] 				= $params->get('team8_desg');
	$data[7][ 'desc' ] 				= $params->get('team8_desc');
	$data[7][ 'facebook' ] 			= $params->get('team8_facebook');
	$data[7][ 'twitter' ] 			= $params->get('team8_twitter');
	$data[7][ 'googleplus' ] 		= $params->get('team8_googleplus');
	$data[7][ 'pinterest' ] 		= $params->get('team8_pinterest');
	$data[7][ 'linkedin' ] 			= $params->get('team8_linkedin');
}

require JModuleHelper::getLayoutPath('mod_ts_team', $params->get('layout'));