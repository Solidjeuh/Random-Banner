<?php
/**
*
* @package phpBB Extension - Random Banner
* @copyright (c) 2018 HiFiKabin
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'ACP_RANDOMBANNER_TITLE'						=> 'Willekeurige banner',
	'ACP_RANDOMBANNER'								=> 'Willekeurige banner',
	
	'RANDOMBANNER_REQUIRE_3.2.0'					=> 'Deze extensie is voor phpBB 3.2.0 en hoger. Het werkt niet met phpBB 3.1.0',
));
