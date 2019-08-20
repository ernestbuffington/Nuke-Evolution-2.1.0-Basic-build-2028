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

global $db, $_GETVAR, $module_name, $cache, $evoconfig, $sitekey;
include_once(NUKE_BASE_DIR.'header.php');

$var_ary = array(
    'form_user_email'    => 'ya_user_email', 
    'form_user_email2'   => 'ya_user_email2', 
    'form_username'      => 'ya_username',
    'form_gfx_check'     => $module_name.'gfx_check',
    'form_user_password' => 'user_password',
    'form_user_password2'=> 'user_password2',
    'form_ya_realname'   => 'ya_realname',
    'stop'               => 'stop',
);
while(list($save_field, $form_field) = each($var_ary)) {
    $$save_field = $_GETVAR->get($form_field, '_POST', 'string');
}

ya_securityCheck($form_gfx_check);
$user_viewemail = '0';
if ($evoconfig['doublecheckemail']==1) {
    ya_mailCheck($form_user_email, $form_user_email2);
} else {
    ya_mailCheck($form_user_email, '');
}
if (empty($form_user_password) AND empty($form_user_password2)) {
    $form_user_password  = YA_MakePass();
    $form_user_password2 = $form_user_password;
}
ya_passCheck($form_user_password, $form_user_password2);
ya_userCheck($form_username);
ya_realuserCheck($form_ya_realname);
if (!$stop) {
    $ya_username = $form_username;
    $ya_user_email = strtolower($form_user_email);
    $user_password = $form_user_password;
    $ya_realname = $form_ya_realname;
    $nfield = array();
    $result = $db->sql_query("SELECT * FROM "._CNBYA_FIELD_TABLE." WHERE need = '3' ORDER BY pos");
    while ($sqlvalue = $db->sql_fetchrow($result)) {
      $t = trim($sqlvalue['fid']);
      if (empty($nfield[$t])) {
        OpenTable();
        if (substr($sqlvalue['name'],0,1)=='_') {
            eval( "\$name_exit = ".$sqlvalue['name'].";"); 
        } else {
            $name_exit = $sqlvalue['name'];
        }
        echo "<center><span class='title'><strong>"._ERRORREG."</strong></span><br /><br />";
        echo "<span class='content'>"._YA_FILEDNEED1."$name_exit"._YA_FILEDNEED2."<br /><br />"._GOBACK."</span></center>";
        CloseTable();
        $db->sql_freeresult($result);
        include_once(NUKE_BASE_DIR.'footer.php');
        exit;
      };
    }
    $db->sql_freeresult($result);
    title(_USERREGLOGIN);
    OpenTable();
    echo "<center><strong>"._USERFINALSTEP."</strong><br /><br />$ya_username, "._USERCHECKDATA."</center><br /><br />";
    echo "<table align='center' border='0'>";
    echo "<tr><td><strong>"._USERNAME.":</strong> $ya_username<br /></td></tr>";
    echo "<tr><td><strong>"._EMAIL.":</strong> $ya_user_email</td></tr>";
    echo "</table><br /><br />";
    echo "<center><strong>"._NOTE."</strong> "._YOUWILLRECEIVE."";
    echo "<form action='modules.php?name=$module_name' method='post'>";

    if (count($nfield) > 0) {
        foreach ($nfield as $key => $var) {
            echo "<input type='hidden' name='nfield[$key]' value='$nfield[$key]' />";
        }
    }
    if (isset($gfx_check)) {
        echo "<input type='hidden' name='gfx_check' value=\"$gfx_check\" />";
    }
    echo "<input type='hidden' name='ya_username' value=\"$ya_username\" />";
    echo "<input type='hidden' name='ya_realname' value=\"$ya_realname\" />";
    echo "<input type='hidden' name='ya_user_email' value=\"$ya_user_email\" />";
    echo "<input type='hidden' name='user_password' value=\"$user_password\" />";
    echo "<input type='hidden' name='op' value='new_finish' /><br /><br />";
    echo "<input type='submit' value='"._FINISH."' /> &nbsp;&nbsp;<a href='javascript:history.back(-1);'>"._GOBACK."</a></form></center>";
    CloseTable();
} else {
    OpenTable();
    echo "<center><span class='title'><strong>"._ERRORREG."</strong></span><br /><br />";
    echo "<span class='content'>$stop<br /><br /><a href='javascript:history.back(-1);'>"._GOBACK."</a></span></center>";
    CloseTable();
}
include_once(NUKE_BASE_DIR.'footer.php');

?>