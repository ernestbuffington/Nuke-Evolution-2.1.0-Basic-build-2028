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

global $admin_file, $db, $_GETVAR, $bgcolor2;

if (is_admin()) {

    $min        = $_GETVAR->get('min', '_REQUEST', 'int', 0);
    $max        = $_GETVAR->get('max', '_REQUEST', 'int', 0);
    $column     = $_GETVAR->get('column', '_REQUEST', 'string');
    $direction  = $_GETVAR->get('direction', '_REQUEST', 'string');
    $tid        = $_GETVAR->get('tid', '_REQUEST', 'int');
    $deleterow = $db->sql_ufetchrow("SELECT `refered_from` FROM `"._SENTINEL_TRACKED_IPS_TABLE."` WHERE `tid`='$tid' LIMIT 0,1");
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    OpenMenu(_AB_ADDREFERER);
    mastermenu();
    CarryMenu();
    trackedmenu();
    CloseMenu();
    CloseTable();
    echo '<br />'."\n";
    OpenTable();
    echo '<form action="'.$admin_file.'.php" method="post">'."\n";
    echo '<input type="hidden" name="op" value="ABTrackedRefersListAddSave" />'."\n";
    echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
    echo '<input type="hidden" name="column" value="'.$column.'" />'."\n";
    echo '<input type="hidden" name="direction" value="'.$direction.'" />'."\n";
    echo '<table summary="" align="center" border="0" cellpadding="2" cellspacing="2">'."\n";
    echo '<tr><td bgcolor="'.$bgcolor2.'" valign="top"><strong>'._AB_REFERER.'</strong>:</td>'."\n";
    echo '<td><input type="text" name="referer" size="50" maxlength="256" value="'.strtolower($deleterow['refered_from']).'" /><br />'._AB_MAXLENGTH256.'</td></tr>'."\n";
    echo '<tr><td align="center" colspan="2"><input type="submit" value="'._AB_SAVECHANGES.'" /></td></tr>'."\n";
    echo '</table>'."\n";
    echo '</form>'."\n";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>