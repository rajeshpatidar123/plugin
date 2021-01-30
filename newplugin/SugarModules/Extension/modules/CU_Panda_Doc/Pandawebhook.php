<?php

 $json = file_get_contents('php://input');

 $action = json_decode($json);
   $status=$action[0]->data->status;
   $doc_id=$action[0]->data->id;
   $opp_id=$action[0]->data->metadata->opp_id;
   $pandaname=$action[0]->data->name;
   $date=date("Y-m-d h:i:s");
  $status_change=substr($status,9);
   $event=$action[0]->event;
 if($event!='recipient_completed'){
if(($status_change!='sent') && ($status_change!='draft')){
  if(!empty($status_change)){
  require_once('config.php');
  $Dbhostname=$sugar_config['dbconfig']['db_host_name'];
  $Username=$sugar_config['dbconfig']['db_user_name'];
  $Password=$sugar_config['dbconfig']['db_password'];
  $Databasename=$sugar_config['dbconfig']['db_name']; 
  $conn=mysqli_connect($Dbhostname,$Username,$Password,$Databasename);
  if(!$conn)
  {
    die('Database Connection Failed.');
  }else{
    $selectid="SELECT * FROM `cu_panda_doc` WHERE document_id_c='$doc_id'";
    $result=mysqli_query($conn,$selectid);
    $NumID=mysqli_num_rows($result);
    if($NumID>0){
      while ($row=mysqli_fetch_assoc($result)) {
        $pandaId=$row['id'];
      }
    }
  }

// genarete uniq id ...........   
function generate_uuid() {
    return sprintf( '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
        mt_rand( 0, 0xffff ), mt_rand( 0, 0xffff ),
        mt_rand( 0, 0xffff ),
        mt_rand( 0, 0x0C2f ) | 0x4000,
        mt_rand( 0, 0x3fff ) | 0x8000,
        mt_rand( 0, 0x2Aff ), mt_rand( 0, 0xffD3 ), mt_rand( 0, 0xff4B )
    );
}
// closed...............

if($opp_id=='Contract'){
   $ContractPandadoc="SELECT * FROM `cu_panda_doc_aos_contracts_c` WHERE `cu_panda_doc_aos_contractscu_panda_doc_idb` ='$pandaId'";
  $resultrelationId=mysqli_query($conn,$ContractPandadoc);
    $realationNumID=mysqli_num_rows($resultrelationId);
    if($realationNumID>0){
      while ($relationrow=mysqli_fetch_assoc($resultrelationId)) {
        $relationrowId=$relationrow['cu_panda_doc_aos_contractsaos_contracts_ida'];


$PandaID = generate_uuid();

$insertPandadoc="INSERT INTO `cu_panda_doc`(`id`, `name`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `assigned_user_id`,`document_id_c`, `status`) VALUES ('$PandaID','$pandaname','$date','$date',1,1,1,'$doc_id','$status_change')";
$resultInsertPandadoc=mysqli_query($conn,$insertPandadoc);
      if($resultInsertPandadoc){
        $relID = generate_uuid();
        $insertRelation="INSERT INTO `cu_panda_doc_aos_contracts_c`(`id`, `date_modified`, `cu_panda_doc_aos_contractsaos_contracts_ida`, `cu_panda_doc_aos_contractscu_panda_doc_idb`) VALUES ('$relID','$date','$relationrowId','$PandaID')";
        $resultinsertRelation=mysqli_query($conn,$insertRelation);
      }
  }
}

}// if tags condition
else{

  $QoutePandadoc="SELECT * FROM `aos_quotes_cu_panda_doc_1_c` WHERE `aos_quotes_cu_panda_doc_1cu_panda_doc_idb` ='$pandaId'";
  $resultrelationId=mysqli_query($conn,$QoutePandadoc);
    $realationNumID=mysqli_num_rows($resultrelationId);
    if($realationNumID>0){
      while ($relationrow=mysqli_fetch_assoc($resultrelationId)) {
        $relationrowId=$relationrow['aos_quotes_cu_panda_doc_1aos_quotes_ida'];


$PandaID = generate_uuid();

$insertPandadoc="INSERT INTO `cu_panda_doc`(`id`, `name`, `date_entered`, `date_modified`, `modified_user_id`, `created_by`, `assigned_user_id`,`document_id_c`, `status`) VALUES ('$PandaID','$pandaname','$date','$date',1,1,1,'$doc_id','$status_change')";
$resultInsertPandadoc=mysqli_query($conn,$insertPandadoc);
      if($resultInsertPandadoc){
        $relID = generate_uuid();
        $insertRelation="INSERT INTO `aos_quotes_cu_panda_doc_1_c`(`id`, `date_modified`, `aos_quotes_cu_panda_doc_1aos_quotes_ida`, `aos_quotes_cu_panda_doc_1cu_panda_doc_idb`) VALUES ('$relID','$date','$relationrowId','$PandaID')";
        $resultinsertRelation=mysqli_query($conn,$insertRelation);
      }
  }
}

}// end else condition.......

}

  }
  
}


?>
