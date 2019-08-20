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

    $xop        = $_GETVAR->get('xop', '_REQUEST', 'string');
    $min        = $_GETVAR->get('min', '_REQUEST', 'int', 0);
    $sid        = $_GETVAR->get('sid', '_REQUEST', 'int');
    $direction  = $_GETVAR->get('direction', '_REQUEST', 'string');

    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    OpenMenu(_AB_STRINGDELETE);
    mastermenu();
    CarryMenu();
    stringmenu();
    CloseMenu();
    CloseTable();
    echo '<br />'."\n";
    OpenTable();
    $getIPs = $db->sql_ufetchrow("SELECT * FROM `"._SENTINEL_STRINGS_TABLE."` WHERE `sid`='".$sid."' LIMIT 0,1");
    echo '<form action="'.$admin_file.'.php" method="post">'."\n";
    echo '<input type="hidden" name="op" value="ABStringDeleteSave" />'."\n";
    echo '<input type="hidden" name="xop" value="'.$xop.'" />'."\n";
    echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
    echo '<input type="hidden" name="sid" value="'.$sid.'" />'."\n";
    echo '<input type="hidden" name="direction" value="'.$direction.'" />'."\n";
    echo '<table summary="" align="center" border="0" cellpadding="2" cellspacing="2">'."\n";
    echo '<tr><td align="center" class="content">'._AB_STRINGDELETES.' <strong>'.$getIPs['string'].'</strong>?</td></tr>'."\n";
    echo '<tr><td align="center"><input type="submit" value="'._AB_STRINGDELETE.'" /></td></tr>'."\n";
    echo '<tr><td align="center">'._GOBACK.'</td></tr>'."\n";
    echo '</table>'."\n";
    echo '</form>'."\n";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>