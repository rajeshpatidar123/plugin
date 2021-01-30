<?php
// created: 2020-11-21 19:14:38
$dictionary["AOS_Contracts"]["fields"]["cu_contract_charging_metrics_aos_contracts"] = array (
  'name' => 'cu_contract_charging_metrics_aos_contracts',
  'type' => 'link',
  'relationship' => 'cu_contract_charging_metrics_aos_contracts',
  'source' => 'non-db',
  'module' => 'CU_Contract_Charging_Metrics',
  'bean_name' => false,
  'vname' => 'LBL_CU_CONTRACT_CHARGING_METRICS_AOS_CONTRACTS_FROM_CU_CONTRACT_CHARGING_METRICS_TITLE',
  'id_name' => 'cu_contracfa5fmetrics_ida',
);
$dictionary["AOS_Contracts"]["fields"]["cu_contract_charging_metrics_aos_contracts_name"] = array (
  'name' => 'cu_contract_charging_metrics_aos_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CU_CONTRACT_CHARGING_METRICS_AOS_CONTRACTS_FROM_CU_CONTRACT_CHARGING_METRICS_TITLE',
  'save' => true,
  'id_name' => 'cu_contracfa5fmetrics_ida',
  'link' => 'cu_contract_charging_metrics_aos_contracts',
  'table' => 'cu_contract_charging_metrics',
  'module' => 'CU_Contract_Charging_Metrics',
  'rname' => 'name',
);
$dictionary["AOS_Contracts"]["fields"]["cu_contracfa5fmetrics_ida"] = array (
  'name' => 'cu_contracfa5fmetrics_ida',
  'type' => 'link',
  'relationship' => 'cu_contract_charging_metrics_aos_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CU_CONTRACT_CHARGING_METRICS_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
);
