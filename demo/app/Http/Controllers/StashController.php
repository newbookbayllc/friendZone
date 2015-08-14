<?php  

namespace App\Http\Controllers;
use Session;
use DB;

class StashController extends Controller 
{
	public function _construct(){
		$this->middelware('guest');
	}
	public function main(){
		 
		 if (Session::has('lang') || Session::has('user_id')) {
				if(Session::has('lang')){
					$value = Session::get('lang');
					Session::put('user_id', $value);
				}
				return view('stash.main');
		}else{
			 return view('signup.login');
		 }
	}
	public function bookshelf(){
		
		 
		$data=DB::table('book')
            ->join('users', 'book.user_id', '=', 'users.id')
            ->get();
         // print_r($data);die;
         return view('stash.shelf',['data' => $data]);
		 //return view('stash.shelf')->with('data',$data); 
	}
	public function history(){
		
		 $data=DB::table('book')
            ->join('users', 'book.user_id', '=', 'users.id')
            ->get();
		 return view('stash.history',['data' => $data]);
		 //return view('stash.history');
	}
	public function tribu(){
		
		 $data=DB::table('book_comment')
            ->join('book', 'book_comment.book_id', '=', 'book.id')
            ->get();
		 return view('stash.tribu',['data' => $data]);
	}
	public function gift(){
		
		
		 if (Session::has('lang') || Session::has('user_id')) {
				if(Session::has('lang')){
					$value = Session::get('lang');
					Session::put('user_id', $value);
				}
				$userId = Session::get('user_id');
				$newsData=DB::table('gift')
				   ->join('users', 'gift.user_id', '=', 'users.id')
				   ->where('user_id',$userId)
				   ->get();
				  return view('stash.gift',['giftData' => $newsData]);
		}else{
			
		}
				   
	}
	
	
	
	
}
?>
