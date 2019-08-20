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

global $admin_file, $db, $_GETVAR, $cache;

if (is_admin()) {

    $xblocker_row = $_GETVAR->get('xblocker_row', '_POST', 'array', array());
    $xop          = $_GETVAR->get('xop', '_REQUEST', 'string');
    $xblocker_row['list'] = str_replace($xblocker_row['listdelete'], "", $xblocker_row['list']);
    $xblocker_row['list'] = str_replace("\r\n\r\n", "\r\n", $xblocker_row['list']);
    $block_list = explode("\r\n", $xblocker_row['list']);
    rsort($block_list);
    $endlist = count($block_list)-1;
    if (empty($block_list[$endlist])) {
        array_pop($block_list);
    }
    sort($block_list);
    $xblocker_row['list'] = implode("\r\n", $block_list);
    $db->sql_uquery("UPDATE `"._SENTINEL_BLOCKERS_TABLE."` SET `list`='".$xblocker_row['list']."' WHERE `block_name`='".$xblocker_row['block_name']."'");
    $cache->delete('', 'sentinel');
    $cache->resync();
    redirect($admin_file.'.php?op='.$xop);
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>