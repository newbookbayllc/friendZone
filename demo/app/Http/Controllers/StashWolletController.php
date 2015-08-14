<?php  

namespace App\Http\Controllers;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\ExecutePayment;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;


class StashWolletController extends Controller 
{
	
       private $_api_context;

       public function _construct(){
		$this->middelware('guest');
                $paypal_conf = Config::get('paypal');
                $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
                $this->_api_context->setConfig($paypal_conf['settings']);

	}
	public function balance(){
		
	   return view('stashwollet.balance');
	}
	public function deposite(){
		
		 return view('stashwollet.deposite');
	}
	public function withdraw(){
		
		 return view('stashwollet.withdraw');
	}
	public function success(){
		
		 return view('stashwollet.success');
	}
	public function failed(){
		
		 return view('stashwollet.failed');
	}
	public function praised(){ 
		
		 return view('stash.praised');
	}
	
	
	
	
}
?>
