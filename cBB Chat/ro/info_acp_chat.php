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
	'ACP_CAT_CHAT'			=> 'Chat',
	
	'ACP_CHAT_CONFIG'		=> 'Configurația principală',
	'ACP_CHAT_PAGES'		=> 'Gestionați paginile',
	'ACP_CHAT_ROOMS'		=> 'Gestionați sălile',
	'ACP_CHAT_TEXTS'		=> 'Texte statice și Reguli',

	'LOG_CHAT_CONFIG'				=> '<strong>cBB Chat:</strong> S-a schimbat configurația principală',
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> S-au adăugat excluderi<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Excluderile au fost eliminate<br />» %s',
	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB Chat:</strong> Mesajul a fost mutat din <em>%1$s</em> în <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 mesaj mutat din <em>%1$s</em> în <em>%2$s</em>',
		2 => '<strong>cBB Chat:</strong> %3$d mesaje mutate din <em>%1$s</em> în <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB Chat:</strong> Mesajul a fost șters <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 mesaj șters din <em>%1$s</em>',
		2 => '<strong>cBB Chat:</strong> %2$d mesaje au fost șterse din <em>%1$s</em>',
	],
	'LOG_CHAT_ROOM_REMOVED'			=> '<strong>cBB Chat:</strong> Sala <em>%s</em> și mesajele acestora au fost șterse',
]);
