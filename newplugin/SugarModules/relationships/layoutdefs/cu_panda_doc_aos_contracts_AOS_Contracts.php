<?php
 // created: 2020-10-21 12:04:46
$layout_defs["AOS_Contracts"]["subpanel_setup"]['cu_panda_doc_aos_contracts'] = array (
  'order' => 100,
  'module' => 'CU_Panda_Doc',
  'subpanel_name' => 'default',
  'sort_order' => 'asc',
  'sort_by' => 'id',
  'title_key' => 'LBL_CU_PANDA_DOC_AOS_CONTRACTS_FROM_CU_PANDA_DOC_TITLE',
  'get_subpanel_data' => 'cu_panda_doc_aos_contracts',
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
