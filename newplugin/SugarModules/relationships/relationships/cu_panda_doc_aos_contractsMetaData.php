<?php
// created: 2020-10-21 12:04:46
$dictionary["cu_panda_doc_aos_contracts"] = array (
  'true_relationship_type' => 'one-to-many',
  'relationships' => 
  array (
    'cu_panda_doc_aos_contracts' => 
    array (
      'lhs_module' => 'AOS_Contracts',
      'lhs_table' => 'aos_contracts',
      'lhs_key' => 'id',
      'rhs_module' => 'CU_Panda_Doc',
      'rhs_table' => 'cu_panda_doc',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'cu_panda_doc_aos_contracts_c',
      'join_key_lhs' => 'cu_panda_doc_aos_contractsaos_contracts_ida',
      'join_key_rhs' => 'cu_panda_doc_aos_contractscu_panda_doc_idb',
    ),
  ),
  'table' => 'cu_panda_doc_aos_contracts_c',
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
      'name' => 'cu_panda_doc_aos_contractsaos_contracts_ida',
      'type' => 'varchar',
      'len' => 36,
    ),
    4 => 
    array (
      'name' => 'cu_panda_doc_aos_contractscu_panda_doc_idb',
      'type' => 'varchar',
      'len' => 36,
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'cu_panda_doc_aos_contractsspk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'cu_panda_doc_aos_contracts_ida1',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'cu_panda_doc_aos_contractsaos_contracts_ida',
      ),
    ),
    2 => 
    array (
      'name' => 'cu_panda_doc_aos_contracts_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'cu_panda_doc_aos_contractscu_panda_doc_idb',
      ),
    ),
  ),
);