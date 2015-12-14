<?php 
require_once("lib/Conekta.php");
Conekta::setApiKey("key_9sBD44QqHXusjLLFhRBKZQ");

try {
	$charge = Conekta_Charge::create(array(
	  'description'=> 'Pago de servicio FAST PRICE',
	  'reference_id'=> '9839-wolf_pack',
	  'amount'=> 1228700,
	  'currency'=>'MXN',
	  'card'=> 'tok_test_visa_4242',
	  'details'=> array(
	    'name'=> 'Arnulfo Quimare',
	    'phone'=> '403-342-0642',
	    'email'=> 'logan@x-men.org',
	    'customer'=> array(
	      'logged_in'=> true,
	      'successful_purchases'=> 14,
	      'created_at'=> 1379784950,
	      'updated_at'=> 1379784950,
	      'offline_payments'=> 4,
	      'score'=> 9
	    ),
	    'line_items'=> array(
	      array(
	        'name'=> 'Box of Cohiba S1s',
	        'description'=> 'Imported From Mex.',
	        'unit_price'=> 20000,
	        'quantity'=> 1,
	        'sku'=> 'cohb_s1',
	        'category'=> 'food'
	      )
	    )
	  )
	));
} catch (Exception $e) {
	echo $e;
}
	require_once '../views/header.inc';		
	require_once '../views/helperPago.php';        
	require_once '../views/footer.inc';
	

?>