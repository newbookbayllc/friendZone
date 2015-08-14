<?php namespace App\Http\Controllers\friendZone;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\AdminController;
	class testController extends Controller {
		public function conversation(){
			return view( 'friendzone.conversation ');
			//return 'hello world';
		}
		public function friends(){
			return view('friendZone.friends');
		}
		public function giftpage(){
			return view('friendZone.giftpage');
		}
		public function gifttab1(){
			return view('friendZone.gifttab1');
		}	
		public function gifttab2(){
			return view('friendZone.gifttab2');
		}	
		public function gifttab3(){
			return view('friendZone.gifttab3');
		}
		public function testOnly(){
			echo "hello world";
		}
	}
?>