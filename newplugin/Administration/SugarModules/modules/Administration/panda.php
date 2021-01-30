<?php
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2018 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */


global $current_user, $sugar_config;
global $mod_strings;
global $app_list_strings;
global $app_strings;
global $theme;

if (!is_admin($current_user)) {
    sugar_die("Unauthorized access to administration.");
}

require_once('modules/Configurator/Configurator.php');


echo getClassicModuleTitle(
    "Administration",
    array(
        "<a href='index.php?module=Administration&action=index'>" . translate('LBL_MODULE_NAME', 'Administration') . "</a>",
        $mod_strings['LBL_AUTHENTICATION_SETTINGS'],
    ),
    false
);

$cfg = new Configurator();
$sugar_smarty = new Sugar_Smarty();
$errors = array();

if (isset($_REQUEST['do']) && $_REQUEST['do'] == 'save') {
  $panda_client_id=$_REQUEST['panda_client_id'];
  $panda_app_secrete=$_REQUEST['panda_app_secrete'];
  $panda_redirect_url=$_REQUEST['panda_redirect_url'];
  // $panda_api_end_point=$_REQUEST['panda_api_end_point'];

  $cfg->config['panda_app_name'] = !empty($_REQUEST['panda_app_name']);
  $cfg->config['panda_client_id'] = !empty($_REQUEST['panda_client_id']);
  $cfg->config['panda_app_secrete'] = !empty($_REQUEST['panda_app_secrete']);
  $cfg->config['panda_redirect_url'] = !empty($_REQUEST['panda_redirect_url']);
  // $cfg->config['panda_api_end_point'] = !empty($_REQUEST['panda_api_end_point']);
  // $cfg->config['pandaaccessToken'] = $_REQUEST['panda_access_token'];
  $cfg->config['DocumentId'] = $_REQUEST['DocumentId'];
  $cfg->config['QouteDocumentId'] = $_REQUEST['QouteDocumentId'];
  $cfg->config['user_email'] = $_REQUEST['user_email'];
  $cfg->config['user_first_name'] = $_REQUEST['user_first_name'];
  $cfg->config['user_last_name'] = $_REQUEST['user_last_name'];
  $cfg->config['sendbox_key'] = $_REQUEST['sendbox_key'];
  $cfg->saveConfig();
SugarApplication::redirect('index.php?module=Administration&action=index');
// $state=md5('123');
// $url='https://app.pandadoc.com/oauth2/authorize?client_id='.$panda_client_id.'&redirect_uri='.$panda_redirect_url.'&scope=read+write&response_type=code&state='.$state.'';

//     SugarApplication::redirect($url);
    exit();
}

$sugar_smarty->assign('MOD', $mod_strings);
$sugar_smarty->assign('APP', $app_strings);
$sugar_smarty->assign('APP_LIST', $app_list_strings);
$sugar_smarty->assign('LANGUAGES', get_languages());
$sugar_smarty->assign("JAVASCRIPT", get_set_focus_js());
$sugar_smarty->assign('config', $sugar_config);
$sugar_smarty->assign('error', $errors);


$buttons = <<<EOQ
    <input title="{$app_strings['LBL_SAVE_BUTTON_TITLE']}"
                       accessKey="{$app_strings['LBL_SAVE_BUTTON_KEY']}"
                       class="button primary"
                       type="submit"
                       name="save"
                       onclick="return check_form('ConfigureSettings');"
                       value="  {$app_strings['LBL_SAVE_BUTTON_LABEL']}  " >
                &nbsp;<input title="{$mod_strings['LBL_CANCEL_BUTTON_TITLE']}"  onclick="document.location.href='index.php?module=Administration&action=index'" class="button"  type="button" name="cancel" value="  {$app_strings['LBL_CANCEL_BUTTON_LABEL']}  " >
EOQ;

$sugar_smarty->assign("BUTTONS", $buttons);

$sugar_smarty->display('custom/modules/Administration/panda.tpl');

$javascript = new javascript();
$javascript->setFormName('ConfigureSettings');
echo $javascript->getScript();

?>


