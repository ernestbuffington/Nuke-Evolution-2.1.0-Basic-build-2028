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

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

if (!defined('CNBYA')) {
    die('CNBYA protection');
}

global $db, $usrinfo;
// Last 10 Web Links approved
$result10 = $db->sql_query("SELECT lid, title, cid FROM "._WEBLINKS_LINKS_TABLE." where submitter='".$usrinfo['username']."' order by date DESC limit 0,10");
if (($db->sql_numrows($result10) > 0)) {
    echo "<br />";
    OpenTable();
    $usrcolor = UsernameColor($usrinfo['username']);
    echo "<strong>".$usrcolor."'s "._LAST10WEBLINK.":</strong><br />";
    while(list($lid, $title, $cid) = $db->sql_fetchrow($result10)) {
        echo "<a href=\"modules.php?name=Web_Links&amp;file=index&amp;op=viewlink&amp;cid=$cid\">$title</a><br />";
    }
    $db->sql_freeresult($result10);
    CloseTable();
}

?>