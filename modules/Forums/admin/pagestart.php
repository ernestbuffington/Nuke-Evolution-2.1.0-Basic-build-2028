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

if (!defined('IN_PHPBB') ) {
    die('Hacking attempt');
}

define('FORUM_ADMIN', TRUE);
define('TO_NUKE_BASE_DIR', dirname(dirname(dirname(dirname(__FILE__)))) . '/');
require_once(TO_NUKE_BASE_DIR .'mainfile.php');
global $_GETVAR, $admin, $userinfo, $currentlang, $ThemeSel, $no_page_header, $lang;
include_once(NUKE_FORUMS_DIR.'common.php');

/*=====
  For more information on how to use this please see the help file in the help/features folder
  =====*/

include_once(NUKE_BASE_DIR.'ips.php');

if(isset($ips) && is_array($ips)) {
    $ip_check = implode('|^',$ips);
    if (!preg_match("/^".$ip_check."/",$_GETVAR->get('REMOTE_ADDR', 'server', 'string', NULL)))
    {
        unset($aid);
        unset($admin);
        $name = $userinfo['username'];
        log_write('admin', $name.'&nbsp;'._ERROR_LOG_INVALID_IP_FORUM, _ERROR_LOG_SECURITY_BREACH);
        die('Invalid IP<br />Access denied');
    }
    define('ADMIN_IP_LOCK',TRUE);
}


//
// Start session management
//
$userdata = session_pagestart($user_ip, PAGE_ADMIN_INDEX);
init_userprefs($userdata);
//
// End session management
//

?>