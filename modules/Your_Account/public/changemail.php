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

if (!defined('MODULE_FILE')) {
   die ("You can't access this file directly...");
}

function changemail() {
    global $db, $module_name, $sitekey, $user, $stop, $userinfo, $_GETVAR;

    $get_id     = $_GETVAR->get('id', '_GET', 'int');
    $check_num  = $_GETVAR->get('check_num', '_GET', 'string');
    $newmail    = $_GETVAR->get('newmail', '_GET', 'email');

    include_once(NUKE_BASE_DIR.'header.php');
    title(_CHANGEMAILTITLE);
    OpenTable();
    ya_mailCheck($newmail);
    list($get_username, $tuemail) = $db -> sql_fetchrow($db -> sql_query("SELECT username, user_email FROM "._USERS_TABLE." WHERE user_id = '$get_id'"));
    $datekey = date("F Y");
    $check_num2 = substr(md5(hexdec($datekey) * hexdec($userinfo['user_password']) * hexdec($sitekey) * hexdec($newmail) * hexdec($tuemail)), 2, 10);
    if ((is_user()) ) {
        if ($stop == '') {
            if ( (strtolower($userinfo['username']) == strtolower($get_username)) AND ($check_num2 == $check_num) ) {
                $result = $db->sql_uquery("UPDATE "._USERS_TABLE." SET user_email='$newmail' WHERE user_id='$get_id'");
                if ($result) {echo _CHANGEMAILOK;} else {echo _CHANGEMAILNOT;}
            } else {
                echo _CHANGEMAILNOT;
            }
        } else {
            echo $stop;
        }
    } else echo _CHANGEMAILNOTUSER;

    CloseTable();
    include_once(NUKE_BASE_DIR.'footer.php');

}

?>