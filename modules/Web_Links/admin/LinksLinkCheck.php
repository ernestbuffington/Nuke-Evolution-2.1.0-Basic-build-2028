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

if (!defined('IN_WEBLINKS_ADMIN')) {
   exit('THIS FILE WAS NOT CALLED WITHIN WEBLINKS ADMINISTRATION');
}

linksHeader();
OpenTable();
echo "<center><span class=\"option\"><strong>" . $lang_new[$module_name]['ADMIN_LINK_CHECK'] . "</strong></span></center><br /><br />\n"
      ."<table width=\"100%\" align=\"center\" border=\"1\"><tr><td colspan=\"2\" align=\"center\">"
      ."<strong><a href=\"".$admin_file.".php?op=LinksValidate&amp;cid=0&amp;sid=0\">" . $lang_new[$module_name]['ADMIN_LINK_CHECK_ALL'] . " </a></strong>"
      ." (". $lang_new[$module_name]['TOTAL_LINKS'] .": $totallinks)</td></tr>"
      ."<tr><td valign=\"top\"><center><strong>" . $lang_new[$module_name]['ADMIN_CHECK_CATEGORY'] . "</strong><br />(" . $lang_new[$module_name]['ADMIN_CHECK_CATEGORY_INCLSUB']. ")</td><td><span class=\"tiny\">";
$result1 = $db->sql_query("SELECT `cid`, `title`, `parentid` FROM `"._WEBLINKS_CATEGORIES_TABLE."` ORDER BY `title`");
while($row = $db->sql_fetchrow($result1)) {
      $cid = intval($row['cid']);
      $title = stripslashes($row['title']);
      $transfertitle = str_replace (" ", "_", $title);
      $parentid2 = intval($row['parentid']);
      if ($parentid2!=0) {
          $title=str_replace ("_", " ", linksgetparent($parentid2,$title));
      }
      $numcheck = $db->sql_numrows($db->sql_query("SELECT `lid` FROM `". _WEBLINKS_LINKS_TABLE ."` WHERE `cid` = $cid"));
      echo "<a href=\"".$admin_file.".php?op=LinksValidate&amp;cid=$cid&amp;sid=0&amp;ttitle=$transfertitle\">$title ($numcheck)</a><br />";
}
$db->sql_freeresult($result1);
echo "</span></center></td></tr></table>";
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>