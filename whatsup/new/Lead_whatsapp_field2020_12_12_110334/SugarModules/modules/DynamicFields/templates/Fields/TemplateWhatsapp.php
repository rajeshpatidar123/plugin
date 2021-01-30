<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
  
require_once('modules/DynamicFields/templates/Fields/TemplateField.php');
class TemplateWhatsapp extends TemplateField{
    var $type='Whatsapp';
         
    function get_field_def(){
        $def = parent::get_field_def();
        $def['dbType'] = 'varchar';
        return $def;
    }
}