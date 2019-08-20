<?php
/*=======================================================================
 Nuke-Evolution   :   Enhanced Web Portal System
 ========================================================================

 Nuke-Evo Base          :   Basic
 Nuke-Evo Version       :   2.1.0
 Nuke-Evo Build         :   2027
 Nuke-Evo Patch         :   0
 Nuke-Evo Filename      :   #$#FILENAME
 Nuke-Evo Date          :   04-Sep-2010  15:45 (GMT+1)

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

if (!defined('ADMIN_FILE') && !defined('IN_SETTINGS')) {
   exit('THIS FILE WAS NOT CALLED WITHIN ADMINISTRATION');
}

$lang_admin[$settingspoint]['MENU_TITLE'] = 'Fusszeilen';
$lang_admin[$settingspoint]['SETTING_HEADER'] = 'Fusszeilen Einstellungen';
$lang_admin[$settingspoint]['SETTING_FIELDSET'] = 'Fusszeilen Optionen';

$lang_admin[$settingspoint]['FIELD_FOOTER1'] = '1. Fusszeile Deiner Webseite';
$lang_admin[$settingspoint]['FIELD_FOOTER2'] = '2. Fusszeile Deiner Webseite';
$lang_admin[$settingspoint]['FIELD_FOOTER3'] = '3. Fusszeile Deiner Webseite';
$lang_admin[$settingspoint]['FIELD_COPYRIGHT'] = 'Copyright in der Fusszeile Deiner Webseite.<br />W&auml;hrend der Installation hast Du zugestimmt, dass dieses Copyright nicht ver&auml;ndert wird.';


$lang_admin[$settingspoint]['FIELD_NONE'] = 'Keine Eingabefelder f&uuml;r '.$settingspoint.' verf&uuml;gbar';
$lang_admin[$settingspoint]['BUTTON_SAVE'] = 'Speichern';
$lang_admin[$settingspoint]['BUTTON_BACK'] = 'Zur&uuml;ck';

?>