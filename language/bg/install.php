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

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Инсталация',
	'SELECT_LANG'	=> 'Избери език',

	'STAGE_INSTALL'	=> 'phpBB инсталиране',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Въведетение',
	'INTRODUCTION_BODY'		=> 'Добре дошли в phpBB3!<br /><br />phpBB® е най-широко използваната система с отворен код за дискусионни форуми в света. phpBB3 е най-новото издание в линия продукти, започнала през 2000 г. Както предшествениците си, phpBB3 е богата на функции, удобна за потребителите и напълно поддържана от екипа на phpBB. phpBB3 значително подобрява качествата, които направиха phpBB2 популярна, и добавя често искани функции, които липсваха в предишните версии. Надяваме се да надмине очакванията Ви.<br /><br />Тази инсталационна система ще Ви преведе през инсталирането на phpBB3, обновяването до последната версия на phpBB3 от предишни издания, както и конвертирането към phpBB3 от друга система за дискусионни форуми (включително phpBB2). За повече информация Ви препоръчваме да прочетете <a href="%1$s">ръководството за инсталиране</a>.<br /><br />За да прочетете лиценза на phpBB3 или да научите повече за получаването на поддръжка и нашата политика за нея, изберете съответните опции от страничното меню. За да продължите, изберете подходящия раздел по-горе.',

	// Support page
	'SUPPORT_TITLE'		=> 'Поддръжка',
	'SUPPORT_BODY'		=> 'Пълна безплатна поддръжка ще бъде осигурена за phpBB3. Това включва:</p><ul><li>инсталация</li><li>конфигурация</li><li>технически въпроси</li><li>проблеми свързани с потенциален бъг в софтуера ни</li><li>актуализиране от Release Candidate (RC) версии до последните стабилни версии</li><li>конвертиране от phpBB 2.0.x на phpBB3</li><li>конвертиране от друг софтуер за форуми към phpBB3 (моля прочетете <a href="https://www.phpbb.com/community/viewforum.php?f=486">Форум Конвертиране</a>)</li></ul><p>Съветваме ви, ако все още използвате БЕТА версия на phpBB3 да я замените с нова инсталация на стабилна версия.</p><h2>Разширения / Стилове</h2><p>При проблеми свързани с разширенията, моля пишете във <a href="https://www.phpbb.com/community/viewforum.php?f=451">Форум за разширения</a>.<br />За проблеми свързани с темите/стиловете, моля пишете във <a href="https://www.phpbb.com/community/viewforum.php?f=471">Форум Стилове</a>.<br /><br />Ако имате проблеми с пакет, трябва да пишете на създателя на този пакет.</p><h2>Поддръжка</h2><p><a href="https://www.phpbb.com/support/">Секция поддръжка</a><br /><a href="https://www.phpbb.com/support/docs/en/3.2/ug/quickstart/">Наръчник</a><br /><br />Следете ни в <a href="https://www.twitter.com/phpbb/">Twitter</a> и <a href="https://www.facebook.com/phpbb/">Facebook</a><br /><br />',

	// License
	'LICENSE_TITLE'		=> 'GPL (Общ публичен лиценз)',

	// Install page
	'INSTALL_INTRO'			=> 'Добре дошли',
	'INSTALL_INTRO_BODY'	=> 'С тази функция можете да инсталирате форума.</p>
    <p>За да продължите инсталацията ще Ви е нужна следната информация:</p>
	<ul>
	<li>Тип на базата данни</li>
	<li>Име на сървъра на базата данни</li>
	<li>Име на базата данни</li>
	<li>Потребителско име и парола на базата данни</li>
	</ul>

    <p><strong>Бележка:</strong> Ако инсталирате посредством SQLite, трябва да въведете пълния път към базата данни и да оставите потребителското име и парола празни.</p>

	<p>phpBB3 поддържа показаните долу бази данни:</p>
	<ul>
		<li>MySQL 4.1.3 или над (MySQLi задължително)</li>
		<li>PostgreSQL 8.3+</li>
		<li>SQLite 3.6.15+</li>
		<li>Firebird 2.1+</li>
		<li>MS SQL Server 2000 или над (директно или чрез ODBC)</li>
		<li>MS SQL Server 2005 или над (native)</li>
		<li>Oracle</li>
    </ul>

    <p>Само поддържаните бази данни от вашият сървър ще бъдат показвани.',

	'ACP_LINK'	=> 'Отиди към <a href="%1$s">администраторският панел</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB вече е инсталиран.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB все още не е инсталиран.',
	'INSTALL_RESTART'				=> 'Рестартиране на инсталацията',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'Файла не съществува',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'За да инсталирате phpBB файла %1$s трябва да съществува.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Препоръчително е файла %1$s да съществува.',
	'FILE_NOT_WRITABLE'						=> 'Файла няма права за писане в него',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'За да инсталирате phpBB файла %1$s трябва да има права за писане в него.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Препоръчително е файла %1$s да притежава права за писане в него.',

	'DIRECTORY_NOT_EXISTS'						=> 'Директорията не съществува',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'За да инсталирате phpBB директорията %1$s трябва да съществува.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'Препоръчително е директорията %1$s да съществува.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Директорията няма права за писане в нея',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'За да инсталирате phpBB директорията %1$s трябва да има права за писане в нея.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'Препоръчително е директорията %1$s да има права за писане в нея.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP версия',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB изисква PHP версия 7.2.0 или по-висока.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP функцията getimagesize() е включена',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'За да функционира phpBB правилно, функцията getimagesize трябва да бъде достъпна.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 поддръжка',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB няма да работи, ако Вашата PHP инсталация не е компилирана с UTF-8 поддръжка в PCRE разширението.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON поддръжка',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'За да може форума да работи правилно, PHP-то е нужно да има JSON разширение включено.',
	'PHP_MBSTRING_SUPPORT'				=> 'Поддръжка на mbstring в PHP',
	'PHP_MBSTRING_SUPPORT_EXPLAIN'		=> 'За правилната работа на phpBB е необходимо разширението mbstring за PHP да бъде инсталирано.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM поддръжка',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'За да може форума да работи правилно, PHP-то е нужно да има XML/DOM разширение включено.',
	'PHP_SUPPORTED_DB'					=> 'Поддържани бази данни',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'Трябва да имате поддръжка за поне една съвместима база данни в PHP. Ако няма показани налични модули за бази данни, свържете се с хостинг доставчика си или прегледайте съответната документация за PHP инсталацията.',

	'RETEST_REQUIREMENTS'	=> 'Повторно тестване на изискванията',

	'STAGE_REQUIREMENTS'	=> 'Изисквания',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'Трябва да попълните всички полета в този блок',

	'TIMEOUT_DETECTED_TITLE'	=> 'Инсталатора установи прекъсване',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'Инсталатора установи прекъсване, може да се опитате да обновите страницата, но това може да доведе до загуба на данни. Съветваме Ви да увеличите времето за timeout или да използвате CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Задаване на инсталационни данни',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Админ детайли',

	// Form labels
	'ADMIN_CONFIG'				=> 'Админ конфигурация',
	'ADMIN_PASSWORD'			=> 'Админ парола',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Потвърди паролата',
	'ADMIN_PASSWORD_EXPLAIN'	=> '(Паролата трябва да е м/у 6 и 30 знака дълга)',
	'ADMIN_USERNAME'			=> 'Админ име',
	'ADMIN_USERNAME_EXPLAIN'	=> '(Името трябва да е м/у 3 и 20 знака дълго)',

	// Errors
	'INST_ERR_EMAIL_INVALID'		=> 'Email адреса, който сте въвели не е валиден',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Паролите не съвпадат.',
	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Въведената парола е прекалено дълга. Максималната дължина е 30 знака.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Въведената парола е прекалено къса. Минималната дължина е 6 знака.',
	'INST_ERR_USER_TOO_LONG'		=> 'Потребителското име е прекалено дълго. Максималната дължина е 20 знака.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Въведеното потребителско име е прекалено късо. Минималната дължина е 3 знака.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Конфигурация',
	'DEFAULT_LANGUAGE'	=> 'Език по подразбиране',
	'BOARD_NAME'		=> 'Заглавие на форума',
	'BOARD_DESCRIPTION'	=> 'Кратко описание на форума',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Настройки на базата данни',

	// Form labels
	'DB_CONFIG'				=> 'Конфигурация',
	'DBMS'					=> 'Тип на базата данни',
	'DB_HOST'				=> 'Сървър база данни или DSN',
	'DB_HOST_EXPLAIN'		=> 'DSN - Data Source Name и се използва само при ODBC инсталации.',
	'DB_PORT'				=> 'Порт на сървъра',
	'DB_PORT_EXPLAIN'		=> 'Оставете празно, ако не знаете за какво се използва.',
	'DB_PASSWORD'			=> 'Парола на базата данни',
	'DB_NAME'				=> 'Име на базата данни',
	'DB_USERNAME'			=> 'База данни потребителско име',
	'DATABASE_VERSION'		=> 'Версия на базата данни',
	'TABLE_PREFIX'			=> 'Prefix за таблиците в базата данни',
	'TABLE_PREFIX_EXPLAIN'	=> 'Префикса трябва да съдържа букви, цифри и долни тирета.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQLI'		=> 'MySQL с MySQLi разширение',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_DB'					=> 'База данни грешка',
	'INST_ERR_NO_DB'				=> 'Не мога да заредя php модула за избраната база данни',
	'INST_ERR_DB_INVALID_PREFIX'	=> 'Въведеният префикс е грешен. Може да съдържа само букви, цифри и долни тирета.',
	'INST_ERR_PREFIX_TOO_LONG'		=> 'Въведения префикс е прекално дълъг. Максималната дължина е %d знака.',
	'INST_ERR_DB_NO_NAME'			=> 'Не е въведено име на базата данни',
	'INST_ERR_DB_FORUM_PATH'		=> 'Избрания файл е във Вашата форум директория. Файл-а трябва да бъде преместен в директория без директен достъп.',
	'INST_ERR_DB_CONNECT'			=> 'Не мога да се свържа към базата данни',
	'INST_ERR_DB_NO_WRITABLE'		=> 'Базата данни и нейната директорията трябва да притежават права за писане в тях.',
	'INST_ERR_DB_NO_ERROR'			=> 'Няма съобщение за тази грешка',
	'INST_ERR_PREFIX'				=> 'Таблица с този prefix вече съществува, изберете друг.',
	'INST_ERR_DB_NO_MYSQLI'			=> 'Версията на MySQL инсталирана на този сървър е несъвместима с избора, който сте направили. Опитайте друга опция.',
	'INST_ERR_DB_NO_SQLITE3'		=> 'Версията на SQLite разширението е прекалено стара, трябва да е поне 3.6.15.',
	'INST_ERR_DB_NO_ORACLE'			=> 'Версията на Oracle трябва да е настроена на <var>NLS_CHARACTERSET</var> параметри за <var>UTF8</var>. Трябва да промените версията до 9.2+ или да промените параметъра.',
	'INST_ERR_DB_NO_POSTGRES'		=> 'Базата данни която сте избрали не е в <var>UNICODE</var> или <var>UTF8</var> кодировка. Опитайте да инсталирате с база данни в <var>UNICODE</var> или <var>UTF8</var> кодировка',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'Не може да се пише в схема файла',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Имейл конфигурация',

	// Package info
	'PACKAGE_VERSION'					=> 'Инсталирана версия на пакета',
	'UPDATE_INCOMPLETE'				=> 'Вашата phpBB инсталация не е коректно обновена.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Долу прочетете как може да оправите тази грешка.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Непълно обновяване</h1>

		<p>Забелязахме, че последното phpBB обновление не е завършено. Посетете <a href="%1$s" title="%1$s">обновител на база данни</a>, уверете се, че само <em>Обнови базата данни</em> е избрано и натиснете <strong>Изпрати</strong>. Не забравяйте да изтриете install директорията, след като процеса завърши0.</p>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'			=> 'Излязла е нова версия <strong>%1$s</strong>. Прочетете <a href="%2$s" title="%2$s"><strong>това</strong></a> за да научите повече.',
	'SERVER_CONFIG'				=> 'Сървър конфигурация',
	'SCRIPT_PATH'				=> 'Скрипт път',
	'SCRIPT_PATH_EXPLAIN'		=> 'Пътят към phpBB форума, пример <samp>/phpBB3</samp>',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Благодарим Ви!',
	'CONFIG_SITE_DESC'				=> 'Кратък текст описващ форума ви',
	'CONFIG_SITENAME'				=> 'вашиятдомейн.com',

	'DEFAULT_INSTALL_POST'			=> '<t>Това е примерна публикация във Вашата phpBB3 инсталация. Изглежда, че всичко работи. Можете да изтриете тази публикация, ако желаете, и да продължите с настройването на форума. По време на инсталацията първата Ви категория и първият Ви форум получават подходящ набор от права за предварително дефинираните потребителски групи: администратори, ботове, глобални модератори, гости, регистрирани потребители и регистрирани COPPA потребители. Ако решите да изтриете първата категория и първия форум, не забравяйте да зададете права за всички тези потребителски групи за всички нови категории и форуми, които създавате. Препоръчва се да преименувате първата категория и първия форум и да копирате правата от тях, когато създавате нови категории и форуми. Приятно ползване!</t>',

	'FORUMS_FIRST_CATEGORY'			=> 'Първата ви директория',
	'FORUMS_TEST_FORUM_DESC'		=> 'Описание на първия ви форум.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Първия ви форум',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Администратор',
	'REPORT_WAREZ'					=> 'Мнението съдържа нелегален софтуер.',
	'REPORT_SPAM'					=> 'Целта на мнението е реклама.',
	'REPORT_OFF_TOPIC'				=> 'Мнението не е по темата.',
	'REPORT_OTHER'					=> 'Мнението не принадлежи на нито една категория. Използвайте описанието.',

	'SMILIES_ARROW'					=> 'Arrow',
	'SMILIES_CONFUSED'				=> 'Confused',
	'SMILIES_COOL'					=> 'Cool',
	'SMILIES_CRYING'				=> 'Crying or Very Sad',
	'SMILIES_EMARRASSED'			=> 'Embarrassed',
	'SMILIES_EVIL'					=> 'Evil or Very Mad',
	'SMILIES_EXCLAMATION'			=> 'Exclamation',
	'SMILIES_GEEK'					=> 'Geek',
	'SMILIES_IDEA'					=> 'Idea',
	'SMILIES_LAUGHING'				=> 'Laughing',
	'SMILIES_MAD'					=> 'Mad',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Neutral',
	'SMILIES_QUESTION'				=> 'Question',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Shocked',
	'SMILIES_SMILE'					=> 'Smile',
	'SMILIES_SURPRISED'				=> 'Surprised',
	'SMILIES_TWISTED_EVIL'			=> 'Twisted Evil',
	'SMILIES_UBER_GEEK'				=> 'Uber Geek',
	'SMILIES_VERY_HAPPY'			=> 'Very Happy',
	'SMILIES_WINK'					=> 'Wink',

	'TOPICS_TOPIC_TITLE'			=> 'Добре дошли в phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Общ преглед',
	'MENU_INTRO'		=> 'Въведение',
	'MENU_LICENSE'		=> 'Лизенц',
	'MENU_SUPPORT'		=> 'Поддръжка',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Създаване на конфигурационен файл',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Добавяне на конфигурационния настройки',
	'TASK_ADD_DEFAULT_DATA'				=> 'Добавяне на настройки по подразбиране в базата данни',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Създаване на схема файл в базата данни',
	'TASK_SETUP_DATABASE'				=> 'Подготвяне на базата данни',
	'TASK_CREATE_TABLES'				=> 'Създаване на таблици',

	// Install data
	'TASK_ADD_BOTS'				=> 'Регистриране на ботове',
	'TASK_ADD_LANGUAGES'		=> 'Инсталиране на наличните езици',
	'TASK_ADD_MODULES'			=> 'Инсталиране на модули',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Създаване на индекса за търсене',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Инсталиране на разширения',
	'TASK_NOTIFY_USER'			=> 'Изпращане на имейл с известие',
	'TASK_POPULATE_MIGRATIONS'	=> 'Пускане на миграции',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Инсталатора завърши успешно',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Модула не е намерен',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Модула не може да бъде намерен, защото услугата %s не е дефинирана.',

	'TASK_NOT_FOUND'				=> 'Задачата не е намерена',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Задачата не може да бъде намерена, защото услугата %s не е дефинирана.',

	'SKIP_MODULE'	=> 'Пропусни модула “%s”',
	'SKIP_TASK'		=> 'Пропусни задачата “%s”',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Всички задачи на инсталатора, трябва да започват с “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Дефиницията на задачата за инсталатора е невалидна. Името на задачата “%1$s”, очакваният неймспейс е “%2$s”. За повече информация, прегледайте документацията за task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'Няма права за писане в конфигурационният файл на инсталатора.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Инсталирай phpBB',
	'CLI_UPDATE_BOARD'				=> 'Обнови phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Покажи конфигурацията, която ще се използва',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Валидирай конфигурационния файл',
	'CLI_CONFIG_FILE'				=> 'Конфигурационен файл',
	'MISSING_FILE'					=> 'Файла не може да се достъпи %1$s',
	'MISSING_DATA'					=> 'Конфигурационният файл липса или съдържа невалидни настройки.',
	'INVALID_YAML_FILE'				=> 'Не може да се обходи YAML файла %1$s',
	'CONFIGURATION_VALID'			=> 'Конфигурационния файл е валиден',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Обновяване на версията',
	'UPDATE_INSTALLATION_EXPLAIN'	=> 'С тази опция можете да обновите phpBB инсталацията си до последната версия.<br />По време на процеса всички Ваши файлове ще бъдат проверени за цялост. Ще можете да прегледате всички разлики и файлове преди обновяването.<br /><br />Самото обновяване на файловете може да се извърши по два различни начина.</p><h2>Ръчно обновяване</h2><p>При този тип обновяване изтегляте само личния си набор от променени файлове, за да не загубите направените от Вас промени във файловете. След като изтеглите този пакет, трябва ръчно да качите файловете на правилните им места под основната директория на phpBB. След това можете отново да изпълните етапа за проверка на файловете, за да видите дали са преместени на правилното място.</p><h2>Автоматично обновяване чрез FTP</h2><p>Този метод е подобен на първия, но без да е необходимо сами да изтегляте променените файлове и да ги качвате. Това ще бъде направено вместо Вас. За да използвате този метод, трябва да знаете данните си за вход във FTP, защото ще бъдете попитани за тях. След приключване ще бъдете пренасочени отново към проверката на файловете, за да се уверите, че всичко е обновено правилно.<br /><br />',
	'UPDATE_INSTRUCTIONS'			=> '

		<h1>Съобщение за версията</h1>

		<p>Моля, прочетете съобщението за последната версия, преди да продължите процеса по обновяване; то може да съдържа полезна информация. В него има и пълни връзки за изтегляне, както и списък с промените.</p>

		<br />

		<h1>Как да обновите инсталацията си с пълния пакет</h1>

		<p>Препоръчителният начин за обновяване на инсталацията е използването на пълния пакет. Ако основни файлове на phpBB са били променяни във Вашата инсталация, може да предпочетете разширения пакет за обновяване, за да не загубите тези промени. Можете също да обновите инсталацията си чрез другите методи, описани в документа INSTALL.html. Стъпките за обновяване на phpBB3 с пълния пакет са:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li><strong class="error">Направете резервно копие на всички файлове на форума и на базата данни.</strong></li>
			<li>Отидете на <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">страницата за изтегляне на phpBB.com</a> и изтеглете последния архив "Full Package".</li>
			<li>Разархивирайте архива.</li>
			<li>Премахнете (изтрийте) файла <code class="inline">config.php</code> и папките <code class="inline">/images</code>, <code class="inline">/store</code> и <code class="inline">/files</code> <em>от пакета</em> (не от Вашия сайт).</li>
			<li>Отидете в ACP, настройки на форума, и се уверете, че prosilver е зададен като стил по подразбиране. Ако не е, задайте го на prosilver.</li>
			<li>Изтрийте папките <code class="inline">/vendor</code> и <code class="inline">/cache</code> от основната папка на форума на хоста.</li>
			<li>Чрез FTP или SSH качете останалите файлове и папки (т.е. останалото СЪДЪРЖАНИЕ на папката phpBB3) в основната папка на инсталацията на форума на сървъра, като презапишете съществуващите файлове. (Забележка: внимавайте да не изтриете разширенията в папката <code class="inline">/ext</code>, когато качвате новото съдържание на phpBB3.)</li>
			<li><strong><a href="%1$s" title="%1$s">Сега започнете процеса по обновяване, като насочите браузъра си към папката install</a>.</strong></li>
			<li>Следвайте стъпките за обновяване на базата данни и оставете процеса да приключи.</li>
			<li>Чрез FTP или SSH изтрийте папката <code class="inline">/install</code> от основната папка на инсталацията на форума.<br><br></li>
		</ol>

		<p>Вече имате нов, актуален форум с всички Ваши потребители и публикации. Последващи задачи:</p>
		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Обновете езиковия пакет</li>
			<li>Обновете стила си<br><br></li>
		</ul>

		<h1>Как да обновите инсталацията си с разширения пакет за обновяване</h1>

		<p>Разширеният пакет за обновяване се препоръчва само ако основни файлове на phpBB са били променяни във Вашата инсталация. Можете също да обновите инсталацията си чрез методите, описани в документа INSTALL.html. Стъпките за обновяване на phpBB3 с разширения пакет за обновяване са:</p>

		<ol style="margin-left: 20px; font-size: 1.1em;">
			<li>Отидете на <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">страницата за изтегляне на phpBB.com</a> и изтеглете архива "Advanced Update Package".</li>
			<li>Разархивирайте архива.</li>
			<li>Качете пълните разархивирани папки "install" и "vendor" в основната директория на phpBB (където се намира файлът config.php).<br><br></li>
		</ol>

		<p>След качването форумът ще бъде недостъпен за обикновените потребители, защото вече присъства качената от Вас директория install.<br /><br />
		<strong><a href="%1$s" title="%1$s">Сега започнете процеса по обновяване, като насочите браузъра си към папката install</a>.</strong><br />
		<br />
		След това ще бъдете преведени през процеса по обновяване. Ще бъдете уведомени, когато обновяването приключи.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Метод за обновяване',

	'UPDATE_TYPE_ALL'		=> 'Обнови файлова система и база данни',
	'UPDATE_TYPE_DB_ONLY'	=> 'Обнови само базата данни',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'Метод за обновяване на файлове',

	'UPDATE_FILE_METHOD'			=> 'Обновяване на файлове',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Свали обновените файлове в архив',
	'UPDATE_FILE_METHOD_FTP'		=> 'Обнови файловете през FTP (Автоматично)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Обнови файловете чрез директен файлов достъп (Автоматично)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Избери формат на архива',

	// FTP settings
	'FTP_SETTINGS'			=> 'FTP настройки',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Не е намерена валидна директория с файлове за обновяване, проверете дали всички файлове са качени успешно.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Версията Ви не се нуждае от обновяване. Вашият форум притежава най-новата. ',
	'OLD_UPDATE_FILES'				=> 'Обновените файлове са стари. Качените файлове обновяват phpBB %1$s до phpBB %2$s, но последната версия на phpBB е %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'Качените файлове са несъвместими с инсталираната версия. Вашата инсталирана версия е %1$s ъпдейт файла за phpBB е за %2$s до %3$s',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Обновяване на файловете',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Провери файлове за обновление',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'Файла не може да се отвори %s.',

	'UPDATE_FILE_DIFF'		=> 'Променени файлове',
	'ALL_FILES_DIFFED'		=> 'Всички промени на променените файлове бяха запаметени.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Обновяване на файлове',

	'DOWNLOAD'							=> 'Свали',
	'DOWNLOAD_CONFLICTS'				=> 'Свали конфликтите за този файл',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Търси за &lt;&lt;&lt; конфликти',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Свали архив на модифицираните файлове',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'След като свалите трябва да разархивирате. Ще намерите файловете в този архив. След това трябва да качите всички файлове. След като ги качите проверете ги отново.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'Файла вече е обновен',
	'FILE_DIFF_NOT_ALLOWED'			=> 'Файла не може да бъде променян',
	'FILE_USED'						=> 'Информация използвана от',			// Single file
	'FILES_CONFLICT'				=> 'Конфликт файлове',
	'FILES_CONFLICT_EXPLAIN'		=> 'Показаните файлове са модифицирани и не представят оригиналните файлове от старата версия. phpBB определи, че тези файлове ще създадат конфликти, ако бъдат разделени.',
	'FILES_DELETED'					=> 'Изтрити файлове',
	'FILES_DELETED_EXPLAIN'			=> 'Следните файлове не съществуват в новата версия. Тези файлове трябва да бъдат изтрити от вашата инсталация.',
	'FILES_MODIFIED'				=> 'Модифицирани файлове',
	'FILES_MODIFIED_EXPLAIN'		=> 'Показаните файлове са модифицирани и не представят оригиналните от старата версия.',
	'FILES_NEW'						=> 'Нови файлове',
	'FILES_NEW_EXPLAIN'				=> 'Показаните файлове не съществуват в инсталацията. Тези файлове ще бъдат добавени в инсталацията.',
	'FILES_NEW_CONFLICT'			=> 'Нови конфликтни файлове',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'Показаните файлове ще бъдат заместени с нови.',
	'FILES_NOT_MODIFIED'			=> 'Немодифицирани файлове',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'Показаните файлове не са модифицирани и представят оригиналните phpBB файлове от вашата версия, която искате да обновите.',
	'FILES_UP_TO_DATE'				=> 'Обновени файлове',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'Показаните файлове са вече обновени.',
	'FILES_VERSION'					=> 'Версия на файлове',
	'TOGGLE_DISPLAY'				=> 'Покажи/Скрий списъка',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Обновяване на файлове',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'Обновяването “%1$s“ беше неуспешно. Инсталатора ще опита да върне към “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'Обновяването на файловете беше неуспешно.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Продължи процеса на обновяване',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Провери файловете отново',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Обновяване на база данни',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'Базата данни беше обновена успешно. Сега можете да продължите.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Обновяване на разширения',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'Избрания конвертор не съществува',
	'DEV_NO_TEST_FILE'			=> 'Няма зададена стойност за test_file променливата в този конвертор. Ако си потребител на този конвертор, не трябва да виждаш тази грешка, пиши на създателя на конвертора.',
	'COULD_NOT_FIND_PATH'		=> 'Не мога да намеря пътя към форума. Проверете настройките и опитайте отново.<br />» Зададения път е %s',
	'CONFIG_PHPBB_EMPTY'		=> 'Стойността "%s" е празна.',

	'MAKE_FOLDER_WRITABLE'		=> 'Уверете се, че тази папка съществува и може да се пише в/у нея и тогава опитайте отново:<br />»<strong>%s</strong>',
	'MAKE_FOLDERS_WRITABLE'		=> 'Уверете се, че тази папки съществуват и може да се пише в/у тях и тогава опитайте отново:<br />»<strong>%s</strong>',

	'INSTALL_TEST'				=> 'Тествай отново',

	'NO_TABLES_FOUND'			=> 'Няма нмерени таблици.',
	'TABLES_MISSING'			=> 'Не мога да намеря тези таблици<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Проверете prefix-a на таблицата и опитайте отново.',

	// Conversion in progress
	'CATEGORY'					=> 'Категория',
	'CONTINUE_CONVERT'			=> 'Продължи с конвертирането',
	'CONTINUE_CONVERT_BODY'		=> 'Имате възможност да избирате м/у няколко нови конвертиращи версии или да продължите конвертирането.',
	'CONVERT_NEW_CONVERSION'	=> 'Ново конвертиране',
	'CONTINUE_OLD_CONVERSION'	=> 'Продължи с предишното стартирано конвертиране',
	'POST_ID'					=> 'Пост ID',

	// Start conversion
	'SUB_INTRO'					=> 'Въведение',
	'CONVERT_INTRO'				=> 'Добре дошли в phpBB',
	'CONVERT_INTRO_BODY'		=> 'От тук можете да импортирате информацията от други (инсталирани) форум системи. Списъка долу показва всички свободни конвертирани модули.',
	'AVAILABLE_CONVERTORS'		=> 'Свободни конвертори',
	'NO_CONVERTORS'				=> 'Няма конвертори за използване',
	'CONVERT_OPTIONS'			=> 'Опции',
	'SOFTWARE'					=> 'Форум софтуер',
	'VERSION'					=> 'Версия',
	'CONVERT'					=> 'Конвертирай',

	// Settings
	'STAGE_SETTINGS'			=> 'Настройки',
	'TABLE_PREFIX_SAME'			=> 'Prefix-а трябва да е еднакъв с този на стария форум.<br />» Избраният е %s',
	'DEFAULT_PREFIX_IS'			=> 'Конвертора не можа да намери таблици с избрания префикс. Уверете се в мястото на базата данни. Префикса по подразбиране за %1$s е <strong>%2$s</strong>',
	'SPECIFY_OPTIONS'			=> 'Опции при конвертиране',
	'FORUM_PATH'				=> 'Път към форума',
	'FORUM_PATH_EXPLAIN'		=> 'Това е <strong>относителният</strong> път на диска до предишния Ви форум от <strong>основната директория на тази phpBB3 инсталация</strong>.',
	'REFRESH_PAGE'				=> 'Обновете страницата за да продължите конвертирането',
	'REFRESH_PAGE_EXPLAIN'		=> 'Ако е зададено на Да, конвертора ще презареди страницата за да продължи конвертирането след последната стъпка. Ако това е първото конвертиране, Ви съветваме да го зададете на Не.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Конвертиране...',

	'AUTHOR_NOTES'				=> 'Бележки<br />» %s',
	'STARTING_CONVERT'			=> 'Започни конвертирането',
	'CONFIG_CONVERT'			=> 'Конвертиране на конфигурацията',
	'DONE'						=> 'Готово',
	'PREPROCESS_STEP'			=> 'Процес..',
	'FILLING_TABLE'				=> 'Запълване на таблица <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Запълване на таблици',
	'DB_ERR_INSERT'				=> 'Грешка при <code>вмъкване</code>',
	'DB_ERR_LAST'				=> 'Грешка при <var>query_last</var>',
	'DB_ERR_QUERY_FIRST'		=> 'Грешка при <var>query_first</var>',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Грешка при <var>query_first</var>, %s ("%s")',
	'DB_ERR_SELECT'				=> 'Грешка при <code>избор</code>',
	'STEP_PERCENT_COMPLETED'	=> 'Стъпка <strong>%d</strong> от <strong>%d</strong>',
	'FINAL_STEP'				=> 'Премини към последната стъпка',
	'SYNC_FORUMS'				=> 'Синхронизиране на форуми',
	'SYNC_POST_COUNT'			=> 'Синхронизиране на броя мнения',
	'SYNC_POST_COUNT_ID'		=> 'Синхронизиране на post_counts от <var>entry</var> %1$s до %2$s.',
	'SYNC_TOPICS'				=> 'Синхронизиране на теми',
	'SYNC_TOPIC_ID'				=> 'Синхронизиране на теми от <var>topic_id</var> %1$s до %2$s',
	'PROCESS_LAST'					=> 'Преминаване към последната стъпка',
	'UPDATE_TOPICS_POSTED'		=> 'Генериране на информация за теми',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Грешка при генерирането на мненията в тема. След като приключи конвертирането можете да опитате отново да генерирате информация в администраторския панел.',
	'CONTINUE_LAST'				=> 'Продължи с последното',
	'CLEAN_VERIFY'				=> 'Потвърждаване на финалната структура',
	'NOT_UNDERSTAND'			=> 'Не мога да разбера %s #%d, таблица %s ("%s")',
	'NAMING_CONFLICT'			=> 'Конфликт при именуването: %s и %s <br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Конвертирането е завършено успешно',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Вие успешно обновихте форума си до версия phpBB 3.3. Сега можете да влезете и да достъпите <a href="../">вашият форум</a>. Моля уверете се, че всички настройки са успешно прехвърлени преди да пуснете форума и да изтриете install директорият. Повече информация можете да намерите в <a href="https://www.phpbb.com/support/docs/en/3.3/ug/">Документацията</a> и <a href="https://www.phpbb.com/community/viewforum.php?f=661">форумите за поддръжка</a>.',

	'COLLIDING_CLEAN_USERNAME'			=> '<strong>%s</strong> е чистото потребителско име за:',
	'COLLIDING_USER'					=> '» потребител с ID: <strong>%d</strong>, потребителско име: <strong>%s</strong> (%d публикации)',
	'COLLIDING_USERNAMES_FOUND'			=> 'Намерени са сблъсъци на потребителски имена във вашата стара платформа. За да завършите миграцията, моля, изтрийте или променете имената на потребителите така, че да има само един потребител за всяко чисто потребителско име.',
	'CONV_ERR_FATAL'					=> 'Фатална грешка при миграцията',
	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP качването на прикачени файлове е включено при стария форум. Изключете FTP качването и се уверете, че сте избрали валидна директория, и тогава копирайте всички прикачени файлове в новата директория. След като направите това, рестартирайте конвертирането.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Няма информация за този конвертор.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Не мога да намеря информация за достъпа до форума.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Не мога да взема информация категориите.',
	'CONV_ERROR_GET_CONFIG'				=> 'Не мога да намеря конфигурацията на форума.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Нямам достъп до "%s".',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Не мога да намеря групова ауторизация.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Несъвместимост е засечена в add_bots() - трябва да ги добавите ръчно.',
	'CONV_ERROR_INSERT_BOT'				=> 'Не мога да добавя ботовете в таблицата.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Не мога да добавя ботовете в таблицата.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Не мога да добавя потребител в таблица.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Грешка',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Бележка: трябва да определиш $convertor[\'avatar_path\'] да използваш %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Път към форума източник не е зададен.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Бележка: трябва да определиш $convertor[\'avatar_gallery_path\'] да използваш %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Групата "%1$s" не може да бъде намерена в %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Бележка: трябва да определиш $convertor[\'ranks_path\'] да използваш %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Бележка: трябва да определиш $convertor[\'smilies_path\'] да използваш %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Бележка: трябва да определиш $convertor[\'upload_path\'] да използваш %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Грешка при добавяне на права.',
	'CONV_ERROR_PM_COUNT'				=> 'Не мога да преброя папките в личните съобщения.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Не мога да добавя новите категории.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Не мога да добавя новите форуми.',
	'CONV_ERROR_USER_ACCESS'			=> 'Не мога да взема ауторизация за потребител.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Грешна група "%1$s" дефинирана в %2$s.',
	'CONV_OPTIONS_BODY'					=> 'Страницата съдържа информация нужна за достъп до форума. Въведи информацията за базата данни на главния форум; обновяващия процес няма да промени нищо в базата данни.',
	'CONV_SAVED_MESSAGES'				=> 'Запазени съобщения',

	'PRE_CONVERT_COMPLETE'			=> 'Всички стъпки са завършени. Вече можете да започнете конвертирането.',
));
