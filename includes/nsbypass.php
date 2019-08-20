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

error_reporting(E_ALL^E_NOTICE);
@ini_set('display_errors', 0);
define('NUKE_BASE_DIR', dirname(dirname(__FILE__)) . '/');
@require_once(NUKE_BASE_DIR.'mainfile.php');
$tid = intval($tid);
$tum = $db->sql_numrows($db->sql_query("SELECT `tid` FROM "._SENTINEL_TRACKED_IPS_TABLE." WHERE `tid`='$tid'"));
if(is_admin() AND $tum > 0) {
  $row = $db->sql_fetchrow($db->sql_query("SELECT * FROM "._SENTINEL_TRACKED_IPS_TABLE." WHERE `tid`='$tid'"));
  $row['refered_from'] = html_entity_decode($row['refered_from'], ENT_QUOTES);
  redirect($row['refered_from']);
} else {
  redirect($nuke_config['nukeurl']);
}

?>