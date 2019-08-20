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

define('ROOT', dirname(dirname(__FILE__)) . '/');
$module_name = basename(dirname(__FILE__));
$module_name = str_replace("_", " ", $module_name);
@require_once(ROOT.'mainfile.php');

global $smilie_lang, $_GETVAR;

$form = $_GETVAR->get('form', '_GET', 'string', 'post');
$field = $_GETVAR->get('field', '_GET', 'string', 'my_field');

include_once(NUKE_INCLUDE_DIR.'page_header_review.php');
OpenTable();
$content = smilies_table('', $field, $form);
echo $content;
CloseTable();
include_once(NUKE_INCLUDE_DIR.'page_tail_review.php');
?>