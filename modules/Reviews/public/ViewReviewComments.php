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

if (!defined('MODULE_FILE') || !defined('REVIEW_INDEX_FILE') ) {
   die('You can\'t access this file directly...');
}

global $bgcolor2;

$rid = intval(trim($rid));
$commentsresult = $db->sql_query("SELECT `ratingdbid`, `ratinguser`, `rating`, `ratingcomments`, `ratingtimestamp` FROM `"._REVIEWS_VOTEDATA_TABLE."` WHERE `ratingrid` = '".$rid."' AND `ratingcomments` != '' ORDER BY `ratingtimestamp` DESC");
$totalcommentsDB = $db->sql_numrows($commentsresult);
include_once(NUKE_BASE_DIR.'header.php');
ReviewHeading();
if ($totalcommentsDB > 0) {
    OpenTable();
    reviewshowsingle($rid);
    CloseTable();
}
OpenTable();
if (isset($ttitle) && !empty($ttitle)) {
    $ttitle = stripslashes($ttitle);
    $transfertitle = preg_replace ('#_#', ' ', $ttitle);
} else {
    $transfertitle = '';
}
$displaytitle = $transfertitle;
echo "<center><span class='option'><strong>".$lang_new[$module_name]['COMMENTS'].":&nbsp;".$totalcommentsDB."</strong></span></center>\n";
if ($totalcommentsDB > 0) {
    echo reviewinfomenu($rid, $ttitle);
}
if ($totalcommentsDB > 0) {
    echo "<br /><br /><table align='center' border='0' cellspacing='0' cellpadding='2' width='450px'>\n";
    $x=0;
    while($row = $db->sql_fetchrow($commentsresult)) {
        $ratinguser     = $row['ratinguser'];
        $rating         = intval($row['rating']);
        $ratingcomments = evo_img_tag_to_resize(set_smilies(decode_bbcode(stripslashes($row['ratingcomments']), 1, true)));
        $ratingtimestamp = $row['ratingtimestamp'];
        $formatted_date = formatTimeStamp($ratingtimestamp);
        $rldbid         = intval($row['ratingdbid']);
        /* Individual user information */
        $result2 = $db->sql_query("SELECT `rating` FROM `"._REVIEWS_VOTEDATA_TABLE."` WHERE `ratinguser` = '".$ratinguser."'");
        $usertotalcomments = $db->sql_numrows($result2);
        $useravgrating = 0;
        while($row2 = $db->sql_fetchrow($result2)) {
            $rating2 = intval($row2['rating']);
        }
        $db->sql_freeresult($result2);
        $useravgrating = $useravgrating + $rating2;
        $useravgrating = $useravgrating / $usertotalcomments;
        $useravgrating = number_format($useravgrating, 1);
        echo "<tr>\n";
        echo "<tr>\n";
        echo "<td bgcolor='".$bgcolor2."'><span class='content'><strong>".$lang_new[$module_name]['USER'].":&nbsp;</strong><a href='modules.php?name=Your_Account&amp;op=userinfo&amp;username=".$ratinguser."'>".$ratinguser."</a></span></td>\n";
        echo "<td bgcolor='".$bgcolor2."'><span class='content'><strong>".$lang_new[$module_name]['RATING'].":&nbsp;</strong>".$rating."</span></td>\n";
        echo "<td bgcolor='".$bgcolor2."' align='right'><span class='content'>".$formatted_date."</span></td>\n";
        echo "</tr>\n<tr>\n";
        echo "<td valign='top'><span class='tiny'>".$lang_new[$module_name]['RATED_USER_AVERAGE'].":&nbsp;".$useravgrating."</span></td>\n";
        echo "<td valign='top' colspan='2'><span class='tiny'>".$lang_new[$module_name]['RATED_NUMBERS'].":&nbsp;".$usertotalcomments."</span></td>\n";
        echo "</tr>\n<tr>\n";
        echo "<td colspan='3'><span class='content'>";
        echo "&nbsp;".$ratingcomments."</span></td>\n";
        echo "</tr>\n";
        if (is_mod_admin($module_name)) {
            echo "<tr><td valign='top' colspan='2'><a href='".$admin_file.".php?op=ReviewsModReview&amp;rid=".$rid."'><img src='".evo_image('comment_edit.png', $module_name)."' border='0' alt='' title='".$lang_new[$module_name]['EDIT']."' /></a></td></tr>\n";
        }
        $x++;
    }
    $db->sql_freeresult($commentsresult);
    echo "</table>\n<br /><br />";
} else {
    echo "<br /><br /><center><span class='option'><strong>".$lang_new[$module_name]['ERROR_NO_RID']."</strong></span><br /><br />"._GOBACK."</center><br />\n";
}
CloseTable();
include_once(NUKE_BASE_DIR.'footer.php');

?>