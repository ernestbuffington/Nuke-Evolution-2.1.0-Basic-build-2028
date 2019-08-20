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

$lang_admin[$settingspoint]['MENU_TITLE'] = 'Legal Documents';
$lang_admin[$settingspoint]['SETTING_HEADER'] = 'Legal Documents Settings';
$lang_admin[$settingspoint]['SETTING_FIELDSET'] = 'Legal Documents Options';

$lang_admin[$settingspoint]['FIELD_SHOW_ABOUTUS'] = 'Show the About Us page link?';
$lang_admin[$settingspoint]['FIELD_SHOW_DISCLAIMER'] = 'Show the Disclaimer Statement link?';
$lang_admin[$settingspoint]['FIELD_SHOW_PRIVACY'] = 'Show the Privacy Statement link?';
$lang_admin[$settingspoint]['FIELD_SHOW_TERMS'] = 'Show the Terms of Service link?';
$lang_admin[$settingspoint]['FIELD_FEEDBACK_MODUL'] = 'Use the Contact Module or Feedback Module for questions pertaining';

$lang_admin[$settingspoint]['OPTION_FEEDBACK_NONE'] = 'None';
$lang_admin[$settingspoint]['OPTION_FEEDBACK_FEEDBACK'] = 'Feedback Module';
$lang_admin[$settingspoint]['OPTION_FEEDBACK_CONTACT'] = 'Contact Module';

$lang_admin[$settingspoint]['FIELD_NONE'] = 'No Inputfield for '.$settingspoint.' available';
$lang_admin[$settingspoint]['BUTTON_SAVE'] = 'Save';
$lang_admin[$settingspoint]['BUTTON_BACK'] = 'Return';

?>