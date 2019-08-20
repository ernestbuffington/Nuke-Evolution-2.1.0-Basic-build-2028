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

if(!defined('NUKE_EVO')) {
    exit('THIS FILE WAS NOT CALLED WITHIN NUKE-EVO');
}

global $admin_file, $db, $cache;

$module_name = basename(dirname(dirname(__FILE__)));

if(is_active($module_name)) {
    if (($active = $cache->load('numbanact', 'submissions')) === false) {
        $result = $db->sql_query("SELECT COUNT(*) FROM "._BANNER_TABLE." WHERE active='1'");
        list($active) = $db->sql_fetchrow($result, SQL_NUM);
        $db->sql_freeresult($result);
        $cache->save('numbanact', 'submissions', $active);
    }
    if (($inactive = $cache->load('numbandea', 'submissions')) === false) {
        $result = $db->sql_query("SELECT COUNT(*) FROM "._BANNER_TABLE." WHERE active='0'");
        list($inactive) = $db->sql_fetchrow($result, SQL_NUM);
        $db->sql_freeresult($result);
        $cache->save('numbandea', 'submissions', $inactive);
    }
    $content .= "<span style='text-align: center; font-weight: bold; font-style: italic;'>"._ABAN.":</span><br />\n";
    $content .= "<img src='". evo_image('arrow.png', 'evo')  ."' alt='' width='5' height='10' />&nbsp;<a href='".$admin_file.".php?op=BannersAdmin'>"._ABANNERS."</a>:&nbsp;<span style='font-weight: bold;'>$active</span><br />\n";
    $content .= "<img src='". evo_image('arrow.png', 'evo')  ."' alt='' width='5' height='10' />&nbsp;<a href='".$admin_file.".php?op=BannersAdmin'>"._DBANNERS."</a>:&nbsp;<span style='font-weight: bold;'>$inactive</span><br />\n";
}

?>