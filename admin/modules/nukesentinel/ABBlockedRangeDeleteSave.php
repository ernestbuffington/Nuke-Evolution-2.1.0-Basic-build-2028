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

global $admin_file, $_GETVAR, $ab_config;

if (is_admin()) {

    $ip_lo      = $_GETVAR->get('ip_lo', '_POST', 'string');
    $ip_hi      = $_GETVAR->get('ip_hi', '_POST', 'string');
    $sip        = $_GETVAR->get('sip', '_POST', 'string');
    $xip        = $_GETVAR->get('xip', '_POST', 'array', array());
    $xop        = $_GETVAR->get('xop', '_POST', 'string');
    $min        = $_GETVAR->get('min', '_POST', 'int');
    $column     = $_GETVAR->get('column', '_POST', 'string');
    $direction  = $_GETVAR->get('direction', '_POST', 'string');
    $old_masscidr = ABGetCIDRs($ip_lo, $ip_hi);
    if($ab_config['htaccess_path'] != "") {
        $old_masscidr = explode("||", $old_masscidr);
        for($i=0; $i < sizeof($old_masscidr); $i++) {
            if($old_masscidr[$i]!="") {
              $old_masscidr[$i] = "deny from ".$old_masscidr[$i]."\n";
            }
        }
        $ipfile = file($ab_config['htaccess_path']);
        $ipfile = implode("", $ipfile);
        $ipfile = str_replace($old_masscidr, "", $ipfile);
        $ipfile = $ipfile;
        $doit   = @fopen($ab_config['htaccess_path'], "w");
        @fwrite($doit, $ipfile);
        @fclose($doit);
    }
    $db->sql_uquery("DELETE FROM `"._SENTINEL_BLOCKED_RANGES_TABLE."` WHERE `ip_lo`='$ip_lo' AND `ip_hi`='$ip_hi'");
    $db->sql_uquery("OPTIMIZE TABLE `"._SENTINEL_BLOCKED_RANGES_TABLE."`");
    redirect($admin_file.'.php?op='.$xop.'&amp;min='.$min.'&amp;column='.$column.'&amp;direction='.$direction.'&amp;sip='.$sip);
} else {
    redirect($admin_file.'.php?op=ABMain');
}

?>