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

if (!defined('NUKESENTINEL_ADMIN')) {
   die ('You can\'t access this file directly...');
}

global $admin_file, $db, $_GETVAR;

if (is_admin()) {

    $min        = $_GETVAR->get('min', '_REQUEST', 'int', 0);
    $max        = $_GETVAR->get('max', '_REQUEST', 'int', 0);
    $column     = $_GETVAR->get('column', '_REQUEST', 'string');
    $direction  = $_GETVAR->get('direction', '_REQUEST', 'string', 'asc');
    $user_id    = $_GETVAR->get('user_id', '_REQUEST', 'int');
    $ip_addr    = $_GETVAR->get('ip_addr', '_REQUEST', 'string');
    $tid        = $_GETVAR->get('tid', '_REQUEST', 'int');
    $db->sql_uquery("DELETE FROM `"._SENTINEL_TRACKED_IPS_TABLE."` WHERE `tid`='$tid'");
    $db->sql_uquery("OPTIMIZE TABLE `"._SENTINEL_TRACKED_IPS_TABLE."`");
    redirect($admin_file.'.php?op=ABTrackedPages&amp;user_id='.$user_id.'&amp;ip_addr='.$ip_addr.'&amp;column='.$column.'&amp;direction='.$direction.'&amp;min='.$min);
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>