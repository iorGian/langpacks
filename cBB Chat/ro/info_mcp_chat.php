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
	'MCP_CHAT_BAN'				=> 'Excluderi de chat',
	
	'CHAT_BAN_CELL'				=> 'Nume de utilizator',
	'CHAT_BAN_CELL_EXPLAIN'		=> 'Pentru a specifica mai multe nume de utilizator, introduceți-le pe fiecare într-un rând nou.<br />
		Utilizați linkul <em><u>Găsiți un utilizator</u></em> pentru a găsi și adăuga utilizatori automat.',
	'CHAT_BAN_LIST'				=> 'Utilizatori excluși',
	'CHAT_EXCLUSIONS_ADDED'		=> 'Excluderile au fost modificate',
	'CHAT_EXCLUSIONS_DELETED'	=> 'Excluderile au fost șterse',
	'CHAT_EXCLUSIONS_ERROR'		=> 'A apărut o eroare, verificați datele introduse',
	
	'LOG_CHAT_EXCLUSION_ADDED'		=> '<strong>cBB Chat:</strong> S-au adăugat excluderi<br />» %s',
 	'LOG_CHAT_EXCLUSION_REMOVED'	=> '<strong>cBB Chat:</strong> Excluderile au fost eliminate<br />» %s',
 	'LOG_CHAT_MESSAGE_MOVED'		=> '<strong>cBB Chat:</strong> Mesajul a fost mutat din <em>%1$s</em> în <em>%2$s</em><br />» %3$s',
	'LOG_CHAT_MESSAGES_MOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 mesaj mutat din <em>%1$s</em> în <em>%2$s</em>',
		2 => '<strong>cBB Chat:</strong> %3$d mesaje mutate din <em>%1$s</em> în <em>%2$s</em>',
	],
	'LOG_CHAT_MESSAGE_REMOVED'		=> '<strong>cBB Chat:</strong> Mesaj eliminat <br />» <em>%s</em>',
	'LOG_CHAT_MESSAGES_REMOVED'		=> [
		1 => '<strong>cBB Chat:</strong> 1 mesaj eliminat din <em>%1$s</em>',
		2 => '<strong>cBB Chat:</strong> %2$d mesaje au fost eliminate din <em>%1$s</em>',
	],
]);
