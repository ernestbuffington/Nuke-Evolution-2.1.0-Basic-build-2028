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

if (!defined('ADMIN_FILE')) {
   exit('THIS FILE WAS NOT CALLED WITHIN ADMINISTRATION');
}

if (!defined('IN_DOWNLOADS_ADMIN')) {
   exit('THIS FILE WAS NOT CALLED WITHIN DOWNLOADS ADMINISTRATION');
}

include_once(NUKE_BASE_DIR.'header.php');
$userid = intval($userid);
if($ok == 1) {
    $db->sql_query("DELETE FROM `"._DOWNLOADS_USERS_TABLE."` WHERE `user_id`='$userid'");
    redirect($admin_file.".php?op=DownloadsUserList");
} else {
    DownloadsHeader();
    OpenTable();
    echo "<center><strong>". $lang_new[$module_name]['DELETE'] ." ".$lang_new[$module_name]['ADMIN_USERS']."</strong><br /><br />";
    echo "<strong>" . $lang_new[$module_name]['WARN_USER_DELETE'] . "</strong><br /><br />";
    echo "</center>";
}
echo "<center>[ <a href=\"".$admin_file.".php?op=DownloadsUserDel&amp;userid=$userid&amp;ok=1\">" .$lang_new[$module_name]['SUBMIT_DOIT'] . "</a> ] " . $lang_new[$module_name]['SUBMIT_GOBACK'] . " </center><br /><br />";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>