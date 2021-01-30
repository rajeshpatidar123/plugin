<?php
 // created: 2020-11-21 19:14:38
$layout_defs["CU_Contract_Charging_Metrics"]["subpanel_setup"]['cu_contract_charging_metrics_aos_contracts'] = array (
  'order' => 100,
  'module' => 'AOS_Contracts',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CU_CONTRACT_CHARGING_METRICS_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
  'get_subpanel_data' => 'cu_contract_charging_metrics_aos_contracts',
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
