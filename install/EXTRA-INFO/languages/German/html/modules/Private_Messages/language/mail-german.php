<?php
/*=======================================================================
 Nuke-Evolution     :   Enhanced Web Portal System
 ========================================================================

 Nuke-Evo Base          :       Basic
 Nuke-Evo Version       :       2.1.0
 Nuke-Evo Build         :       2027
 Nuke-Evo Patch         :       0
 Nuke-Evo Filename      :       #$#FILENAME
 Nuke-Evo Date          :       04-Sep-2010  15:45 (GMT+1)

 Copyright (c) 2010 by The EVO CMS Development Team
 ========================================================================

 LICENSE INFORMATIONS COULD BE FOUND IN COPYRIGHTS.PHP WHICH MUST BE
 DISTRIBUTED WITHIN THIS MODULEPACKAGE OR WITHIN FILES WHICH ARE
 USED FROM WITHIN THIS PACKAGE.
 IT IS "NOT" ALLOWED TO DISTRIBUTE THIS MODULE WITHOUT THE ORIGINAL
 COPYRIGHT-FILE.
 ALL INFORMATIONS ABOVE THIS SECTION ARE "NOT" ALLOWED TO BE REMOVED.
 THEY HAVE TO STAY AS THEY ARE.
 IT IS ALLOWED AND SHOULD BE DONE TO ADD ADDITIONAL INFORMATIONS IN
 THE SECTIONS BELOW IF YOU CHANGE OR MODIFY THIS FILE.

/*****[CHANGES]**********************************************************
-=[Base]=-
-=[Mod]=-
 ************************************************************************/

if(!defined('NUKE_EVO')) { die('It\'s not allowed to access this file directly'); }

$lang_new[$module_name]['HELLO'] = 'Hallo ';
$lang_new[$module_name]['PRIVMSG_CLICK']   = 'Klicke hier um die Nachricht zu lesen: <a href="' . EVO_SERVER_URL .'/modules.php?name=Private_Messages&amp;folder=inbox">-Zur Nachricht-</a>';
$lang_new[$module_name]['PRIVMSG_INFO']    = 'Das Mitglied '. $userdata['username'].' auf '.$board_config['sitename'].' hat Dir eine neue private Nachricht an Dein Konto gesendet. Du wolltest &uuml;ber neue private Nachrichten informiert werden. Der Inhalt der Nachricht ist:';
$lang_new[$module_name]['PRIVMSG_INFO2']   = 'Du kannst die Benachrichtigung &uuml;ber neue private Nachrichten jederzeit in Deinem Benutzerprofil deaktivieren.';
$lang_new[$module_name]['PRIVMSG_SUBJECT'] = 'Eine neue private Nachricht f&uuml;r Dich auf '.$board_config['sitename'].' ist eingetroffen';

?>