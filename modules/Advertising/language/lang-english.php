<?php
/*=======================================================================
 Nuke-Evolution     :   Enhanced Web Portal System
 ========================================================================

 Nuke-Evo Base          :       Basic
 Nuke-Evo Version       :       2.1.0
 Nuke-Evo Build         :       2027
 Nuke-Evo Patch         :       0
 Nuke-Evo Filename      :       #$#FILENAME
 Nuke-Evo Date          :       04-Sep-2010  15:45 (GMT+1)

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

if(!defined('NUKE_EVO')) { die('It\'s not allowed to access this file directly'); }

global $module_name;
$lang_new[$module_name]['_ACTIVE'] = 'Active';
$lang_new[$module_name]['_ACTIVEADSFOR'] = 'Current Active Banners for';
$lang_new[$module_name]['_ACTIVEBANNERS2'] = 'Active Banners';
$lang_new[$module_name]['_ACTIVEBANNERS'] = 'Current Active Banners';
$lang_new[$module_name]['_ADCLASS'] = 'Ad Class';
$lang_new[$module_name]['_ADCODE'] = 'Javascript/HTML Code';
$lang_new[$module_name]['_ADDADVERTISINGPLAN'] = 'Add Advertising Plan';
$lang_new[$module_name]['_ADDBANNER'] = 'Add Banner';
$lang_new[$module_name]['_ADDCLIENT2'] = 'Add Client';
$lang_new[$module_name]['_ADDCLIENT'] = 'Add a New Client';
$lang_new[$module_name]['_ADDEDDATE'] = 'Added Date';
$lang_new[$module_name]['_ADDIMPRESSIONS'] = 'Add More Impressions';
$lang_new[$module_name]['_ADDNEWBANNER'] = 'Add a New Banner';
$lang_new[$module_name]['_ADDNEWPLAN'] = 'Add New Plan';
$lang_new[$module_name]['_ADDNEWPOSITION'] = 'Add Advertising Positions';
$lang_new[$module_name]['_ADDPLANERROR'] = '<strong>Error:</strong> One or more fields are empty. Please go back and correct the problem.';
$lang_new[$module_name]['_ADDPOSITION'] = 'Add Position';
$lang_new[$module_name]['_ADFLASH'] = 'Flash';
$lang_new[$module_name]['_ADSGFX_FAILURE'] = 'Please enter the correct GFX code';
$lang_new[$module_name]['_ADIMAGE'] = 'Image';
$lang_new[$module_name]['_ADINFOINCOMPLETE'] = '<strong>Error:</strong> Banner Information is Incomplete!';
$lang_new[$module_name]['_ADISNTYOURS'] = '<strong>Error:</strong> The banner you\'re trying to view isn\'t assigned to your account.';
$lang_new[$module_name]['_ADPOSITIONS'] = 'Ads Positions';
$lang_new[$module_name]['_ADSMENU'] = 'Advertising Menu';
$lang_new[$module_name]['_ADSMODULEINACTIVE'] = '[ Warning: Advertising Module is inactive! ]';
$lang_new[$module_name]['_ADSNOCLIENT'] = '<strong>Error:</strong> There isn\'t any Advertising Client.<br />Please create a new client before add banners.';
$lang_new[$module_name]['_ADSNOCONTENT'] = 'Sorry at this time we don\'t have any advertising plans available.';
$lang_new[$module_name]['_ADSYSTEM'] = 'Advertising System';
$lang_new[$module_name]['_ADVERTISING'] = 'Advertising';
$lang_new[$module_name]['_ADVERTISINGCLIENTS'] = 'Advertising Clients';
$lang_new[$module_name]['_ADVERTISINGPLANEDIT'] = 'Advertising Plan Edit';
$lang_new[$module_name]['_ADVERTISINGPLANS'] = 'Advertising Plans';
$lang_new[$module_name]['_ASSIGNEDADS'] = 'Assigned Ads';
$lang_new[$module_name]['_BACK'] = 'Back';
$lang_new[$module_name]['_BANNERID'] = 'Banner ID';
$lang_new[$module_name]['_BANNERIMAGE'] = 'Banner Image';
$lang_new[$module_name]['_BANNERNAME'] = 'Banner Name';
$lang_new[$module_name]['_BANNERS'] = 'Banners';
$lang_new[$module_name]['_BANNERSADMIN'] = 'Banners Admin Panel';
$lang_new[$module_name]['_BANNERS_ADMIN_HEADER'] = 'Banners :: Modules Admin Panel';
$lang_new[$module_name]['_BANNERS_RETURNMAIN'] = 'Return to Main Administration';
$lang_new[$module_name]['_BANNERURL'] = 'Banner URL';
$lang_new[$module_name]['_BUYLINKS'] = 'Buy Links';
$lang_new[$module_name]['_CANTDELETEPOSITION'] = '<strong>Error:</strong> You can\'t delete ALL positions. At least one should be in the database.<br />Edit the position if you need to change it or add a new one.';
$lang_new[$module_name]['_CLASS'] = 'Class';
$lang_new[$module_name]['_CLASSNOTE'] = 'If your Ad Class is Javascript/HTML Code the next 4 fields will be ignored and will count only the Code area below. If your Ad Class is Flash you must put the .SWF complete URL in the next field and set width and height of the Flash movie (Click URL and Alternate Text fields will be ignored).';
$lang_new[$module_name]['_CLICKS'] = 'Clicks';
$lang_new[$module_name]['_CLICKSPERCENT'] = '% Clicks';
$lang_new[$module_name]['_CLICKURL'] = 'Click URL';
$lang_new[$module_name]['_CLIENT'] = 'Client';
$lang_new[$module_name]['_CLIENTLOGIN'] = 'Client Login';
$lang_new[$module_name]['_CLIENTNAME'] = 'Client Name';
$lang_new[$module_name]['_CLIENTPASSWD'] = 'Client Password';
$lang_new[$module_name]['_CLIENTWITHOUTBANNERS'] = 'This client doesn\'t have any banner running now.';
$lang_new[$module_name]['_CONTACTEMAIL'] = 'Contact Email';
$lang_new[$module_name]['_CONTACTNAME'] = 'Contact Name';
$lang_new[$module_name]['_COUNTRYNAME'] = 'Your Country Name';
$lang_new[$module_name]['_CURREGUSERS'] = 'Current registered users:';
$lang_new[$module_name]['_CURRENTPOSITIONS'] = 'Current Ads Positions';
$lang_new[$module_name]['_CURRENTSTATUS'] = 'Current Status:';
$lang_new[$module_name]['_DAYS'] = 'Days';
$lang_new[$module_name]['_DEACTIVATE'] = 'Deactivate';
$lang_new[$module_name]['_DELCLIENTHASBANNERS'] = 'This client has the following ACTIVE BANNERS running now';
$lang_new[$module_name]['_DELETE'] = 'Delete';
$lang_new[$module_name]['_DELETEALLADS'] = 'Delete All Banners';
$lang_new[$module_name]['_DELETEBANNER'] = 'Delete Banner';
$lang_new[$module_name]['_DELETECLIENT'] = 'Delete Advertising Client';
$lang_new[$module_name]['_DELETEPLAN'] = 'Delete Ads Plan';
$lang_new[$module_name]['_DELETEPOSITION'] = 'Delete Ads Position';
$lang_new[$module_name]['_DELIVERY'] = 'Delivery Mode';
$lang_new[$module_name]['_DELIVERYQUANTITY'] = 'Delivery Quantity';
$lang_new[$module_name]['_DELIVERYTYPE'] = 'Delivery Mode';
$lang_new[$module_name]['_DESCRIPTION'] = 'Description';
$lang_new[$module_name]['_EDIT'] = 'Edit';
$lang_new[$module_name]['_EDITBANNER'] = 'Edit Banner';
$lang_new[$module_name]['_EDITCLIENT'] = 'Edit Advertising Client';
$lang_new[$module_name]['_EDITPOSITION'] = 'Edit Advertising Position';
$lang_new[$module_name]['_EDITTERMS'] = 'Edit Terms of Service';
$lang_new[$module_name]['_EMAILSTATS'] = 'Email Stats';
$lang_new[$module_name]['_ENTER'] = 'Enter';
$lang_new[$module_name]['_EXTRAINFO'] = 'Extra Information';
$lang_new[$module_name]['_FLASHFILEURL'] = 'Flash File URL';
$lang_new[$module_name]['_FLASHMOVIE'] = 'Flash Movie';
$lang_new[$module_name]['_FLASHSIZE'] = 'Flash Movie Size';
$lang_new[$module_name]['_FOLLOWINGSTATS'] = 'Following are the complete stats for your advertising investment at';
$lang_new[$module_name]['_FUNCTIONNOTALLOWED'] = '<strong>Error:</strong> The selected function isn\'t allowed.';
$lang_new[$module_name]['_FUNCTIONS'] = 'Functions';
$lang_new[$module_name]['_GENERALSTATS'] = 'General Statistics';
$lang_new[$module_name]['_GENERATEDON'] = 'Report Generated on';
$lang_new[$module_name]['_GOBACK'] = '[ <a href="javascript:history.go(-1)">Go Back</a> ]';
$lang_new[$module_name]['_GOOGLERANK'] = 'This site Google\'s Page Rank:';
$lang_new[$module_name]['_HEIGHT'] = 'Height';
$lang_new[$module_name]['_HEREARENUMBERS'] = 'Here are some numbers about our site that you might find interesting before proceeding to purchase your advertising:';
$lang_new[$module_name]['_IMAGESIZE'] = 'Image Size';
$lang_new[$module_name]['_IMAGESWFURL'] = 'Image URL';
$lang_new[$module_name]['_IMPLEFT'] = 'Imp. Left';
$lang_new[$module_name]['_IMPMADE'] = 'Imp. Made';
$lang_new[$module_name]['_IMPPURCHASED'] = 'Impressions Purchased';
$lang_new[$module_name]['_IMPRELEFT'] = 'Impressions Left';
$lang_new[$module_name]['_IMPREMADE'] = 'Impressions Made';
$lang_new[$module_name]['_IMPRESSIONS'] = 'Impressions';
$lang_new[$module_name]['_IMPTOTAL'] = 'Imp. Total';
$lang_new[$module_name]['_INACTIVE'] = 'Inactive';
$lang_new[$module_name]['_INACTIVEADS'] = 'Current Inactive Banners for';
$lang_new[$module_name]['_INACTIVEBANNERS'] = 'Current Inactive Banners';
$lang_new[$module_name]['_INITIALSTATUS'] = 'Initial Status';
$lang_new[$module_name]['_INPIXELS'] = '(size in pixels)';
$lang_new[$module_name]['_LISTPLANS'] = 'The following list shows our advertising plans, prices and a direct link to buy your ads:';
$lang_new[$module_name]['_LOGIN'] = 'Customer Login name';
$lang_new[$module_name]['_LOGININCORRECT'] = 'Login Incorrect!!!';
$lang_new[$module_name]['_MADE'] = 'Made';
$lang_new[$module_name]['_MAINPAGE'] = 'Main Page';
$lang_new[$module_name]['_MONTHS'] = 'Months';
$lang_new[$module_name]['_MOVEADS'] = 'Move Ads To';
$lang_new[$module_name]['_MOVEDADSSTATUS'] = 'New status of moved Ads';
$lang_new[$module_name]['_MYADS'] = 'My Ads';
$lang_new[$module_name]['_NA'] = 'N/A';
$lang_new[$module_name]['_NAME'] = 'Name';
$lang_new[$module_name]['_NO'] = 'No';
$lang_new[$module_name]['_NOCHANGES'] = 'No Changes';
$lang_new[$module_name]['_NOCONTENT'] = 'There is no content here at this time...';
$lang_new[$module_name]['_NONE'] = 'None';
$lang_new[$module_name]['_PASSWORD'] = 'Password';
$lang_new[$module_name]['_PDAYS'] = 'Days';
$lang_new[$module_name]['_PLANBUYLINKS'] = 'Buy Links';
$lang_new[$module_name]['_PLANDESCRIPTION'] = 'Plan Description';
$lang_new[$module_name]['_PIDERROR'] = 'The plan couldn\'t be found';
$lang_new[$module_name]['_PLANNAME'] = 'Plan Name';
$lang_new[$module_name]['_PLANSNOTE'] = 'Plans are for reference only and will be published at the Advertising module so your clients know what you have to offer, conditions, prices and a link to pay for your service.';
$lang_new[$module_name]['_PLANSPRICES'] = 'Plans and Prices';
$lang_new[$module_name]['_PMONTHS'] = 'Months';
$lang_new[$module_name]['_POSEXAMPLE'] = 'You can have a look at the file <em>/blocks/block-Advertising.php</em> and file <em>/header.php</em> to have a clear example on how to implement this in your site.';
$lang_new[$module_name]['_POSINFOINCOMPLETE'] = '<strong>Error:</strong> Advertising position name field can\'t be empty.';
$lang_new[$module_name]['_POSITION'] = 'Position';
$lang_new[$module_name]['_POSITIONHASADS'] = 'The ads position you selected to delete has banners assigned to it.<br />Please select a new position to move all ads.';
$lang_new[$module_name]['_POSITIONNAME'] = 'Position Name';
$lang_new[$module_name]['_POSITIONNOTE'] = 'To use the position you must include the code: <em> ads(position);</em> in your theme file, where \"position\" is the number of the position you want to use in that ad space.';
$lang_new[$module_name]['_POSITIONNUMBER'] = 'Position Number';
$lang_new[$module_name]['_PRICE'] = 'Price';
$lang_new[$module_name]['_PURCHASED'] = 'Purchased';
$lang_new[$module_name]['_PURCHASEDIMPRESSIONS'] = 'Purchased Impressions';
$lang_new[$module_name]['_PYEARS'] = 'Years';
$lang_new[$module_name]['_QUANTITY'] = 'Quantity';
$lang_new[$module_name]['_RECEIVEDCLICKS'] = 'Clicks Received';
$lang_new[$module_name]['_SAVECHANGES'] = 'Save';
$lang_new[$module_name]['_SAVEPOSITION'] = 'Save Changes';
$lang_new[$module_name]['_SITENAMEADS'] = '(To embed your site name into the text use [sitename] and to use your country name type [country] in the text and it will be replaced from Advertising module)';
$lang_new[$module_name]['_SITESTATS'] = 'Site Stats';
$lang_new[$module_name]['_STATSNOTSEND'] = 'Statistics for the selected Banner can\'t be sent because<br />there isn\'t an email associated with it.<br />Please contact the Administrator';
$lang_new[$module_name]['_STATSSENT'] = 'Statistics for your Ad Banner has been sent by email at:';
$lang_new[$module_name]['_STATUS'] = 'Status';
$lang_new[$module_name]['_SURETODELBANNER'] = 'Are you sure you want to delete this Banner?';
$lang_new[$module_name]['_SURETODELCLIENT'] = 'You are about to delete the client and all its Banners!!!';
$lang_new[$module_name]['_SURETODELPLAN'] = 'Your are about to delete an Advertising Plan. Are you sure you want to proceed?';
$lang_new[$module_name]['_SURETODELPOSITION'] = 'You are about to delete an Ads Position. Are you sure you want to proceed?';
$lang_new[$module_name]['_TERMS'] = 'Terms';
$lang_new[$module_name]['_TERMSCONDITIONS'] = 'Terms and Conditions';
$lang_new[$module_name]['_TERMSNOTE'] = 'Carefully review the default Terms. Change whatever you want to change according with your advertising politics. This will be published in the Advertising module.';
$lang_new[$module_name]['_TERMSOFSERVICEBODY'] = 'Terms of Service Body';
$lang_new[$module_name]['_TOTALVIEWS'] = 'Total pages views until now:';
$lang_new[$module_name]['_TYPE'] = 'Type';
$lang_new[$module_name]['_UNLIMITED'] = 'unlimited';
$lang_new[$module_name]['_VIEWBANNER'] = 'View Banner';
$lang_new[$module_name]['_VIEWSDAY'] = 'Average pages views per day:';
$lang_new[$module_name]['_VIEWSHOUR'] = 'Average pages views per hour:';
$lang_new[$module_name]['_VIEWSMONTH'] = 'Average pages views per month:';
$lang_new[$module_name]['_VIEWSYEAR'] = 'Average pages views per year:';
$lang_new[$module_name]['_WELCOMEADS'] = '<strong>Welcome to our Advertising Section!</strong><br /><br />If you want your banner ad here in our website, you may want to know some details because you should know what kind of target and ads plans we can offer.<br /><br />If you are already our advertising customer, please login <strong><a href=\"modules.php?name=Advertising&amp;op=client\">here</a></strong>.<br />';
$lang_new[$module_name]['_WIDTH'] = 'Width';
$lang_new[$module_name]['_XFORUNLIMITED'] = 'write X for unlimited';
$lang_new[$module_name]['_YEARS'] = 'Years';
$lang_new[$module_name]['_YES'] = 'Yes';
$lang_new[$module_name]['_YOURBANNER'] = 'Your Banner';
$lang_new[$module_name]['_YOURSTATS'] = 'Your Banner Statistics at';
?>