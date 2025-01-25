<?php
/**
 * [Romanian [Ro]]
 * @package cBB Chat
 * @version 1.2.6 01/07/2024
 *
 * @copyright (c) 2024 CaniDev
 * @license https://creativecommons.org/licenses/by-nc/4.0/
 */

// DO NOT CHANGE
if(!defined('IN_PHPBB'))
{
	exit;
}

if(empty($lang) || !is_array($lang))
{
	$lang = [];
}

$lang = array_merge($lang, [
	'ACL_CAT_CHAT'				=> 'Chat',
	'ACL_A_CHAT'				=> 'Poate gestiona chatul',

	'ACL_M_CHAT_DELETE'			=> 'Poate șterge mesaje',
	'ACL_M_CHAT_EDIT'			=> 'Poate edita mesaje',

	'ACL_U_CHAT_ARCHIVE'		=> 'Poate vizualiza arhiva',
	'ACL_U_CHAT_DELETE'			=> 'Poate șterge propriile mesaje',
	'ACL_U_CHAT_EDIT'			=> 'Poate edita propriile mesaje',
	'ACL_U_CHAT_IGNOREFLOOD'	=> 'Poate ignora limita de inundație a mesajelor',
	'ACL_U_CHAT_POST'			=> 'Poate posta mesaje',
	'ACL_U_CHAT_SENDPM'			=> 'Poate trimite mesaje private',
	'ACL_U_CHAT_VIEW'			=> 'Poate vizualiza chatul',
]);
