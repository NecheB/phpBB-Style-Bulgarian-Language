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

// Database Backup/Restore
$lang = array_merge($lang, array(
	'ACP_BACKUP_EXPLAIN'	=> 'От тук можете да бек-ъпнете всичката си информация. Можете да запазите резултатите в своята <samp>store/</samp> папка или да ги свалите директно. В зависимост от сървъра ще можете да компресирате файла.',
	'ACP_RESTORE_EXPLAIN'	=> 'Това ще извърши пълно възстановяване на всички phpBB таблици от запазен файл. Ако сървърът Ви го поддържа, можете да използвате gzip или bzip2 компресиран текстов файл и той ще бъде автоматично разкомпресиран. <strong>ПРЕДУПРЕЖДЕНИЕ</strong> Това ще презапише всички съществуващи данни. Възстановяването може да отнеме дълго време; не напускайте тази страница, докато не приключи. Резервните копия се съхраняват в папката <samp>store/</samp> и се приема, че са създадени чрез функцията за резервни копия на phpBB. Възстановяването на резервни копия, които не са създадени от вградената система, може да работи или да не работи.',

	'BACKUP_DELETE'			=> 'Бек-ъп файла е изтрит успешно.',
	'BACKUP_INVALID'		=> 'Избрания бек-ъп файл е невалиден.',
	'BACKUP_NOT_SUPPORTED'	=> 'Избраният бек-ъп не се поддържа',
	'BACKUP_OPTIONS'		=> 'Бек-ъп опции',
	'BACKUP_SUCCESS'		=> 'Бек-ъп файла е създаден успешно.',
	'BACKUP_TYPE'			=> 'Бек-ъп тип',

	'DATABASE'			=> 'Инструменти',
	'DATA_ONLY'			=> 'Информация само',
	'DELETE_BACKUP'		=> 'Изтрий бек-ъпа',
	'DELETE_SELECTED_BACKUP'	=> 'Сигурен ли сте, че искате да изтриете избрания backup?',
	'DESELECT_ALL'		=> 'Деизбери всички',
	'DOWNLOAD_BACKUP'	=> 'Свали бек-ъпа',

	'FILE_TYPE'			=> 'Файл тип',
	'FILE_WRITE_FAIL'	=> 'Грешка при писане на файлове в папката.',
	'FULL_BACKUP'		=> 'Пълно',

	'RESTORE_FAILURE'		=> 'Backup файл-а е повреден.',
	'RESTORE_OPTIONS'		=> 'Опции при възстановяване',
	'RESTORE_SELECTED_BACKUP'	=> 'Сигурни ли сте, че искате да върнете избрания backup?',
	'RESTORE_SUCCESS'		=> 'Базата данни беше възстановена успешно.<br /><br />Форумът трябва да е върнат в състоянието, в което е бил при създаването на резервното копие.',

	'SELECT_ALL'			=> 'Избери всички',
	'SELECT_FILE'			=> 'Избери файл',
	'START_BACKUP'			=> 'Започни бек-ъп',
	'START_RESTORE'			=> 'Започни възстановяване',
	'STORE_AND_DOWNLOAD'	=> 'Запиши и свали',
	'STORE_LOCAL'			=> 'Запиши файла локално',

	'TABLE_SELECT'		=> 'Избери таблица',
	'TABLE_SELECT_ERROR'=> 'Трябва да изберете поне една таблица.',
));
