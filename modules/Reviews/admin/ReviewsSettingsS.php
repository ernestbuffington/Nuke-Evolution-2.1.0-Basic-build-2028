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

if (!defined('ADMIN_FILE')) {
   exit('THIS FILE WAS NOT CALLED WITHIN ADMINISTRATION');
}

if (!defined('IN_REVIEWS_ADMIN')) {
   exit('THIS FILE WAS NOT CALLED WITHIN REVIEWS ADMINISTRATION');
}


if($num_reviews <= 0){$num_reviews = 1;}
if($scroll_amount <= 0) {$scroll_amount = 1;}
if($block_height <= 10) {$block_height = 10;}
if($block_line_breaks <= 0) {$block_line_breaks = 1;}
$anonwaitdays = ($anonwaitdays * 86400);
$outsidewaitdays = ($outsidewaitdays * 86400);
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$reviews_perpage' WHERE `config_name` = 'reviews_perpage'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$newreviews' WHERE `config_name` = 'newreviews'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$topreviews' WHERE `config_name` = 'topreviews'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$reviewsresults' WHERE `config_name` = 'reviewsresults'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$blockunregmodify' WHERE `config_name` = 'blockunregmodify'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$anonaddreviewlock' WHERE `config_name` = 'anonaddreviewlock'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$securitycheck' WHERE `config_name` = 'securitycheck'");

$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$show_header' WHERE `config_name` = 'show_header'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$show_topbox' WHERE `config_name` = 'show_topbox'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$topbox_height' WHERE `config_name` = 'topbox_height'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$maxshow' WHERE `config_name` = 'maxshow'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$topbox_scroll' WHERE `config_name` = 'topbox_scroll'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$topbox_scroll_amount' WHERE `config_name` = 'topbox_scroll_amount'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$topbox_scroll_direction' WHERE `config_name` = 'topbox_scroll_direction'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$tablecolor1' WHERE `config_name` = 'tablecolor1'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$tablecolor2' WHERE `config_name` = 'tablecolor2'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$image_width' WHERE `config_name` = 'image_width'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$image_height' WHERE `config_name` = 'image_height'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$thumbnail_use' WHERE `config_name` = 'thumbnail_use'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$thumbnail_url' WHERE `config_name` = 'thumbnail_url'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_rows' WHERE `config_name` = 'block_rows'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_height' WHERE `config_name` = 'block_height'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_line_breaks' WHERE `config_name` = 'block_line_breaks'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_image_width' WHERE `config_name` = 'block_image_width'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_image_height' WHERE `config_name` = 'block_image_height'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_scroll' WHERE `config_name` = 'block_scroll'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_scroll_amount' WHERE `config_name` = 'block_scroll_amount'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$block_scroll_direction' WHERE `config_name` = 'block_scroll_direction'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$allow_guest_vote' WHERE `config_name` = 'allow_guest_vote'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$anonwaitdays' WHERE `config_name` = 'anonwaitdays'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$outsidewaitdays' WHERE `config_name` = 'outsidewaitdays'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$useoutsidevoting' WHERE `config_name` = 'useoutsidevoting'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$outsideweight' WHERE `config_name` = 'outsideweight'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$anonweight' WHERE `config_name` = 'anonweight'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$detailvotedecimal' WHERE `config_name` = 'detailvotedecimal'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$mainvotedecimal' WHERE `config_name` = 'mainvotedecimal'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$topreviewspercentrigger' WHERE `config_name` = 'topreviewspercentrigger'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$mostpopreviewspercentrigger' WHERE `config_name` = 'mostpopreviewspercentrigger'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$mostpopreviews' WHERE `config_name` = 'mostpopreviews'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$popular' WHERE `config_name` = 'popular'");
$db->sql_query("UPDATE `" . _REVIEWS_CONFIG_TABLE . "` SET `config_value`='$reviewvotemin' WHERE `config_name` = 'reviewvotemin'");
$cache->delete('Reviews', 'config');
redirect($admin_file.".php?op=ReviewsSettings&amp;info=saved");

?>