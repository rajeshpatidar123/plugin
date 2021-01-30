<?php
// created: 2020-11-21 20:10:00
$dictionary["cu_custom_services_contract_aos_contracts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cu_custom_services_contract_aos_contracts' => 
    array (
      'lhs_module' => 'CU_Custom_Services_Contract',
      'lhs_table' => 'cu_custom_services_contract',
      'lhs_key' => 'id',
      'rhs_module' => 'AOS_Contracts',
      'rhs_table' => 'aos_contracts',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cu_custom_services_contract_aos_contracts_c',
      'join_key_lhs' => 'cu_custom_081aontract_ida',
      'join_key_rhs' => 'cu_custom_services_contract_aos_contractsaos_contracts_idb',
    ),
  ),
  'table' => 'cu_custom_services_contract_aos_contracts_c',
  'fields' => 
  array (
    0 => 
    array (
      'name' => 'id',
      'type' => 'varchar',
      'len' => 36,
    ),
    1 => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    2 => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'len' => '1',
      'default' => '0',
      'required' => true,
    ),
    3 => 
    array (
      'name' => 'cu_custom_081aontract_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cu_custom_services_contract_aos_contractsaos_contracts_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cu_custom_services_contract_aos_contractsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cu_custom_services_contract_aos_contracts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cu_custom_081aontract_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cu_custom_services_contract_aos_contracts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cu_custom_services_contract_aos_contractsaos_contracts_idb',
      ),
    ),
  ),
);