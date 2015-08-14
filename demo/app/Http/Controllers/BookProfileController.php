<?php  

namespace App\Http\Controllers;
use Session;
use DB;

class BookProfileController extends Controller 
{
	public function _construct(){
		$this->middelware('guest');
	}
	public function bookprofile($id){ 
		
		  if (Session::has('lang') || Session::has('user_id')) {
				if(Session::has('lang')){
					$value = Session::get('lang');
					Session::put('user_id', $value);
				}
				$last_day = date('Y-m-t', strtotime(date('Y-m-d')));
				$userId = Session::get('user_id');
				$data=DB::table('book')
				     ->join('users', 'book.user_id', '=', 'users.id')
					 ->where('book.id',$id)
					->first();
			    $allBookdata=DB::table('book')
				     ->join('users', 'book.user_id', '=', 'users.id')
					 ->where('book.id','!=',$id)
					 ->get();
				$eventData=DB::table('event_detail')
				     ->join('users', 'event_detail.user_id', '=', 'users.id')
				     ->where('user_id',$userId)
					 ->get();
				$announcementsData=DB::table('announcements')
				     ->join('users', 'announcements.user_id', '=', 'users.id')
				     ->where('user_id',$userId)
					 ->first();
				$bookVote=DB::table('book_vote')
				      ->join('users', 'book_vote.user_id', '=', 'users.id') 
				      // ->where(DB::raw('date(vote_date)', ' < ', $last_day))
				       ->where('book_id',$id)
					  ->get();
			    //print_r($announcementsData);die;
				return view('bookprofile.bookprofile',['data' => $data,'id' =>$id,'eventData' =>$eventData,'announcementsData' =>$announcementsData, 'bookVote' => $bookVote,'allBookdata' => $allBookdata]);  
		}else{
			 return view('signup.login');
		 }
	}
	public function comment(){
		
		 return view('bookprofile.comment');
	}
	public function readbook($id){
		
		 return view('bookprofile.readingbook');
	}
	public function popup(){
		
		 return view('bookprofile.popup');
	}
	public function vote($id){
		
		 $userId = Session::get('user_id');
		 $voteDetail = DB::table('book_vote')
					->where('book_id', $id)->where('user_id',$userId)->first();
		 if($voteDetail){
			 
			 return redirect('bookprofile/id/'.$id)->with('success', 'You have allready vote for this book'); 
		 
		 }else{
			 
			 $id = DB::table('book_vote')->insert(
				['book_id' => $id,'user_id' => $userId ,'vote_date' => date('Y-m-d h:i:s')]
			 );
			 return redirect('bookprofile/id/'.$id)->with('success', 'Vote successfully Done'); 
		 }
		 
		 return view('bookprofile.vote');
	}
	public function like($id){
		
		 $userId = Session::get('user_id');
		 $voteDetail = DB::table('book_like')
					->where('book_id', $id)->where('user_id',$userId)->first();
		 if($voteDetail){
			 
			 return redirect('bookprofile/id/'.$id)->with('success', 'You have allready like this book'); 
		 
		 }else{
			 
			 $id = DB::table('book_like')->insert(
				['book_id' => $id,'user_id' => $userId ,'like_date' => date('Y-m-d h:i:s')]
			 );
			 return redirect('bookprofile/id/'.$id)->with('success', 'Like successfully Done');  
		 }
		 
		 return view('bookprofile.like');
	}
	public function read($id){
		
		 $userId = Session::get('user_id');
		 $id = DB::table('book_read')->insert(
				['book_id' => $id,'user_id' => $userId ,'read_date' => date('Y-m-d h:i:s')]
			 );
		 return redirect('readbook/id/'.$id);  
		 return view('bookprofile.read'); 
	}
	
}
?>
