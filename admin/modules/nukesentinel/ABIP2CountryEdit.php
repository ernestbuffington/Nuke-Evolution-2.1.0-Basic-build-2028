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

    $xop        = $_GETVAR->get('xop', '_REQUEST', 'string');
    $sip        = $_GETVAR->get('sip', '_REQUEST', 'string');
    $min        = $_GETVAR->get('min', '_REQUEST', 'int', 0);
    $max        = $_GETVAR->get('max', '_REQUEST', 'int', 0);
    $column     = $_GETVAR->get('column', '_REQUEST', 'string');
    $direction  = $_GETVAR->get('direction', '_REQUEST', 'string');
    $showcountry= $_GETVAR->get('showcountry', '_REQUEST', 'int');
    $oldcountry = $_GETVAR->get('oldcountry', '_REQUEST', 'string');

    include_once(NUKE_BASE_DIR.'header.php');
    OpenTable();
    OpenMenu(_AB_EDITIP2COUNTRY);
    mastermenu();
    CarryMenu();
    ip2cmenu();
    CloseMenu();
    CloseTable();
    echo '<br />'."\n";
    OpenTable();
    $getIPs = $db->sql_ufetchrow("SELECT * FROM `"._SENTINEL_IP2COUNTRY_TABLE."` WHERE `ip_lo`='$ip_lo' AND `ip_hi`='$ip_hi' LIMIT 0,1");
    $ip_lo = explode(".", long2ip($getIPs['ip_lo']));
    $ip_hi = explode(".", long2ip($getIPs['ip_hi']));
    echo '<form action="'.$admin_file.'.php" method="post">'."\n";
    echo '<input type="hidden" name="op" value="ABIP2CountryEditSave" />'."\n";
    echo '<input type="hidden" name="xop" value="'.$xop.'" />'."\n";
    echo '<input type="hidden" name="sip" value="'.$sip.'" />'."\n";
    echo '<input type="hidden" name="min" value="'.$min.'" />'."\n";
    echo '<input type="hidden" name="column" value="'.$column.'" />'."\n";
    echo '<input type="hidden" name="direction" value="'.$direction.'" />'."\n";
    echo '<input type="hidden" name="showcountry" value="'.$showcountry.'" />'."\n";
    echo '<input type="hidden" name="old_ip_lo" value="'.$getIPs['ip_lo'].'" />'."\n";
    echo '<input type="hidden" name="old_ip_hi" value="'.$getIPs['ip_hi'].'" />'."\n";
    echo '<input type="hidden" name="old_c2c" value="'.$getIPs['c2c'].'" />'."\n";
    echo '<input type="hidden" name="old_country" value="'.$old_country.'" />'."\n";
    echo '<table summary="" align="center" border="0" cellpadding="2" cellspacing="2">'."\n";
    echo '<tr><td align="center" colspan="2">'._AB_EDITIP2COUNTRYS.'</td></tr>'."\n";
    echo '<tr><td bgcolor="'.$bgcolor2.'"><strong>'._AB_IPLO.':</strong></td>'."\n";
    echo '<td><input type="text" name="xip_lo[0]" size="4" maxlength="3" value="'.$ip_lo[0].'" style="text-align: center;" />'."\n";
    echo '. <input type="text" name="xip_lo[1]" size="4" maxlength="3" value="'.$ip_lo[1].'" style="text-align: center;" />'."\n";
    echo '. <input type="text" name="xip_lo[2]" size="4" maxlength="3" value="'.$ip_lo[2].'" style="text-align: center;" />'."\n";
    echo '. <input type="text" name="xip_lo[3]" size="4" maxlength="3" value="'.$ip_lo[3].'" style="text-align: center;" /></td></tr>'."\n";
    echo '<tr><td bgcolor="'.$bgcolor2.'"><strong>'._AB_IPHI.':</strong></td>'."\n";
    echo '<td><input type="text" name="xip_hi[0]" size="4" maxlength="3" value="'.$ip_hi[0].'" style="text-align: center;" />'."\n";
    echo '. <input type="text" name="xip_hi[1]" size="4" maxlength="3" value="'.$ip_hi[1].'" style="text-align: center;" />'."\n";
    echo '. <input type="text" name="xip_hi[2]" size="4" maxlength="3" value="'.$ip_hi[2].'" style="text-align: center;" />'."\n";
    echo '. <input type="text" name="xip_hi[3]" size="4" maxlength="3" value="'.$ip_hi[3].'" style="text-align: center;" /></td></tr>'."\n";
    echo '<tr><td bgcolor="'.$bgcolor2.'"><strong>'._AB_COUNTRY.':</strong></td>'."\n";
    echo '<td><select name="xc2c">'."\n";
    $result = $db->sql_query("SELECT * FROM `"._SENTINEL_COUNTRIES_TABLE."` ORDER BY `c2c`");
    while($countryrow = $db->sql_fetchrow($result)) {
        echo '<option value="'.$countryrow['c2c'].'"';
        if ($countryrow['c2c'] == $getIPs['c2c']) { 
            echo ' selected="selected"'; $old_country = $countryrow['country']; 
        }
        echo '>'.strtoupper($countryrow['c2c']).' - '.$countryrow['country'].'</option>'."\n";
    }
    $db->sql_freeresult($result);
    echo '</select></td></tr>'."\n";
    echo '<tr><td align="center" colspan="2"><input type="submit" value="'._AB_SAVECHANGES.'" /></td></tr>'."\n";
    echo '</table></form>'."\n";
    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>