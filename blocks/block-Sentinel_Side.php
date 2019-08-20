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

if(!defined('NUKE_EVO')) exit;

global $db, $evoconfig;
$module_name = 'Nuke_Sentinel';

function block_SentinelSide_cache($block_cachetime) {
    global $db, $cache;
    if ((($blockcache = $cache->load('sentinelcenter', 'blocks')) === false) || empty($blockcache) || intval($blockcache[0]['stat_created']) < (time() - intval($block_cachetime))) {
        $result = $db->sql_ufetchrow('SELECT COUNT(`ip_addr`) AS no FROM `'._SENTINEL_BLOCKED_IPS_TABLE.'`');
        $blockcache[1]['ip_addr'] = $result['no'];
        $db->sql_freeresult($result);
        $blockcache[0]['stat_created'] = time();
        $cache->save('sentinelcenter', 'blocks', $blockcache);
    }
    return $blockcache;
}

$blocksession  = block_SentinelSide_cache($evoconfig['block_cachetime']);
$block_image   = evo_image('Sentinel_Small.png', 'nukesentinel');

$blockcontent  = '';
$hack_count    = $blocksession[1]['ip_addr'];
$blockcontent .= "<div style='text-align:center; font-size: x-small;'>".$lang_block['BLOCK_SENTINEL_CAUGHT']."<br /><strong>".intval($hack_count)."&nbsp;".$lang_block['BLOCK_SENTINEL_SHAME']."</strong><br />".$lang_block['BLOCK_SENTINEL_SHAME1']."</div>\n";

$content = "<div style='text-align: center; width: 100%;'>\n";
if (empty($blockcontent)) {
    $content .= "<div style='text-align:center;'>".$lang_block['BLOCK_NO_CONTENT']."</div>\n";
} else {
    $content .= "<div style='text-align:center; font-size: small;'><a href='http://www.nukescripts.net'><img src='".$block_image."' alt='".$lang_block['BLOCK_SENTINEL_SENTINEL_TITLE_IMG']."' title='".$lang_block['BLOCK_SENTINEL_SENTINEL_TITLE_IMG']."' /></a></div><br />\n";
    $content .= $blockcontent;
}
$content .= "</div>\n";

?>