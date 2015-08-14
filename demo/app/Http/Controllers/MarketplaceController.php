<?php  

namespace App\Http\Controllers;
use Session;
use DB;

class MarketplaceController extends Controller 
{
	public function _construct(){
		$this->middelware('guest');
	}
	public function index($id){
		
		 if (Session::has('lang') || Session::has('user_id')) {
				if(Session::has('lang')){
					$value = Session::get('lang');
					Session::put('user_id', $value);
				}
				 $query = DB::table('book');
				 $query->join('users', 'book.user_id', '=', 'users.id');
				 if(isset($_GET['searchbar'])){
					$searchBar = $_GET['searchbar'];
					$query->where('book.read_type', ' LIKE ', "%".$_GET['searchbar']."%");
				}else{ $searchBar = '';  } 
				$result = $query->get();
				$userId = Session::get('user_id');
				$newsData=DB::table('News')
				     ->join('users', 'News.user_id', '=', 'users.id')
				     ->where('user_id',$userId)
					 ->get();
				$allBookdata=DB::table('book')
				     ->join('users', 'book.user_id', '=', 'users.id')
					 ->where('book.id','!=',$id)
					 ->get();
				$data=DB::table('book')
				     ->join('users', 'book.user_id', '=', 'users.id')
					 ->where('book.id',$id)
					->first();
				$likeCount=DB::table('book_like')
				     ->select(array(DB::raw('COUNT(book_like.id) as count')))
					 ->where('book_like.book_id',$id)
					->first();
				$commentCount=DB::table('book_comment')
				     ->select(array(DB::raw('COUNT(book_comment.id) as count')))
					 ->where('book_comment.book_id',$id)
					->first();
				$readCount=DB::table('book_read')
				     ->select(array(DB::raw('COUNT(book_read.id) as count')))
					 ->where('book_read.book_id',$id)
					->first();
				$commentDetail=DB::table('book_comment')
				     ->join('users', 'book_comment.comment_user_id', '=', 'users.id')
				     ->join('book', 'book_comment.book_id', '=', 'book.id') 
					 ->where('book_comment.book_id',$id)
					 ->get();
				return view('marketplace.index', ['data' => $result, 'newsData' =>$newsData,'allBookdata' =>$allBookdata,'bookDetail' => $data, 'likeCount' =>$likeCount, 'commentCount' =>$commentCount, 'readCount' =>$readCount, 'commentDetail' =>$commentDetail]); 
		}else{
			 return view('signup.login');
		 }
   }
	
	public function suffort(){
		
		 return view('marketplace.suffort');
	}
	public function announcement(){
		
		 return view('event.announcement');
	}
	public function future(){
		
		 return view('event.evenfuture');
	}
	public function interviewdetail(){
		
		 return view('event.interviewdetail');
	}
	
}
?>
