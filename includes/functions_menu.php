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

if (!defined('NUKE_EVO')) {
    die("You can't access this file directly...");
}


# function which returns a complete menu sorted by categories from modules-categories
function KERNEL_MENU_CATSORT() {
    global $evoconfig;
    
    if (!isset($evoconfig['modules']) && !is_array($evoconfig['modules']) && !isset($evoconfig['modulcat']) && !is_array($evoconfig['modulcat'])) {
        return false;
    } else {
        $menu_cats=array();
        // Build the categories
        foreach($evoconfig['modulcat'] as $catskey => $cat) {
            $menu_cats[$catskey]['cattitle'] = $cat['name'];
        }
        foreach($evoconfig['modules'] as $key => $modules) {
            $cid = $modules['cat_id'];
            $mid = $modules['mid'];
            if (isset($menu_cats[$cid]) && ($modules['inmenu'] == true)) {
                $menu_cats[$cid]['content'][$mid] = $modules['custom_title'];
            }
        }
    }
    return $menu_cats;
}

?>