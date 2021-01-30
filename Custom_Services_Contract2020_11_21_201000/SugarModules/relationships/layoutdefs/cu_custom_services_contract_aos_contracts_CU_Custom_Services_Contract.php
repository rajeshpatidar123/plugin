<?php
 // created: 2020-11-21 20:10:00
$layout_defs["CU_Custom_Services_Contract"]["subpanel_setup"]['cu_custom_services_contract_aos_contracts'] = array (
  'order' => 100,
  'module' => 'AOS_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CU_CUSTOM_SERVICES_CONTRACT_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
  'get_subpanel_data' => 'cu_custom_services_contract_aos_contracts',
  'top_buttons' => 
  array (
    0 => 
    array (
      'widget_class' => 'SubPanelTopButtonQuickCreate',
    ),
    1 => 
    array (
      'widget_class' => 'SubPanelTopSelectButton',
      'mode' => 'MultiSelect',
    ),
  ),
);
