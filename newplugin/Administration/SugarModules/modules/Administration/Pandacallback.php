<?php 
if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}
 $access_token=$_REQUEST['access_token'];
 $refresh_token=$_REQUEST['refresh_token'];
 $expires_in=$_REQUEST['expires_in'];

global $current_user, $sugar_config;
global $mod_strings;
global $app_list_strings;
global $app_strings;
global $theme;


//  $panda_client_id=$sugar_config['panda_client_id'];
// $panda_app_secrete=$sugar_config['panda_app_secrete'];
// $panda_redirect_url=$sugar_config['panda_redirect_url'];

require_once('modules/Configurator/Configurator.php');
      $configuratorObj = new Configurator();
      // $configuratorObj->loadConfig();
  $configuratorObj->config['pandaaccessToken'] = $access_token;
  $configuratorObj->config['pandarefresh_token'] = $refresh_token;
  $configuratorObj->config['pandaexpires_in'] = $expires_in;
      $configuratorObj->saveConfig();
 SugarApplication::redirect('index.php?module=Administration&action=index');
?>

