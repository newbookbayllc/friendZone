<?php  

namespace App\Http\Controllers;
use Session;
use DB;

class EventController extends Controller 
{
	public function _construct(){
		
		if (Session::has('lang') || Session::has('user_id')) {
			if(Session::has('lang')){
				$value = Session::get('lang');
				Session::put('user_id', $value);
			}
				$this->middelware('guest');
		}else{
			 return view('signup.login');
		 }
		
	}
	public function index(){
		
		 
		  if (Session::has('lang') || Session::has('user_id')) {
				if(Session::has('lang')){
					$value = Session::get('lang');
					Session::put('user_id', $value);
				}
				$data=DB::table('News')
					->join('users', 'News.user_id', '=', 'users.id')
					->get();
				 return view('event.index',['data' => $data]);
		}else{
			 return view('signup.login');
		 }
		 
		
	}
	public function event(){
		
		$data=DB::table('event_detail')
					->join('users', 'event_detail.user_id', '=', 'users.id')
					->get();
		return view('event.event',['data' => $data]);
	}
	public function interview(){
		
		 $data=DB::table('interview')
					->join('users', 'interview.user_id', '=', 'users.id')
					->get();
		 return view('event.interview',['data' => $data]); 
	}
	public function announcement(){
		
		
		 $data=DB::table('announcements')
					->join('users', 'announcements.user_id', '=', 'users.id')
					->get();
		 return view('event.announcement',['data' => $data]); 
	}
	public function future($id=null){
		
		$detail=DB::table('event_detail')
					->join('users', 'event_detail.user_id', '=', 'users.id')
					->where('event_detail.id', $id)
					->first();
		
		 return view('event.evenfuture',['detail' => $detail]);
	}
	public function interviewdetail($id=null){
		
		$detail=DB::table('interview')
					->join('users', 'interview.user_id', '=', 'users.id')
					->where('interview.id', $id)
					->first();
		
		 return view('event.interviewdetail',['detail' => $detail]); 
		
		 //return view('event.interviewdetail');
	}
	
}
?>
