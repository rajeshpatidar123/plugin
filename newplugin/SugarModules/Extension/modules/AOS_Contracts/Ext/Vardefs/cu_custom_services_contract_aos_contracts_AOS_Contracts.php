<?php
// created: 2020-11-21 20:10:00
$dictionary["AOS_Contracts"]["fields"]["cu_custom_services_contract_aos_contracts"] = array (
  'name' => 'cu_custom_services_contract_aos_contracts',
  'type' => 'link',
  'relationship' => 'cu_custom_services_contract_aos_contracts',
  'source' => 'non-db',
  'module' => 'CU_Custom_Services_Contract',
  'bean_name' => false,
  'vname' => 'LBL_CU_CUSTOM_SERVICES_CONTRACT_AOS_CONTRACTS_FROM_CU_CUSTOM_SERVICES_CONTRACT_TITLE',
  'id_name' => 'cu_custom_081aontract_ida',
);
$dictionary["AOS_Contracts"]["fields"]["cu_custom_services_contract_aos_contracts_name"] = array (
  'name' => 'cu_custom_services_contract_aos_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CU_CUSTOM_SERVICES_CONTRACT_AOS_CONTRACTS_FROM_CU_CUSTOM_SERVICES_CONTRACT_TITLE',
  'save' => true,
  'id_name' => 'cu_custom_081aontract_ida',
  'link' => 'cu_custom_services_contract_aos_contracts',
  'table' => 'cu_custom_services_contract',
  'module' => 'CU_Custom_Services_Contract',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["cu_custom_081aontract_ida"] = array (
  'name' => 'cu_custom_081aontract_ida',
  'type' => 'link',
  'relationship' => 'cu_custom_services_contract_aos_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CU_CUSTOM_SERVICES_CONTRACT_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
);
