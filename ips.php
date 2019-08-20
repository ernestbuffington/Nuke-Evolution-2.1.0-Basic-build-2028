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

if(!defined('NUKE_EVO')) { die('It\'s not allowed to access this file directly'); }


global $ips, $users_ips;


// IPs that are used to allowed access to admin.php and forum admin; all others will be denied
// Seperate all IPs by a comma.
// ex: $ips = array('127.0.0.1', '192.168.1.1');

/*=====
  For more information on how to use this please see the help file in the help/features folder
  =====*/

//$ips = array('xxx.xxx.xxx.xxx');


// IPs that are allowed to login to the specified user accounts
// Seperate all IPs by a comma inside the second ''.
// ex: $users_ips = array('Technocrat', '127.0.0.1,192.168.1.1');

/*=====
  For more information on how to use this please see the help file in the help/features folder
  =====*/

//$users_ips = array('name', 'xxx.xxx.xxx.xxx');

?>