<?php
$module_name = 'CU_Panda_Doc';
$listViewDefs [$module_name] = 
array (
  'NAME' => 
  array (
    'width' => '32%',
    'label' => 'LBL_NAME',
    'default' => true,
    'link' => true,
  ),
  'CU_PANDA_DOC_AOS_CONTRACTS_NAME' => 
  array (
    'type' => 'relate',
    'link' => true,
    'label' => 'LBL_CU_PANDA_DOC_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
    'id' => 'CU_PANDA_DOC_AOS_CONTRACTSAOS_CONTRACTS_IDA',
    'width' => '10%',
    'default' => true,
  ),
  'STATUS' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_STATUS',
    'width' => '10%',
    'default' => true,
  ),
  'DOCUMENT_ID_C' => 
  array (
    'type' => 'varchar',
    'label' => 'LBL_DOCUMENT_ID_C',
    'width' => '10%',
    'default' => true,
  ),
  'ASSIGNED_USER_NAME' => 
  array (
    'width' => '9%',
    'label' => 'LBL_ASSIGNED_TO_NAME',
    'module' => 'Employees',
    'id' => 'ASSIGNED_USER_ID',
    'default' => true,
  ),
);
;
?>
