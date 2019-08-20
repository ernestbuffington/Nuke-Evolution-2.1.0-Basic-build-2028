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

switch($op) {
    case 'DB_Admin':
    case 'DB_Admin_AnalyzeDB':
    case 'DB_Admin_OptimizeDB':
    case 'DB_Admin_OptimizeDBConfirm':
    case 'DB_Admin_OptimizeDBDoit':
    case 'DB_Admin_DeleteTables':
    case 'DB_Admin_DeleteTableConfirm':
    case 'DB_Admin_DeleteTableDoit':
    case 'DB_Admin_RepairTables':
    case 'DB_Admin_BackupTables':
    case 'DB_Admin_BackupTablesConfirm':
    case 'DB_Admin_BackupTablesDoit':
    case 'DB_Admin_BackupTablesShow':
    case 'DB_Admin_BackupTablesDelete':
    case 'DB_Admin_BackupTablesInfo':
    case 'DB_Admin_ShowStatistics':
    case 'DB_Admin_Menu':
        include(NUKE_ADMIN_MODULE_DIR.'dbadmin.php');
        break;
}

?>