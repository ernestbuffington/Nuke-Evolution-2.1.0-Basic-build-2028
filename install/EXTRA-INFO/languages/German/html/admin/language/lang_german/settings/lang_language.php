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

$lang_admin[$settingspoint]['MENU_TITLE'] = 'Sprache';
$lang_admin[$settingspoint]['SETTING_HEADER'] = 'Spracheinstellungen';
$lang_admin[$settingspoint]['SETTING_FIELDSET'] = 'Spracheinstellung Optionen';

$lang_admin[$settingspoint]['FIELD_SITE_LANGUAGE'] = 'Standardsprache f&uuml;r Deine Webseite';
$lang_admin[$settingspoint]['FIELD_SITE_LANGUAGE_HELP'] = 'W&auml;hle hier die Standardsprache Deiner Webseite. Es muss mehr als eine Sprache installiert sein, um hier eine Auswahl treffen zu k&ouml;nnen.';
$lang_admin[$settingspoint]['FIELD_SITE_MULTILINGUAL'] = 'Mehrsprachigkeit f&uuml;r Deine Webseite aktivieren';
$lang_admin[$settingspoint]['FIELD_SITE_MULTILINGUAL_HELP'] = 'Hier kann die Mehrsprachigkeit der Webseite aktiviert und deaktiviert werden. Damit die Mehrsprachigkeit funktioniert muss mehr als eine Sprache installiert sein.';
$lang_admin[$settingspoint]['FIELD_SITE_USEFLAGS'] = 'Flaggen statt Auswahlmen&uuml; anzeigen';
$lang_admin[$settingspoint]['FIELD_SITE_USEFLAGS_HELP'] = 'Diesen Schalter auf JA stellen, um Landesflaggen statt Text zur Auswahl der Sprache anzuzeigen.';

$lang_admin[$settingspoint]['FIELD_NONE'] = 'Keine Eingabefelder f&uuml;r '.$settingspoint.' verf&uuml;gbar';
$lang_admin[$settingspoint]['BUTTON_SAVE'] = 'Speichern';
$lang_admin[$settingspoint]['BUTTON_BACK'] = 'Zur&uuml;ck';

?>