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

// Email settings
$lang = array_merge($lang, array(
	'ACP_MASS_EMAIL_EXPLAIN'		=> 'Тук можете да изпратите имейл съобщение до всички потребители или до всички потребители от конкретна група, <strong>които са включили опцията за получаване на масови имейли</strong>. За целта имейлът ще бъде изпратен до посочения административен имейл адрес, а всички получатели ще бъдат добавени като скрито копие. По подразбиране в един такъв имейл се включват само 20 получатели; при повече получатели ще бъдат изпратени повече имейли. Ако изпращате имейл до голяма група хора, моля, бъдете търпеливи след изпращане и не спирайте страницата по средата. Нормално е масовото изпращане да отнеме дълго време; ще бъдете уведомени, когато скриптът приключи.',
	'ALL_USERS'						=> 'Всички потребители',

	'COMPOSE'				=> 'Напиши ново',

	'EMAIL_SEND_ERROR'		=> 'Появи се грешка при изпращането на съобщението. Проверете %sЛога с грешките%s за информация.',
	'EMAIL_SENT'			=> 'Съобщението е изпратено.',
	'EMAIL_SENT_QUEUE'		=> 'Съобщението не беше изпратено.',

	'LOG_SESSION'			=> 'Лог на сесията',

	'SEND_IMMEDIATELY'		=> 'Изпрати незабавно',
	'SEND_TO_GROUP'			=> 'Изпрати на група',
	'SEND_TO_USERS'			=> 'Изпрати на потребители',
	'SEND_TO_USERS_EXPLAIN'	=> 'Въведете всяко име на нов ред',

	'MAIL_BANNED'			=> 'Прати и до баннати потребители',
	'MAIL_BANNED_EXPLAIN'	=> 'Когато изпращате масово съобщение, можете да изберете дали то да стигне и до баннатите потребилите във форума.',
	'MAIL_HIGH_PRIORITY'	=> 'Висок',
	'MAIL_LOW_PRIORITY'		=> 'Нисък',
	'MAIL_NORMAL_PRIORITY'	=> 'Нормален',
	'MAIL_PRIORITY'			=> 'Приоритет',
	'MASS_MESSAGE'			=> 'Вашето съобщение',
	'MASS_MESSAGE_EXPLAIN'	=> 'Можете да въвеждате само текст без BBCode или HTML.',

	'NO_EMAIL_MESSAGE'		=> 'Трябва да въведете съобщение.',
	'NO_EMAIL_SUBJECT'		=> 'Трябва да въведете заглавие на съобщението си.',
));
