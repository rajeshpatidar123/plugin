<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

    $status=$_REQUEST['status'];
    $documentsId=$_REQUEST['documentsId'];
    $documentsName=$_REQUEST['documentsName'];
    $date=date("Y-m-d h:i:s");


$Bean = BeanFactory::getBean('CU_Panda_Doc');

$beanList = $Bean->retrieve_by_string_fields(
                                array(
                                  'name' =>$documentsName,
                                  'document_id_c' => $documentsId,
                                )
                              );

 $id= $beanList->id;
$ParentBean = BeanFactory::getBean('CU_Panda_Doc',$id);

//Load the pertinent relationship using Link field name
$ParentBean->load_relationship('cu_panda_doc_aos_contracts');

//Retrieve related Contact(s) IDs ONLY.
$RelatedContracts = $ParentBean->cu_panda_doc_aos_contracts->getBeans();

foreach ($RelatedContracts as $key) {
   $relationId=$key->fetched_row['id'];
  }
$pandaBean = BeanFactory::newBean('CU_Panda_Doc');
$pandaBean->document_id_c=$documentsId;
$pandaBean->status=$status; 
$pandaBean->name=$documentsName; 
$pandaBean->cu_panda_doc_aos_contractsaos_contracts_ida=$relationId;
$pandaBean->save();
   

?>
