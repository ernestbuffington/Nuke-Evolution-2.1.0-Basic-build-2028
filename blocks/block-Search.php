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

if(!defined('NUKE_EVO')) exit;


$blockcontent  = "<form name='block-search' onsubmit='this.submit.disabled=true' action='modules.php?name=Search' method='post'>\n";
$blockcontent .= "<p style='text-align: center; font-weight: bold;'><input type='text' name='query' size='15' /></p>\n";
$blockcontent .= "<p style='text-align: center; font-weight: bold;'><input type='submit' value='".$lang_block['BLOCK_SEARCH_SEARCH_DO']."' /></p><br />\n";
$blockcontent .= "</form>\n";

$content = "<div style='width: 100%;'>\n";

if (empty($blockcontent)) {
    $content .= "<p style='text-align:center;'>".$lang_block['BLOCK_NO_CONTENT']."</p>\n";
} else {
    $content .= $blockcontent;
}
$content .= "</div>\n";

?>