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

$lang = array_merge($lang, array(
	'ACP_FILES'						=> 'Администраторски езикови файлове',
	'ACP_LANGUAGE_PACKS_EXPLAIN'	=> 'От тук можете инсталирате и деинсталирате езици. Езика по подразбиране е маркиран с (*).',

	'DELETE_LANGUAGE_CONFIRM'		=> 'Изтриване на “%s”?',

	'INSTALLED_LANGUAGE_PACKS'		=> 'Инсталирани езикови пакети',

	'LANGUAGE_DETAILS_UPDATED'			=> 'Детайлите са успешно променени.',
	'LANGUAGE_PACK_ALREADY_INSTALLED'	=> 'Този езиков пакет е вече инсталиран.',
	'LANGUAGE_PACK_DELETED'				=> 'Езиковият пакет „%s“ беше премахнат успешно. Всички потребители, които използват този език, бяха върнати към езика по подразбиране на форума.',
	'LANGUAGE_PACK_DETAILS'				=> 'Детайли',
	'LANGUAGE_PACK_INSTALLED'			=> 'Езиковият пакет „%s“ беше инсталиран успешно.',
	'LANGUAGE_PACK_CPF_UPDATE'			=> 'Динамичните профил полета’ бяха копирани от езика по подразбиране. Променете ги, ако се налага.',
	'LANGUAGE_PACK_ISO'					=> 'ISO',
	'LANGUAGE_PACK_LOCALNAME'			=> 'Локално име',
	'LANGUAGE_PACK_NAME'				=> 'Име',
	'LANGUAGE_PACK_NOT_EXIST'			=> 'Избрания езиков пакет не съществува.',
	'LANGUAGE_PACK_USED_BY'				=> 'Използва се от (включително ботове)',
	'LANGUAGE_VARIABLE'					=> 'Стойност',
	'LANG_AUTHOR'						=> 'Автор',
	'LANG_ENGLISH_NAME'					=> 'Име на английски',
	'LANG_ISO_CODE'						=> 'ISO код',
	'LANG_LOCAL_NAME'					=> 'Локално име',

	'MISSING_LANG_FILES'		=> 'Липсващи езикови файлове',
	'MISSING_LANG_VARIABLES'	=> 'Липсващи езикови променливи',

	'NO_FILE_SELECTED'				=> 'Не сте избрали файл.',
	'NO_LANG_ID'					=> 'Не сте избрали езиков пакет.',
	'NO_REMOVE_DEFAULT_LANG'		=> 'Вие не можете да изтриете пакета по подразбиране.<br />Ако искате да изтриете този пакет, направете друг по подразбиране.',
	'NO_UNINSTALLED_LANGUAGE_PACKS'	=> 'Няма',

	'THOSE_MISSING_LANG_FILES'			=> 'Файловете липсват от %s папката',
	'THOSE_MISSING_LANG_VARIABLES'		=> 'Следните езикови променливи липсват от езиковия пакет „%s“',

	'UNINSTALLED_LANGUAGE_PACKS'	=> 'Неинсталирани езикови пакети',

	'BROWSE_LANGUAGE_PACKS_DATABASE'	=> 'Търси в базата данни с езикови пакети',
));
