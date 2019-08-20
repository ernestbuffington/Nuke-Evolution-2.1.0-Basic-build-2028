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

global $admin_file, $_GETVAR;

if (is_admin()) {

    $xop        = $_GETVAR->get('xop', '_REQUEST', 'string');
    $min        = $_GETVAR->get('min', '_REQUEST', 'int', 0);
    $sip        = $_GETVAR->get('sip', '_REQUEST', 'string');
    $column     = $_GETVAR->get('column', '_REQUEST', 'string', 'username');
    $direction  = $_GETVAR->get('direction', '_REQUEST', 'string', 'asc');
    $showcountry= $_GETVAR->get('showcountry', '_REQUEST', 'int');
    $ip_lo      = $_GETVAR->get('ip_lo', '_REQUEST', 'int');
    $ip_hi      = $_GETVAR->get('ip_hi', '_REQUEST', 'int');
    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    OpenMenu(_AB_IP2CDELETE);
    mastermenu();
    CarryMenu();
    ip2cmenu();
    CloseMenu();
    CloseTable();
    echo '<br />'."\n";
    OpenTable();
    echo '<form action="'.$admin_file.'.php" method="post">'."\n";
    echo '<input type="hidden" name="op" value="ABIP2CountryDeleteSave" />'."\n";
    echo '<input type="hidden" name="ip_lo" value="'.$ip_lo.'" />'."\n";
    echo '<input type="hidden" name="ip_hi" value="'.$ip_hi.'" />'."\n";
    echo '<input type="hidden" name="xop" value="'.$xop.'" />'."\n";
    echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
    echo '<input type="hidden" name="sip" value="'.$sip.'" />'."\n";
    echo '<input type="hidden" name="column" value="'.$column.'" />'."\n";
    echo '<input type="hidden" name="direction" value="'.$direction.'" />'."\n";
    echo '<input type="hidden" name="showcountry" value="'.$showcountry.'" />'."\n";
    echo '<table summary="" align="center" border="0" cellpadding="2" cellspacing="2">'."\n";
    echo '<tr><td align="center">'._AB_IP2CDELETES.' '.long2ip($ip_lo).' to '.long2ip($ip_hi).'?</td></tr>'."\n";
    echo '<tr><td align="center"><input type="submit" value="'._AB_IP2CDELETE.'" /></td></tr>'."\n";
    echo '<tr><td align="center">'._GOBACK.'</td></tr>'."\n";
    echo '</table>'."\n";
    echo '</form>'."\n";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>