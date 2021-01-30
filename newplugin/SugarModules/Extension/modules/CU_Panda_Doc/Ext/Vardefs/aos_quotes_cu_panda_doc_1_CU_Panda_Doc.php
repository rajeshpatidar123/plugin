<?php
// created: 2020-11-19 20:11:03
$dictionary["CU_Panda_Doc"]["fields"]["aos_quotes_cu_panda_doc_1"] = array (
  'name' => 'aos_quotes_cu_panda_doc_1',
  'type' => 'link',
  'relationship' => 'aos_quotes_cu_panda_doc_1',
  'source' => 'non-db',
  'module' => 'AOS_Quotes',
  'bean_name' => 'AOS_Quotes',
  'vname' => 'LBL_AOS_QUOTES_CU_PANDA_DOC_1_FROM_AOS_QUOTES_TITLE',
  'id_name' => 'aos_quotes_cu_panda_doc_1aos_quotes_ida',
);
$dictionary["CU_Panda_Doc"]["fields"]["aos_quotes_cu_panda_doc_1_name"] = array (
  'name' => 'aos_quotes_cu_panda_doc_1_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_AOS_QUOTES_CU_PANDA_DOC_1_FROM_AOS_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'aos_quotes_cu_panda_doc_1aos_quotes_ida',
  'link' => 'aos_quotes_cu_panda_doc_1',
  'table' => 'aos_quotes',
  'module' => 'AOS_Quotes',
  'rname' => 'name',
);
$dictionary["CU_Panda_Doc"]["fields"]["aos_quotes_cu_panda_doc_1aos_quotes_ida"] = array (
  'name' => 'aos_quotes_cu_panda_doc_1aos_quotes_ida',
  'type' => 'link',
  'relationship' => 'aos_quotes_cu_panda_doc_1',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_AOS_QUOTES_CU_PANDA_DOC_1_FROM_CU_PANDA_DOC_TITLE',
);
