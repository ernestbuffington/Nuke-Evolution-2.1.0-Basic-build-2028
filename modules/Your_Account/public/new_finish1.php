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

if (!defined('CNBYA')) {
    die('CNBYA protection');
}

global $db, $evoconfig, $_GETVAR, $module_name, $cache, $board_config;
include_once(NUKE_BASE_DIR.'header.php');
$var_ary = array(
    'form_user_email'    => 'ya_user_email', 
    'form_username'      => 'ya_username',
    'form_gfx_check'     => 'gfx_check',
    'form_user_password' => 'user_password',
    'form_ya_realname'   => 'ya_realname',
    'stop'               => 'stop',
);
while(list($save_field, $form_field) = each($var_ary)) {
    $$save_field = $_GETVAR->get($form_field, '_POST', 'string');
}

ya_mailCheck($form_user_email, $form_user_email);
ya_passCheck($form_user_password, $form_user_password);
ya_userCheck($form_username);
ya_realuserCheck($form_ya_realname);

$nfield = $_GETVAR->get('nfield', '_POST', 'array');
$user_regdate = date("M d, Y");
if (empty($stop)) {
    mt_srand ((double)microtime()*1000000);
    $maxran        = 1000000;
    $check_num     = mt_rand(0, $maxran);
    $check_num     = md5($check_num);
    $time          = time();
    if (empty($stop)) {
        $ya_username   = $form_username;
        $ya_user_email = $form_user_email;
        $new_password  = EvoCrypt($form_user_password);
        $ya_realname   = $form_ya_realname;
        list($newest_uid) = $db->sql_fetchrow($db->sql_query("SELECT max(user_id) AS newest_uid FROM "._USERS_TEMP_TABLE));
        if ($newest_uid == '-1') { $new_uid = 1; } else { $new_uid = $newest_uid+1; }
        $result = $db->sql_query("INSERT INTO "._USERS_TEMP_TABLE." (user_id, username, realname, user_email, user_password, user_regdate, check_num, time) VALUES ($new_uid, '$ya_username', '$ya_realname', '$ya_user_email', '$new_password', '$user_regdate', '$check_num', '$time')");
        $cache->delete('numwaituser', 'submissions');
        if ((count($nfield) > 0) AND ($result)) {
            foreach ($nfield as $key => $var) {
            $db->sql_uquery("INSERT INTO "._CNBYA_VALUE_TEMP_TABLE." (uid, fid, value) VALUES ('$new_uid', '$key','$nfield[$key]')");
            }
        }
        if(!$result) {
            OpenTable();
            echo _ADDERROR."<br />";
            CloseTable();
        } else {
            if ($evoconfig['servermail']) {
                $message  = _WELCOMETO." ".EVO_SERVER_SITENAME." (".EVO_SERVER_URL.")!<br /><br />";
                $message .= _YOUUSEDEMAIL."<br />$ya_user_email<br />"._TOAPPLY." ".EVO_SERVER_SITENAME." (".EVO_SERVER_URL.").<br /><br />";
                $message .= _WAITAPPROVAL."<br /><br />";
                $message .= _FOLLOWINGMEM."<br />"._UNICKNAME." $ya_username<br />"._UREALNAME." $ya_realname<br />"._UPASSWORD." $user_password <br /><br />";
                $message .= (!empty($board_config['board_email_sig'])) ? str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']) : '';
                $subject  = _APPLICATIONSUB;
                $to       = $ya_user_email.','.$ya_username;
                $return   = evo_mail($to, $subject, $message);
            }
            title(_USERAPPLOGIN);
            OpenTable();
            echo "<center><strong>"._ACCOUNTRESERVED."</strong><br /><br />";
            echo ""._YOUAREPENDING."";
            echo "<br /><br />";
            echo ""._THANKSAPPL." ".EVO_SERVER_SITENAME."!</center>";
            CloseTable();
            if ($evoconfig['sendaddmail'] AND $evoconfig['servermail'] AND !empty($evoconfig['adminmail'])) {
                $from_ip  = identify::get_ip();
                $subject  = EVO_SERVER_SITENAME." - "._MEMAPL;
                $message  = "$ya_username "._YA_APLTO." ".EVO_SERVER_SITENAME." "._YA_FROM." $from_ip.<br />";
                $message .= "-----------------------------------------------------------<br />";
                $message .= _YA_NOREPLY . '<br /><br />';
                $message .= (!empty($board_config['board_email_sig'])) ? str_replace('<br />', "\n", "-- \n" . $board_config['board_email_sig']) : '';
                $to       = $evoconfig['adminmail'];
                $return   = evo_mail($to, $subject, $message);
            }
        }
    } else {
        echo $stop;
    }
} else {
    echo $stop;
}
include_once(NUKE_BASE_DIR.'footer.php');

?>