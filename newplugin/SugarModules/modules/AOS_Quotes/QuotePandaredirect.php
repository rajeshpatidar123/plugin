<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$QuoteId= $_REQUEST['id'];
$BeanGroup1 = BeanFactory::getBean('AOS_Line_Item_Groups');
$GroupList1 = $BeanGroup1->get_full_list(
                                array(
                                  
                                  'parent_id'=>$QuoteId,  
                                )
                              );
$postgroup=[];
foreach ($GroupList1 as $key) {
      $row=$key->fetched_row;
      $parent_id=$key->fetched_row['parent_id'];
      $linecount=count($row);
      for ($i=0; $i < $linecount; $i++) { 
         if($QuoteId==$parent_id){
           $GroupId1= $key->fetched_row['name'];
            array_push($postgroup,$GroupId1);
            break;
          
         }
      }
  }

$groupcount=count($postgroup);
global $sugar_config;
 $QouteDocumentId=$sugar_config['QouteDocumentId'];
  
$section=array(); 
for ($i=0; $i < $groupcount; $i++) {
$GroupName=$postgroup[$i]; 

 $BeanContact = BeanFactory::getBean('AOS_Quotes',$QuoteId);

            $name =$BeanContact->name;
            $expiration =$BeanContact->expiration;
            $billing_account_id =$BeanContact->billing_account_id;
            $billing_account =$BeanContact->billing_account;
            $start_date =$BeanContact->start_date;
            $end_date =$BeanContact->end_date;
            $billing_contact =$BeanContact->billing_contact;
            $billing_contact_id =$BeanContact->billing_contact_id;
            $total_amt =$BeanContact->total_amt;
            $discount_amount1 =$BeanContact->discount_amount;
            $discount_amount=abs($discount_amount1);
            $total_amount =$BeanContact->total_amount;
            $desc =$BeanContact->description;
            $global_tax_c =$BeanContact->global_tax_c;
            $subtotal_amount=$BeanContact->subtotal_amount;
 $ParentBeanAccount = BeanFactory::getBean('Accounts',$billing_account_id);
      $phone_office=$ParentBeanAccount->phone_office;
      $billing_address_street=$ParentBeanAccount->billing_address_street;
      $billing_address_city=$ParentBeanAccount->billing_address_city;
      $billing_address_state=$ParentBeanAccount->billing_address_state;
      $billing_address_country=$ParentBeanAccount->billing_address_country;
      $billing_address_postalcode=$ParentBeanAccount->billing_address_postalcode;
      
         $Address= $billing_address_street.' '.$billing_address_city.' '.$billing_address_state.' '.$billing_address_country.' '.$billing_address_postalcode;
           
// get email for related contact............          
$ParentBean = BeanFactory::getBean('Contacts',$billing_contact_id);
$cemail= $ParentBean->email1;
 $first_name= $ParentBean->first_name;
 $last_name=$ParentBean->last_name;

$BeanGroup = BeanFactory::getBean('AOS_Line_Item_Groups');
$GroupList = $BeanGroup->retrieve_by_string_fields(
                                array(
                                  'name' =>$GroupName,
                                  'parent_id'=>$QuoteId,
                                  
                                )
                              );
  
  $GroupId =$GroupList->id;

$ParentBean = BeanFactory::getBean('AOS_Line_Item_Groups',$GroupId);
$ParentBean->load_relationship('aos_products_quotes');

//Retrieve related Contact(s) IDs ONLY.
$RelatedContacts = $ParentBean->aos_products_quotes->getBeans();

 $dataar=array();
  foreach ($RelatedContacts as $key) {
     
    
    $QouteListname = $key->fetched_row['name'];
    if(empty($QouteListname)){
      $QouteListname="";
    }
    $item_description=$key->fetched_row['item_description'];
    if(empty($item_description)){
      $item_description="";
    }
    $product_qty=$key->fetched_row['product_qty'];
    if(empty($product_qty)){
      $product_qty=1;
    }
    $product_list_price=$key->fetched_row['product_list_price'];
    if(empty($product_list_price)){
      $product_list_price=0;
    } 
       $product_vat = $key->fetched_row['vat'];
    if(empty($product_vat)){
      $product_vat="";
    }
      $discount1 = $key->fetched_row['discount'];
      if($discount1=='Percentage'){
            $product_discount0=$key->fetched_row['product_discount'];
            if(empty($product_discount0)){
            $product_discount=0;
            }else{
              $product_discount=$product_discount0;
            }
      }else{
        $product_discount0=$key->fetched_row['product_discount'];
        if(empty($product_discount0)){
            $product_discount=0;
            }else{
              $pro_discount=$product_discount0;
              $product_discount=($pro_discount*100)/$product_list_price;
            } 
      
      }
     
   $data= array (
                        'options' => 
                        array (
                          
                          'multichoice_selected' => false,
                        ),
                        'data' => 
                        array (
                          'name' => $QouteListname,
                          'description' => $item_description,
                          'price' => $product_list_price,
                          'qty' => $product_qty,
                          
                          'discount' => 
                          array (
                            'value' => $product_discount,
                            'type' => "percent",
                          ),
                          
                        ),

                      );
              array_push($dataar,$data);
  }

  $sectiondata=array (  
                'title' => $GroupName,
                'default' => false,
                'multichoice_enabled' => false,
                    'rows' => 
                    $dataar,
                );
  array_push($section,$sectiondata);  
}

