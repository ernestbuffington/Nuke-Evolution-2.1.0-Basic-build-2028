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

//Close the open table
CloseTable();
echo '<br />';
//Start a new table
OpenTable();

/*==============================================================================================
    Function:    get_radios()
    In:          N/A
    Return:      An array of radio buttons
    Notes:       Creates the radio buttons using the donate_radio() function
================================================================================================*/
function get_radios() {
    global $lang_donate, $block_values;
    $out = '';
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'show_amount', 'checked' => ($block_values['show_amount'] == 'yes') ? 'checked="checked"' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'show_amount', 'checked' => ($block_values['show_amount'] == 'yes') ? '' : 'checked="checked"');
    $out['show_amount'] = donate_radio($radio);
    unset($radio);
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'show_anon_amount', 'checked' => ($block_values['show_anon_amount'] == 'yes') ? 'checked="checked"' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'show_anon_amount', 'checked' => ($block_values['show_anon_amount'] == 'yes') ? '' : 'checked="checked"');
    $out['show_ann_amount'] = donate_radio($radio);
    unset($radio);
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'show_dates', 'checked' => ($block_values['show_dates'] == 'yes') ? 'checked="checked"' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'show_dates', 'checked' => ($block_values['show_dates'] == 'yes') ? '' : 'checked="checked"');
    $out['show_dates'] = donate_radio($radio);
    unset($radio);
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'show_goal', 'checked' => ($block_values['show_goal'] == 'yes') ? 'checked="checked"' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'show_goal', 'checked' => ($block_values['show_goal'] == 'yes') ? '' : 'checked="checked"');
    $out['show_goal'] = donate_radio($radio);
    unset($radio);
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'scroll', 'checked' => ($block_values['scroll'] == 'yes') ? 'checked="checked"' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'scroll', 'checked' => ($block_values['scroll'] == 'yes') ? '' : 'checked="checked"');
    $out['scroll'] = donate_radio($radio);
    unset($radio);
    $radio[] = array('value' => 'yes', 'text' => $lang_donate['YES'], 'name' => 'numbers', 'checked' => ($block_values['numbers'] == 'yes') ? 'checked="checked"' : '');
    $radio[] = array('value' => 'no', 'text' => $lang_donate['NO'], 'name' => 'numbers', 'checked' => ($block_values['numbers'] == 'yes') ? '' : 'checked="checked"');
    $out['numbers'] = donate_radio($radio);
    return $out;
}

/*==============================================================================================
    Function:    display_config()
    In:          N/A
    Return:      N/A
    Notes:       Displays the on screen config choices
================================================================================================*/
function display_config() {
    global $lang_donate, $block_values, $admin_file;
    $show = get_radios();
    echo "<form id=\"values\" method=\"post\" action=\"".$admin_file.".php?op=Donations&amp;file=config_block\">\n";
    echo "<table width=\"100%\" border=\"0\" align=\"center\">\n";
    echo "<caption><span style=\"font-weight: bold; font-size: 20px;\">".$lang_donate['CONFIG_BLOCK']."</span></caption>";
    echo "<tr>\n
            <td width=\"50%\" align=\"right\">".$lang_donate['SHOW_AMOUNTS'].$lang_donate['BREAK']."</td>\n
            <td width=\"50%\" align=\"left\">".$show['show_amount']."</td>\n
          </tr>\n
          <tr>\n
            <td align=\"right\">".$lang_donate['SHOW_ANON_AMNTS'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".$show['show_ann_amount']."</td>\n
          </tr>\n
          <tr>\n
            <td align=\"right\">".$lang_donate['SHOW_GOAL'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".$show['show_goal']."</td>\n
          </tr>\n
          <tr>\n
            <td align=\"right\">".$lang_donate['BUTTON_IMAGE'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".donate_text('button_image', $block_values['button_image'])."</td>\n
          </tr>\n
          <tr>\n
            <td align=\"right\">".$lang_donate['NUM_DONATIONS'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".donate_text('num_donations', $block_values['num_donations'], 2, 2)."</td>\n
          </tr>\n
          <tr>\n
            <td align=\"right\">".$lang_donate['SHOW_DATES'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".$show['show_dates']."</td>\n
          </tr>\n
          <tr>\n
            <td align=\"right\">".$lang_donate['SCROLL'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".$show['scroll']."</td>\n
          </tr>\n
          <tr>\n
            <td align=\"right\">".$lang_donate['NUMBERS'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".$show['numbers']."</td>\n
          </tr>\n
           <tr>
            <td align=\"right\">".$lang_donate['MESSAGE'].$lang_donate['BREAK']."</td>\n
            <td align=\"left\">".donate_text_area('message', br2nl($block_values['message']))."</td>\n
         </tr>\n";
    echo '<tr><td colspan="2"><div align="center"><input type="submit" value="'.$lang_donate['DONATION_SUBMIT'].'" /></div></td></tr>';
    echo "</table></form>\n";
}

/*==============================================================================================
    Function:    write_values()
    In:          $values
                    Values to write to the db
    Return:      N/A
    Notes:       Writes values to the DB
================================================================================================*/
function write_values($values) {
    global $db, $cache;
    //Loop through values
    foreach ($values as $key => $value) {
        //Remove crap
        $value = Fix_Quotes($value, true);
        $key = Fix_Quotes($key, true);
        //Setup SQL
        $sql = 'UPDATE `'._DONATIONS_DONATOR_CONFIG_TABLE.'` SET';
        $sql .= ' config_value="'.$value.'" WHERE config_name="block_'.$key.'";';
        //Run SQL
        $db->sql_query($sql);
    }
    //Clear the cache
    $cache->delete('block', 'donations');
    $cache->resync();
}

/*==============================================================================================
    Function:    set_values()
    In:          N/A
    Return:      Array of the values from that were posted
    Notes:       Runs write_values()
================================================================================================*/
function set_values() {
    $values['show_amount'] = $_POST['show_amount'];
    $values['show_anon_amount'] = $_POST['show_anon_amount'];
    $values['show_goal'] = $_POST['show_goal'];
    $values['button_image'] = $_POST['button_image'];
    $values['num_donations'] = $_POST['num_donations'];
    $values['show_dates'] = $_POST['show_dates'];
    $values['message'] = $_POST['message'];
    $values['scroll'] = $_POST['scroll'];
    $values['numbers'] = $_POST['numbers'];
    //Write values to DB
    write_values($values);
    return $values;
}

/*==============================================================================================
    Function:    get_values()
    In:          N/A
    Return:      Array of the values from the DB.
    Notes:       Will toss a DonateError if the values are not found
================================================================================================*/
function get_values() {
    global $db, $lang_donate, $cache;
    static $block;
    if(isset($block) && is_array($block)) { return $block; }
    if (!$block = $cache->load('block', 'donations')) {
        $sql = 'SELECT config_value, config_name from '._DONATIONS_DONATOR_CONFIG_TABLE.' WHERE config_name LIKE "block_%"';
        if(!$result = $db->sql_query($sql)) {
            DonateError($lang_donate['VALUES_NF']);
        }
        while ($row = $db->sql_fetchrow($result)) {
            $block[str_replace('block_', '', $row['config_name'])] = $row['config_value'];
        }
        $cache->save('block', 'donations', $block);
        $db->sql_freeresult($result);
    }
    return $block;
}

/*~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-~-*/

//If new values were posted
global $block_values;
if (!empty($_POST)) {
    $block_values = set_values();
} else {
    $block_values = get_values();
}

display_config();

?>