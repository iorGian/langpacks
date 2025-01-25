<?php
/**
 * [Romanian [Ro]]
 * @package cBB Chat
 * @version 1.2.6 01/07/2024
 *
 * @copyright (c) 2024 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// @ignore
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

// Chat language
$lang = array_merge($lang, [
	'CHAT'						=> 'Chat',
	'CHAT_APPLY'				=> 'Aplicați',
	'CHAT_ARCHIVE'				=> 'Arhiva chat',
	'CHAT_BAN_DATE'				=> 'Sfârșitul excluderii',
	'CHAT_BAN_DATE_EXPLAIN'		=> 'Formatul valid este DD/MM/YYYY hh:mm:ss.',
	'CHAT_BAN_PERIOD'			=> 'Durata excluderii',
	'CHAT_BAN_USER'				=> 'Exclude',
	'CHAT_BBCODE'				=> 'BBcod-uri',
	'CHAT_CHANGE_NAME'			=> 'Schimbați numele de utilizator',
	'CHAT_COLOR'				=> 'Culoarea textului',
	'CHAT_CONNECT'				=> 'Conectare/Deconectare',
	'CHAT_CUSTOM_BBCODES'		=> 'Coduri BB personalizate',
	'CHAT_DELETE_USER'			=> 'Ștergeți utilizatorul',
	'CHAT_DEST_ROOM'			=> 'Destinaţie',
	'CHAT_DISCONNECT_MESSAGE'	=> 'Ești deconectat.',
	'CHAT_FLOOD_WAIT'			=> 'Ora inundației este stabilită. Vă rugăm așteptați...',
	'CHAT_GUEST'				=> 'Invitat_%s',
	'CHAT_GUEST_ROOM'			=> 'General',
	'CHAT_MENTION'				=> 'Menționați',
	'CHAT_MOVE'					=> 'Mută-te în altă cameră',
	'CHAT_MOVE_CONFIRM'			=> 'Sigur doriți să mutați mesajele selectate?',
	'CHAT_NO_INFORMATION'		=> 'Nu există informații disponibile.',
	'CHAT_PM_EXCEED'			=> 'Nu puteți deschide mai multe conversații private din cauza unei limite stabilite de administrație.',
	'CHAT_PURGE'				=> 'Curățați mesajele',
	'CHAT_PURGE_CONFIRM'		=> 'Sigur doriți să ștergeți toate mesajele din sala <strong><em>%s</em></strong>?',
	'CHAT_REFRESH'				=> 'Reîmprospătare',
	'CHAT_RULES'				=> 'Reguli de chat',
	'CHAT_SEND_PM'				=> 'Mesaj privat',
	'CHAT_SMILIES'				=> 'Zâmbete',
	'CHAT_SOUND'				=> 'Activați/Dezactivați sunetul',

	'CHAT_ENTER_AS_GUEST'		=> 'Intră ca invitat',
	'CHAT_ENTER_AS_REGISTERED'	=> 'Intră ca membru al forumului',
	
	'CHAT_STATUS_AVAILABLE'		=> 'Disponibil',
	'CHAT_STATUS_AWAY'			=> 'Plecat',
	'CHAT_STATUS_BUSY'			=> 'Ocupat',
	'CHAT_STATUS_HIDDEN'		=> 'Ascuns',

	'CHAT_TIP'					=> 'Tip',
	'CHAT_UNBAN_USER'			=> 'Eliminați excluderea',
	'CHAT_USER_BANNED_PERIOD'		=> 'Sunteți exclus din chat până la: %s',
	'CHAT_USER_BANNED_PERMANENT'	=> 'Sunteți exclus definitiv din chat.',
	'CHAT_USER_ALREADY_EXISTS'		=> 'Utilizatorul este deja în uz.',
	'CHAT_VIEW_HISTORY'				=> 'Vezi mesajele anterioare',

	'CUSTOM_DATE'		=> 'Data personalizată',
	'EDIT'				=> 'Editare',
	'HALF_AN_HOUR'		=> 'Jumătate de oră',
	'NEW_TOPIC'			=> 'Subiect nou',
	'PERMANENT'			=> 'Permanent',
	'QUOTE'				=> 'Citat',

	'CORE_INSTALL_ERROR'	=> 'Nu ați încărcat toate fișierele din pachetul de instalare sau încercați să instalați un pachet vechi.<br />
		Asigurați-vă că încărcați toate fișierele (inclusiv folderul <em>core</em>) și utilizați un pachet descărcat de pe site-ul oficial.',
]);

// Text language
$lang = array_merge($lang, []);