$postfields   = array();
$postfields['name'] = $name;
$postfields['template_uuid']=$QouteDocumentId;
$postfields['recipients'] = array(
    array(
            'email'      => $cemail,
            'first_name' => $first_name,
            'last_name'  => $last_name,
            'role'       => 'Customer',
        )
);

$postfields['tokens']=array(
    array(
            'name'      => 'Document.title',
            'value' => $name,
        ),
    array(
            'name'      => 'Client.name',
            'value' => $billing_account,
        ),
    array(
            'name'      => 'Name',
            'value' => $billing_contact,
        ),
    array(
            'name'      => 'Address',
            'value' => $Address,
        ),
    array(
            'name'      => 'Document.expiry_date',
            'value' => $expiration,
        ),
        
);
$postfields['metadata']=array(
  
        'opp_id' => 'Quote',
        'my_favorite_pet' => 'panda',
  );
$postfields['tags']=array(
   
            0 => 'Quote',
            1 => $name,
  );
    
    $postfields['pricing_tables']=array(
    array (
      'name' => 'PricingTable1',
      
      'options' => array (
                      'currency' => 'EUR',
                      'tax_first' => 
                      array (
                        'is_global' => true,
                        'type' => 'percent',
                        'name' => 'Global Tax',
                        'value' => $global_tax_c,
                      ),
                    ),
      'sections' => 
               $section,
               
    ),
  );

$data_string = json_encode( $postfields );
 
    global $current_user, $sugar_config;
    global $mod_strings;
    global $app_list_strings;
    global $app_strings;
    global $theme;

    $DocumentId=$sugar_config['QouteDocumentId'];
    $sendbox_key=$sugar_config['sendbox_key'];

         
$url = 'https://api.pandadoc.com/public/v1/documents';
$headr = array();
$headr[] = 'Content-length: '.strlen( $data_string );
$headr[] = 'Content-type: application/json';
// $headr[] = "Authorization: Bearer $ACCESS_TOKEN";
$headr[] = "Authorization:API-Key $sendbox_key";

$ch = curl_init( $url );

curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
curl_setopt( $ch, CURLOPT_VERBOSE, 1 );
curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_string );
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
curl_setopt( $ch, CURLOPT_HTTPHEADER, $headr );

$result = curl_exec( $ch );
 $result1=json_decode($result,true);
$documentsId= $result1['id'];

function senddocument($documentsId,$sendbox_key){
    $data   = array();
    $data['message'] = 'Hello! This document was sent from the UPTIC B.V.';
    $data['silent']=false;  
    $data_string = json_encode( $data );
    $url='https://api.pandadoc.com/public/v1/documents/'.$documentsId.'/send';   
    $headr = array();
    $headr[] = 'Content-length: '.strlen( $data_string );
    $headr[] = 'Content-type: application/json';
    // $headr[] = "Authorization: Bearer $ACCESS_TOKEN";
    $headr[] = "Authorization:API-Key $sendbox_key";

    $ch = curl_init( $url );

    curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, true );
    curl_setopt( $ch, CURLOPT_VERBOSE, 1 );
    curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, false );
    curl_setopt( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
    curl_setopt( $ch, CURLOPT_POSTFIELDS, $data_string );
    curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt( $ch, CURLOPT_HTTPHEADER, $headr );

    $result2 = curl_exec( $ch );            
    return $result2;        
}
sleep(10);
$res=senddocument($documentsId,$sendbox_key);
$res1=json_decode($res,true);

  $docId= $res1['id'];
  $documentsName= $res1['name'];
 $documentsStatus= $res1['status'];
// $docstatus= substr($status,9);
$pandaBean = BeanFactory::newBean('CU_Panda_Doc');
$pandaBean->document_id_c=$docId;
$pandaBean->status='sent'; 
$pandaBean->name=$documentsName; 
$pandaBean->aos_quotes_cu_panda_doc_1aos_quotes_ida=$QuoteId;
$pandaBean->save();
 $url="index.php?module=AOS_Quotes&action=DetailView&record=".$QuoteId."";
 SugarApplication::redirect($url);


 