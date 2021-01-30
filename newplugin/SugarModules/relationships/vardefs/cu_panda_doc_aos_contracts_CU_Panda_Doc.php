<?php
// created: 2020-10-21 12:04:46
$dictionary["CU_Panda_Doc"]["fields"]["cu_panda_doc_aos_contracts"] = array (
  'name' => 'cu_panda_doc_aos_contracts',
  'type' => 'link',
  'relationship' => 'cu_panda_doc_aos_contracts',
  'source' => 'non-db',
  'module' => 'AOS_Contracts',
  'bean_name' => 'AOS_Contracts',
  'vname' => 'LBL_CU_PANDA_DOC_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
  'id_name' => 'cu_panda_doc_aos_contractsaos_contracts_ida',
);
$dictionary["CU_Panda_Doc"]["fields"]["cu_panda_doc_aos_contracts_name"] = array (
  'name' => 'cu_panda_doc_aos_contracts_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_CU_PANDA_DOC_AOS_CONTRACTS_FROM_AOS_CONTRACTS_TITLE',
  'save' => true,
  'id_name' => 'cu_panda_doc_aos_contractsaos_contracts_ida',
  'link' => 'cu_panda_doc_aos_contracts',
  'table' => 'aos_contracts',
  'module' => 'AOS_Contracts',
  'rname' => 'name',
);
$dictionary["CU_Panda_Doc"]["fields"]["cu_panda_doc_aos_contractsaos_contracts_ida"] = array (
  'name' => 'cu_panda_doc_aos_contractsaos_contracts_ida',
  'type' => 'link',
  'relationship' => 'cu_panda_doc_aos_contracts',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_CU_PANDA_DOC_AOS_CONTRACTS_FROM_CU_PANDA_DOC_TITLE',
);
