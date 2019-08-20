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

global $dbtype, $db, $dbhost, $dbuname, $dbpass, $dbname, $persistency;

if(!isset($dbtype)) $dbtype = 'mysql';
$dbtype = strtolower($dbtype);

if(isset($_REQUEST['dbtype'])) {
    exit('Illegal Operation');
}

if(@file_exists(NUKE_DB_DIR.$dbtype.'.php')) {
    require_once(NUKE_DB_DIR.$dbtype.'.php');
} else {
    exit('Invalid Database Type Specified!');
}


switch($dbtype)
{
  case 'mysql':
    include(NUKE_DB_DIR.'mysql.php');
    break;
  case 'mysqli':
    include(NUKE_DB_DIR.'mysqli.php');
    break;
}

if(!isset($db)) {
    // Make the database connection.
    $db = new sql_db($dbhost, $dbuname, $dbpass, $dbname, false);
}
unset($dbhost);
unset($dbuser);
unset($dbpass);
unset($dbtype);
unset($dbuname);
unset($persistency);
if(!$db->db_connect_id) {
    exit("<br /><br /><center><img src='images/logo.png' /><br /><br /><strong>There seems to be a problem with the MySQL server, sorry for the inconvenience.<br /><br />We should be back shortly.</strong></center>");
}

?>