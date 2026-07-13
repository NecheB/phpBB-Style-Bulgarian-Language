<?php
/**
*
* This file is part of the American English Language Pack
* for the phpBB Forum Software.
*
* @copyright (c) phpBB Limited <https://www.phpbb.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
* For full copyright and license information, please see
* the docs/CREDITS.txt file.
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
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

// Banning
$lang = array_merge($lang, array(
	'1_HOUR'		=> '1 час',
	'30_MINS'		=> '30 минути',
	'6_HOURS'		=> '6 часа',

	'ACP_BAN_EXPLAIN'	=> 'Тук можете да управлявате забраните за потребители по име, IP или имейл адрес. Тези методи не позволяват на потребителя да достигне която и да е част от форума. Ако желаете, можете да въведете кратка причина за забраната (най-много 3000 знака). Тя ще бъде показана в администраторския дневник. Може да бъде зададена и продължителност на забраната. Ако искате забраната да приключи на конкретна дата, вместо след зададен период, изберете <span style="text-decoration: underline;">До -&gt;</span> за продължителност на забраната и въведете дата във формат <kbd>YYYY-MM-DD</kbd>.',

	'BAN_EXCLUDE'			=> 'Изключи от банване',
	'BAN_LENGTH'			=> 'Дължина',
	'BAN_REASON'			=> 'Причина',
	'BAN_GIVE_REASON'		=> 'Причина(публична)',
	'BAN_UPDATE_SUCCESSFUL'	=> 'Бан списъка е успешно променен.',
	'BANNED_UNTIL_DATE'		=> 'до %s', // Example: "until Mon 13.Jul.2009, 14:44"
	'BANNED_UNTIL_DURATION'	=> '%1$s (до %2$s)', // Example: "7 days (until Tue 14.Jul.2009, 14:44)"

	'EMAIL_BAN'					=> 'Бан на един или повече email адреси',
	'EMAIL_BAN_EXCLUDE_EXPLAIN'	=> 'Позволява Ви да изключите въведения email адрес от всички настоящи банове.',
	'EMAIL_BAN_EXPLAIN'			=> 'За да посочите повече от един имейл адрес, въведете всеки на нов ред. За съвпадение с частични адреси използвайте * като заместващ знак, напр. <samp>*@hotmail.com</samp>, <samp>*@*.domain.tld</samp> и др.',
	'EMAIL_NO_BANNED'			=> 'Няма баннати email адреси',
	'EMAIL_UNBAN'				=> 'Премахване на бан',
	'EMAIL_UNBAN_EXPLAIN'		=> 'Тук можете да премахнете бан на потребител.',

	'IP_BAN'					=> 'Бан на един или повече IP адреси',
	'IP_BAN_EXCLUDE_EXPLAIN'	=> 'Позволява Ви да изключите въведения IP адрес от всички настоящи банове.',
	'IP_BAN_EXPLAIN'			=> 'За да добавите няколко IP/hostname адреса сложете всеки един на нов ред. Можете да използвате * като маска или тире (-), ако става въпрос за диапазон от много IP адреса.',
	'IP_HOSTNAME'				=> 'IP адрес/hostname',
	'IP_NO_BANNED'				=> 'Няма баннати IP адреси',
	'IP_UNBAN'					=> 'Премахване на бан',
	'IP_UNBAN_EXPLAIN'			=> 'Тук можете да премахнете бан на потребител.',

	'LENGTH_BAN_INVALID'		=> 'Датата трябва да е форматирана <kbd>YYYY-MM-DD</kbd>.',

	'OPTIONS_BANNED'			=> 'Баннат',
	'OPTIONS_EXCLUDED'			=> 'Премахнат',

	'PERMANENT'		=> 'Завинаги',

	'UNTIL'						=> 'До',
	'USER_BAN'					=> 'Бан на един или повече потребители',
	'USER_BAN_EXCLUDE_EXPLAIN'	=> 'Позволява Ви да изключите въведеното име от всички настоящи банове.',
	'USER_BAN_EXPLAIN'			=> 'Можете да забраните няколко потребители наведнъж, като въведете всяко име на нов ред. Използвайте функцията <span style="text-decoration: underline;">Намери потребител</span>, за да потърсите и добавите автоматично един или повече потребители.',
	'USER_NO_BANNED'			=> 'Няма баннати потребители',
	'USER_UNBAN'				=> 'Премахване на бан',
	'USER_UNBAN_EXPLAIN'		=> 'Тук можете да премахнете бан на потребител.',
));
