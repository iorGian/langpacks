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
	'ACP_CHAT_CONFIG_EXPLAIN'	=> 'Vă mulțumim că ați ales cBB Chat ca o completare a forumului dvs!<br />
		Din această pagină puteți modifica principalele caracteristici ale chat-ului.',
	'ACP_CHAT_PAGES_EXPLAIN'	=> 'De aici puteți gestiona paginile care vor încărca chat-ul și poziția acestuia.',
	'ACP_CHAT_ROOMS_EXPLAIN'	=> 'De aici puteți gestiona sălile speciale care vor fi afișate în chat.<br />Puteți comanda trăgând sălile în poziția corectă.',
	'ACP_CHAT_TEXTS_EXPLAIN'	=> 'De aici puteți gestiona anunțurile, sfaturile și regulile chatului.<br />
		Pentru a alege ordinea textelor, trageți și plasați-le în poziția corectă.',
	
	'CHAT_ALLOW_BBCODE'			=> 'Permiteți codul BB',
	'CHAT_ALLOW_BBCODE_EXPLAIN'	=> 'Definește dacă utilizatorii pot folosi etichete BBcode în chat.',
	'CHAT_ALLOW_PM'				=> 'Permite mesaje private',
	'CHAT_ALLOW_PM_EXPLAIN'		=> 'Activați/Dezactivați mesajele private dintre utilizatori.',
	'CHAT_ANONYMOUS_ALLOWED'	=> 'Permiteți oaspeți fără nume',
	'CHAT_ANONYMOUS_ALLOWED_EXPLAIN'	=> 'Dacă este activat, oaspeții vor accesa chatul cu un nume aleatoriu în loc să fie nevoiți să-și decidă numele.<br />
		<em>Această opțiune este valabilă numai dacă grupul de invitați are permisiunea de a vizualiza chatul. </em>',
	'CHAT_AUTOCONNECT'			=> 'Conectare automată',
	'CHAT_AUTOCONNECT_EXPLAIN'	=> 'Setează conectarea automată a chat-ului la încărcarea paginii.',
	'CHAT_AUTO_AWAY'			=> 'Timp de stare <em>Disponibil</em>',
	'CHAT_AUTO_AWAY_EXPLAIN'	=> 'Definește timpul de expirare (în minute) după care starea unui utilizator <em><strong>Disponibil</strong></em> trece la <em><strong>Plecat</strong></em>.<br /><em> Setați la 0 pentru a dezactiva această funcție</em>.',
	'CHAT_AUTO_AWAY_ERROR'		=> 'Timpul de schimbare a stării ar trebui să fie mai mic decât timpul de deconectare',
	'CHAT_AVATARS'				=> 'Afișați avatarele',
	'CHAT_BBCODE_FORMAT'		=> 'Format personalizat BBCode',
	'CHAT_BBCODE_FORMAT_EXPLAIN'	=> 'Setați aspectul codurilor BB personalizate în chat.',
	'CHAT_BBCODE_INBUTTON'		=> 'Butoane',
	'CHAT_BBCODE_INSELECT'		=> 'Meniu selectabil',
	'CHAT_CHARS'				=> 'Mesaje caractere',
	'CHAT_CHARS_EXPLAIN'		=> 'Numărul maxim de caractere permis în mesaje.<br />
		<em>Setați 0 pentru a dezactiva această limită</em>.',
	'CHAT_DIRECTION'			=> 'Direcția mesajelor',
	'CHAT_DIRECTION_EXPLAIN'	=> 'Setează ordinea mesajelor în chat.',
	'CHAT_DIRECTION_DOWN'		=> 'Cele mai vechi mai întâi',
	'CHAT_DIRECTION_UP'			=> 'Cele mai noi mai întâi',
	'CHAT_DISALLOWED_BBCODE'	=> 'Etichetele BBcode nu sunt permise',
	'CHAT_DISALLOWED_BBCODE_EXPLAIN'	=> 'Etichete BBcode care <strong>nu</strong> vor fi permise în chat.<br />
		Puteți selecta mai multe etichete folosind tasta <em>Ctrl</em> de pe tastatură.',
	'CHAT_FLOOD'				=> 'Limită de inundații mesaje',
	'CHAT_FLOOD_EXPLAIN'		=> 'Setează timpul (în secunde) pe care utilizatorii trebuie să aștepte pentru a scrie un mesaj nou.<br />
		<em>Setați 0 pentru a dezactiva această limită</em>.',
	'CHAT_FORUM_POSTS'			=> 'Postări pe forum',
	'CHAT_FORUM_POSTS_EXPLAIN'	=> 'Stabilește dacă subiectele noi sau mesajele noi din forum vor fi afișate în sălile de chat.',
	'CHAT_GROUP_USERS'			=> 'Grupați utilizatorii pe grupuri',
	'CHAT_GROUP_USERS_EXPLAIN'	=> 'Dacă este activat, utilizatorii vor fi grupați în chat după grupul lor implicit.',
	'CHAT_HEIGHT'				=> 'Înălțimea chatului',
	'CHAT_HEIGHT_EXPLAIN'		=> 'Setează înălțimea (în pixeli) a containerului de conversație.',
	'CHAT_HEIGHT_PAGE'			=> 'Înălțimea chatului',
	'CHAT_HEIGHT_PAGE_EXPLAIN'	=> 'Setați înălțimea (în pixeli) a containerului de conversație în această pagină.<br /><em>Setați 0 pentru a utiliza valoarea implicită.</em>',
	'CHAT_HIDE_POPUP'			=> 'Ascundeți automat meniurile',
	'CHAT_HIDE_POPUP_EXPLAIN'	=> 'Dacă este activat, meniurile BBcode, culoare și emoticon se vor închide automat când efectuați acțiunea.',
	'CHAT_MAIN_CONFIG'			=> 'Configurația principală',
	'CHAT_MESSAGES_CONFIG'		=> 'Configurarea mesajului',
	'CHAT_NOTICES_ADD'			=> 'Adăugați anunț',
	'CHAT_NOTICES_EDIT'			=> 'Editați anunțul',
	'CHAT_NOTICES_EXPLAIN'		=> 'Aceste mesaje vor fi afișate ca <em>anunțuri</em> sau alerte în partea de sus a chat-ului.',
	'CHAT_NOTICES_ITEM'			=> 'Anunţ',
	'CHAT_NOTICES_ITEM_EXPLAIN'	=> 'Puteți utiliza variabile de limbă, de exemplu <em>{L_CHAT}</em>.<br />
		<em>Este permis BBcode sau HTML.<br />
		Sunt permise zâmbetele.</em>',
	'CHAT_NOTICES'				=> 'Anunțuri',
	'CHAT_PAGE_ALIAS'			=> 'Alias de pagină',
	'CHAT_PAGE_ALIAS_EXPLAIN'	=> 'Setează un ID unic pentru pagina care va fi folosită în fișierul de configurare.<br /><em>Numai litere și cifre permise</em>.',
	'CHAT_PAGE_CONFIG'			=> 'Configurarea paginii',
	'CHAT_PAGE_CUSTOM'			=> 'Cale personalizată',
	'CHAT_PAGE_CUSTOM_EXPLAIN'	=> 'Setează calea completă (față de phpBB) a paginii.<br />De exemplu: <em>folder/file.php</em>.',
	'CHAT_PAGE_ENABLED'			=> 'Pagina de chat activată',
	'CHAT_PAGE_ENABLED_EXPLAIN'	=> 'Activați/dezactivați pagina principală a chat-ului.',
	'CHAT_PAGE_FILE'			=> 'Numele fișierului paginii',
	'CHAT_PAGE_FILE_EXPLAIN'	=> 'Setează fișierul care va fi încărcat în chat.',
	'CHAT_PAGE_FORUMS'			=> 'Forumuri',
	'CHAT_PAGE_FORUMS_EXPLAIN'	=> 'Setați forumurile în care este afișat chatul.<br />Puteți selecta câte doriți folosind tasta <em>Ctrl</em> de pe tastatură.<br /><em>Dacă nu selectați nici un forum, atunci arată chatul în toate.</em> ',
	'CHAT_PM_CONFIG'			=> 'Configurare mesaj privat',
	'CHAT_PM_IGNORE_FLOOD'		=> 'Ignorați timpul inundațiilor de mesaje',
	'CHAT_PM_IGNORE_FLOOD_EXPLAIN'	=> 'Dacă este activată, limita de inundații de mesaje stabilită nu se va aplica atunci când scrieți mesaje private între utilizatori.',
	'CHAT_PM_MAX'				=> 'Limită de mesaje private',
	'CHAT_PM_MAX_EXPLAIN'		=> 'Setează numărul maxim de mesaje private pe care un utilizator le poate deschide simultan.<br /><em>Setați 0 pentru a dezactiva această limită</em>.',
	'CHAT_PM_MAXAGE'			=> 'Timp de păstrare',
	'CHAT_PM_MAXAGE_EXPLAIN'	=> 'Setați timpul (în zile) la care vor fi păstrate mesajele private.
		<br />Mesajele care depășesc acest timp vor fi șterse.
		<br /><br /><em>Valoarea minimă 1, valoarea maximă 365</em>.',
	'CHAT_POSITION'				=> 'Poziția chat-ului',
	'CHAT_POSITION_EXPLAIN'		=> 'Poziția chat-ului în interiorul paginii.',
	'CHAT_POSITION_BOTTOM'		=> 'Jos',
	'CHAT_POSITION_TOP'			=> 'Sus',
	'CHAT_REFRESH_TIME'			=> 'Interval de reîmprospătare',
	'CHAT_REFRESH_TIME_EXPLAIN'	=> 'Interval de timp (în secunde) la care chatul așteaptă să se reîmprospăteze.',
	'CHAT_REMEMBER_STATUS'		=> 'Reține statutul de utilizator',
	'CHAT_REMEMBER_STATUS_EXPLAIN'	=> 'Dacă este activat, chatul își va aminti starea utilizatorilor în conexiunile noi, totuși, utilizatorii vor avea starea <em><strong>Disponibil</strong></em> atunci când se conectează.',
	'CHAT_ROOM_AUTH'			=> 'Permisiuni de afișare',
	'CHAT_ROOM_AUTOPURGE'		=> 'Ștergere automată',
	'CHAT_ROOM_AUTOPURGE_EXPLAIN'	=> 'Definiți cât de des se vor șterge toate mesajele din această sală.',
	'CHAT_ROOM_CONFIG'			=> 'Configurare sală',
	'CHAT_ROOM_CONNECTIONS'		=> 'Conexiuni',
	'CHAT_ROOM_ENABLED'			=> 'Sală activată',
	'CHAT_ROOM_GROUPS'			=> 'Grupuri permise',
	'CHAT_ROOM_GROUPS_EXPLAIN'	=> 'Setați grupuri de utilizatori care pot folosi această cameră.<br />Puteți selecta mai multe grupuri folosind tasta <em>Ctrl</em> de pe tastatură.',
	'CHAT_ROOM_GUEST_FORUMS'			=> 'Forumuri legate de această sală',
	'CHAT_ROOM_GUEST_FORUMS_EXPLAIN'	=> 'Aici puteți selecta forumurile din care vor fi afișate subiectele și mesajele în sala de chat.<br />
		Dacă nu selectați niciunul, toate vor fi folosite (cu excepția celor alocate altor săli).<br />
		Puteți selecta câte doriți folosind tasta <em>Ctrl</em> de pe tastatură.',
	'CHAT_ROOM_LINKED_FORUMS'			=> 'Forumuri legate de această sală',
	'CHAT_ROOM_LINKED_FORUMS_EXPLAIN'	=> 'Această sală va fi sala implicită pentru forumurile selectate aici, iar subiectele și postările acestor forumuri vor fi afișate în această sală în loc de în sala General.<br />
		Puteți selecta câte doriți folosind tasta <em>Ctrl</em> de pe tastatură.',
	'CHAT_ROOM_LINKED_GROUPS'			=> 'Grupuri conectate la această sală',
	'CHAT_ROOM_LINKED_GROUPS_EXPLAIN'	=> 'Această sală se va deschide în mod implicit pentru grupurile selectate aici.<br />
		Puteți selecta câte doriți folosind tasta <em>Ctrl</em> de pe tastatură.',
	'CHAT_ROOM_ADDED'			=> 'Sala a fost creată cu succes.',
	'CHAT_ROOM_UPDATED'			=> 'Configurația sălii a fost modificată cu succes.',
	'CHAT_ROOM_MSG_LIMIT'		=> 'Limită de mesaje',
	'CHAT_ROOM_MSG_LIMIT_EXPLAIN'	=> 'Setați numărul maxim de mesaje care sunt stocate în această sală. Dacă această limită este depășită, cele mai vechi mesaje sunt șterse periodic.
		<br /><em>Setați 0 pentru a dezactiva această limită.</em>',
	'CHAT_ROOM_TITLE'			=> 'Titlul sălii',
	'CHAT_ROOM_TITLE_EXPLAIN'	=> 'Suportă variabile de limbă.',
	'CHAT_ROOM_USERS'			=> 'Utilizatori permiși',
	'CHAT_ROOM_USERS_EXPLAIN'	=> 'Setați utilizatorii care pot folosi această sală.<br />Setați un nume de utilizator pe fiercare linie.',
	'CHAT_ROW_ALIGN'			=> 'Alinierea mesajelor',
	'CHAT_ROW_ALIGN_EXPLAIN'	=> 'Definește pe ce parte vor fi afișate mesajele în chat.<br /><em>Această setare este afectată dacă limba folosită este <strong>RTL</strong> (de la dreapta la stânga).</em>',
	'CHAT_ROW_BUBBLE'			=> 'Bule',
	'CHAT_ROW_FORMAT'			=> 'Formatul mesajului',
	'CHAT_ROW_FORMAT_EXPLAIN'	=> 'Definiți stilul vizual al mesajelor.',
	'CHAT_ROW_LEFT'				=> 'Arată la stânga',
	'CHAT_ROW_MEOTHER'			=> 'Afișați utilizatorul actual pe o parte și restul pe cealaltă',
	'CHAT_ROW_NORMAL'			=> 'Normal',
	'CHAT_ROW_RIGHT'			=> 'Arată la dreapta',
	'CHAT_ROW_ZIGZAG'			=> 'Arată în ZigZag',
	'CHAT_ROWS'					=> 'Mesaje pe chat',
	'CHAT_ROWS_EXPLAIN'			=> 'Numărul maxim de mesaje care vor fi afișate în containerul de conversație.',
	'CHAT_RULES_ADD'			=> 'Adăugați o regulă',
	'CHAT_RULES_EDIT'			=> 'Editați regula',
	'CHAT_RULES_EXPLAIN'		=> 'Aceste texte vor fi afișate ca <em>reguli</em> în lista de reguli de chat.',
	'CHAT_RULES_ITEM'			=> 'Regulă',
	'CHAT_RULES_ITEM_EXPLAIN'	=> 'Puteți utiliza variabile de limbă, de exemplu <em>{L_CHAT}</em>.<br />
		<em>Codul BBcode sau HTML este permis.<br />
		Sunt permise zâmbetele.</em>',
	'CHAT_RULES'				=> 'Reguli',
	'CHAT_SOUND_ENABLED'		=> 'Sunet activat',
	'CHAT_SHOW_NONE'			=> 'Nu arăta',
	'CHAT_SHOW_POSTS'			=> 'Toate postările noi',
	'CHAT_SHOW_TOPICS'			=> 'Doar subiecte noi',
	'CHAT_TIMEOUT'				=> 'Timp de deconectare',
	'CHAT_TIMEOUT_EXPLAIN'		=> 'Setați timpul (în minute) în care chatul trebuie să considere un utilizator „inactiv” și să deconecteze chatul.<br /><em>Setați la 0 pentru a dezactiva această funcție</em>.',
	'CHAT_TIPS_ADD'				=> 'Adăugați sfat',
	'CHAT_TIPS_EDIT'			=> 'Editați sfatul',
	'CHAT_TIPS_EXPLAIN'			=> 'Aceste texte vor fi afișate ca mici <em>sfaturi</em> peste câmpul de introducere a chatului.',
	'CHAT_TIPS_ITEM'			=> 'Sfat',
	'CHAT_TIPS_ITEM_EXPLAIN'	=> 'Puteți utiliza variabile de limbă, de exemplu <em>{L_CHAT}</em>.<br />
		<em>Codul BBcode sau HTML este permis.<br />
		Sunt permise zâmbetele.</em>',
	'CHAT_TIPS'					=> 'Sfaturi',
	'CHAT_USERS_CONFIG'			=> 'Configurare utilizator',
	
	'EACH_DAY'		=> 'În fiecare zi',
	'EACH_WEEK'		=> 'În fiecare săptămână',
	'EACH_MONTH'	=> 'În fiecare lună',
	'EACH_YEAR'		=> 'În fiecare an',
	
	'ADD_ROOM'					=> 'Adăugați sală',
	'CONTENT'					=> 'Conţinut',
	'CUSTOM_BBCODES'			=> 'Coduri BB personalizate',
	'CUSTOM_ROUTE'				=> 'Rută personalizată',
	'CUSTOM_ROUTES'				=> 'Rute personalizate',
	'DEFAULT_BBCODES'			=> 'Codurile BB implicite',
	'FORUM_ROUTES'				=> 'Rute pe forum',
	'NO_PAGES'					=> 'Nu există pagini disponibile',
	'NO_ROOM'					=> 'Sala selectată nu există',
	'NO_TEXTS'					=> 'Nu există texte disponibile',
	'PAGE_ADD'					=> 'Adăugați o pagină',
	'PAGE_ALIAS'				=> 'Id. pagină',
	'PAGE_URL'					=> 'Adresa URL a paginii',
	'ROOM_TITLE'				=> 'Titlul sălii',
	'SELECT_PAGE'				=> 'Selectați fișierul',
	
	'INVALID_FILE'			=> 'Fișierul nu există sau are un format nevalid.',
	'NO_ALIAS'				=> 'Aliasul paginii este invalid.',
	'PAGE_ALREADY_EXISTS'	=> 'Pagina este deja în uz.',
	
	'REMOVE_ROOM_CONFIRM'	=> 'Sigur doriți să ștergeți această sală și toate mesajele?',
]);
