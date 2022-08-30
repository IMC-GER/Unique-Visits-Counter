<?php
/**
*
* @package phpBB Extension - Unique Visits Counter
* @copyright (c) 2019 dmzx - https://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = [];
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, [
	'UNIQUE_VISITS_COUNTER_SAVED'						=> 'Unique Visits Counter Einstellungen gesichert.',
	'UNIQUE_VISITS_COUNTER_ALLOW'						=> 'Aktivere Unique Visits Counter',
	'UNIQUE_VISITS_COUNTER_ALLOW_EXPLAIN'				=> 'Wenn diese Option auf Nein steht, ist der Zähler Unique Visits Counter vollständig deaktiviert..',
	'UNIQUE_VISITS_COUNTER_TIME_VALUE'					=> 'Zeitspanne festlegen',
	'UNIQUE_VISITS_COUNTER_TIME_VALUE_EXPLAIN'			=> 'Legen Sie den Zeitraum für Besuche anzeigen fest.<br>Die gleiche Zeit wird für Besuche löschen verwendet.<br>Der Standardwert ist 24 Stunden.',
	'UNIQUE_VISITS_COUNTER_HOURS'	=> [
		1 => 'Std.',
		2 => 'Std.',
	],
	'UNIQUE_VISITS_COUNTER_VERSION'						=> 'Version',
]);
