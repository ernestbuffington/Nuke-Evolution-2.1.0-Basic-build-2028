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

if (!defined('MODULE_FILE') || !defined('NUKESENTINEL_PUBLIC') ) {
   die ('You can\'t access this file directly...');
}

global $_GETVAR, $ab_config, $bgcolor1, $bgcolor2, $module_name;

$pagetitle = _AB_BLOCKEDREFERERS;
include_once(NUKE_BASE_DIR.'header.php');
title(_AB_BLOCKEDREFERERS, $module_name, 'sentinel-logo.png');
stmain_menu(_AB_BLOCKEDREFERERS);
echo "<br />\n";
OpenTable();

$perpage    = $_GETVAR->get('perpage', '_REQUEST', 'int', $ab_config['block_perpage']);
$min        = $_GETVAR->get('min', '_REQUEST', 'int', 0);
$max        = $_GETVAR->get('max', '_REQUEST', 'int', $min + $perpage);
$direction  = $_GETVAR->get('direction', '_REQUEST', 'string', 'asc');
$column     = '';

$blocker_row = abget_blocked('referer');
$blockedreferers = explode("\r\n",$blocker_row['list']);
if (count($blockedreferers) > 0 ) {
    echo '<table summary="" align="center" border="0" cellpadding="2" cellspacing="2" bgcolor="'.$bgcolor2.'" width="100%">'."\n";
    echo '<tr bgcolor="'.$bgcolor2.'">'."\n";
    echo '<td width="100%"><strong>'._AB_BLOCKEDREFERERS.'</strong></td>'."\n";
    echo '</tr>'."\n";
    for ($i = $min; $i < $max; $i++) {
        $j = $i + 1;
        echo '<tr onmouseover="this.style.backgroundColor=\''.$bgcolor2.'\'" onmouseout="this.style.backgroundColor=\''.$bgcolor1.'\'" bgcolor="'.$bgcolor1.'">'."\n";
        echo '<td align="vertical">'.$blocker_row[$i].'</a></td>'."\n";
        echo '</tr>'."\n";
    }
    echo '</table>'."\n";
    stpagenumspub($op, count($blockedreferers), $perpage, $max, $column, $direction);
} else {
    echo '<center><strong>'._AB_NOREFERERS.'</strong></center>'."\n";
}
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>