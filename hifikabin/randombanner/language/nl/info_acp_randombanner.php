<?php
/**
*
* @package phpBB Extension - Random Banner
* @copyright (c) 2015 HiFiKabin
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

	'RANDOMBANNER_SAVED'							=> 'Willekeurige banner Instellingen Opgeslagen.',
	'RANDOMBANNER_CONFIG_SET'						=> 'Configuratie',

	'LOG_RANDOMBANNER_SAVE'							=> 'Instellingen voor willekeurige banner zijn gewijzigd.',

	'RANDOMBANNER_ENABLE'							=> 'Willekeurige banner inschakelen?',

	'RANDOMBANNER_BACKGROUND'						=> 'Verberg Header Achtergrond kleur?',

	'RANDOMBANNER_CORNER'							=> 'Rond de banner hoeken af?',
	'RANDOMBANNER_PX'								=> 'px',

	'RANDOMBANNER_SEARCH'							=> 'Waar wilt u dat de zoekopdracht wordt getoond?',
	'RANDOMBANNER_SEARCH_HEADER_TOP_LEFT'			=> 'Header linksboven',
	'RANDOMBANNER_SEARCH_HEADER_TOP_RIGHT'			=> 'Header rechtsboven',
	'RANDOMBANNER_SEARCH_HEADER_BOTTOM_LEFT'		=> 'Header linksonder',
	'RANDOMBANNER_SEARCH_HEADER_BOTTOM_RIGHT'		=> 'Header rechtsonder',
	'RANDOMBANNER_SEARCH_HEADER_BOTTOM_MIDDLE'		=> 'Header onder midden',
	'RANDOMBANNER_SEARCH_NAVBAR'					=> 'NavBar',
	'RANDOMBANNER_SEARCH_REMOVE'					=> 'Nergens',

	'RANDOMBANNER_URL'								=> 'Doel URL',

	'RANDOMBANNER_INSTRUCTIONS'						=> 'Willekeurige banner instructies',

	'RANDOMBANNER_RANDOM'							=> 'Wat is willekeurig?',
	'RANDOMBANNER_RANDOM_INFO'						=> 'Willekeurig in dit geval betekent een willekeurige selectie bij het laden van elke pagina. Er is geen verwijzing naar eerder geladen banners, dus er zijn momenten waarop dezelfde banner meerdere keren achter elkaar kan worden geladen.',
	'RANDOMBANNER_IMAGE'							=> 'Banner URL',
	'RANDOMBANNER_IMAGE_INFO'						=> 'Banners kunnen worden opgeslagen op het forum, of extern.<br> Voeg vervolgens de volledige URL van de banner toe in het veld Banner URL.<br>Als u het afbeeldingsveld leeg laat, worden die afbeelding en de koppeling verwijderd.',
	'RANDOMBANNER_LINK'								=> 'Link URL',
	'RANDOMBANNER_LINK_INFO'						=> 'Voer de VOLLEDIGE URL in van de pagina waarnaar u de banner wilt linken.<br>Als je dit veld leeg laat, zal het klikken op de banner leiden naar de forumindex.',

	'RANDOMBANNER_MORE_IMAGES'						=> 'Voeg een andere afbeelding toe',
	'RANDOMBANNER_REQUIRE_3.1.0'				=> 'Deze extensie heeft ten minste phpBB 3.1.0 nodig en werkt niet met phpBB 3.2.0',
	'RANDOMBANNER_REQUIRE_3.2.0'				=> 'Deze extensie is voor phpBB 3.2.0 en hoger. Het werkt niet met phpBB 3.1.0',
));