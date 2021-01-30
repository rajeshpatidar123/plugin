<?php
// created: 2020-10-21 17:10:52
$subpanel_layout['list_fields'] = array (
  'name' => 
  array (
    'vname' => 'LBL_NAME',
    'widget_class' => 'SubPanelDetailViewLink',
    'width' => '45%',
    'default' => true,
  ),
  'status' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'document_id_c' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_DOCUMENT_ID_C',
    'width' => '10%',
    'default' => true,
  ),
  'cu_panda_doc_aos_contracts_name' => 
  array (
    'type' => 'relate',
    'link' => true,
    'vname' => 'LBL_CU_PANDA_DOC_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
    'id' => 'CU_PANDA_DOC_AOS_CONTRACTSAOS_CONTRACTS_IDA',
    'width' => '10%',
    'default' => true,
    'widget_class' => 'SubPanelDetailViewLink',
    'target_module' => 'AOS_Contracts',
    'target_record_key' => 'cu_panda_doc_aos_contractsaos_contracts_ida',
  ),
  'date_modified' => 
  array (
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '45%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'CU_Panda_Doc',
    'width' => '4%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'CU_Panda_Doc',
    'width' => '5%',
    'default' => true,
  ),
);