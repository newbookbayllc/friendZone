<?php namespace App\Http\Controllers\friendZone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class friendController extends Controller{
	public function initiateFriendZone($userId){
		session()->regenerate($userId);
		Session(['userId'=>$userId]);
		$username = DB::select('select username from users where id=?',[ $userId ])[0]->username;	
		Session(['username' => $username]);
		return $this ->clickFriendZone( session('userId') );
	}
	public function saveEdit(Request $request){
		//DB::update('update friends set nick_name=? where (friend_one=? and friend_two=?) or ( friend_one =? and friend_two=?)', [$request->input('editName'),session('userId'),session('friendId'),session('friendId'),session('userId') ]);
		DB::update('update friends set nick_name=? where friend_one=? and friend_two=?', [$request->input('editName'),session('userId'),session('friendId') ]);
		echo $request->input('editName');
	}
	public function personalPage(){
		echo 'hello';
	}
	public function clickFriendZone($userId=1){
		//$friends = DB::select('select * from friends where friend_one=? or friend_two = ? order by friend_type DESC',[$userId, $userId]);
		$friends = DB::select('select * from friends where friend_one=? order by friend_type DESC',[$userId]);
		$commentsIdStore;
		$friends_param = array(array());
		
		for( $i=0; $i<sizeof($friends); $i++ ){
			//if( $friends[$i]->nick_name !="" ){
				$friends_param[$i]['nick_name'] = $friends[$i]->nick_name;
			//}
			if( $friends[$i]->friend_one == $userId ){
				$friends_param[$i]['myFriendId'] = $friends[$i]->friend_two;
				$friends_param[$i]['myFriendName'] = DB::select('select username from users where id=?',[ $friends[$i]->friend_two ])[0]->username;	
			}
			else{
				$friends_param[$i]['myFriendId'] = $friends[$i]->friend_one;
				$friends_param[$i]['myFriendName'] = DB::select('select username from users where id=?',[ $friends[$i]->friend_one ])[0]->username;	
			}
			$friends_param[$i]['myFriendType'] = $friends[$i]->friend_type;
			$commentsIdStore = DB::select('select * from comments where BookId ='. $friends[$i]->book_id.' order by created_at');
			if( $commentsIdStore != NULL ){
				$friends_param[$i]['commentsContent'] = $commentsIdStore[0] -> Content;
				$friends_param[$i]['commentsDate'] = $commentsIdStore[0] -> created_at;
			}
			else{
				$friends_param[$i]['commentsContent'] = '';
				$friends_param[$i]['commentsDate'] = '0000-00-00 00:00:00';
			}
		}
		return view('friendZone.friends',['friends'=>$friends_param]);
		//return $friends_param;
		// it prints the two dementional array
		/*
		for($i=0;$i<sizeof($friends_param);$i++){
			echo $friends_param[$i]['myFriendName'];
			echo $friends_param[$i]['myFriendId'];
			echo $friends_param[$i]['myFriendType'];
			echo "       ";
		}
		*/
		
	}
	public function showUserInfo(Request $request){
		$userId = $request -> input('id');
		Session(['friendId' =>$userId]);
		//return 'friendId is: '.$userId;
		$userInfo = DB::select('select * from users where id=?',[$userId]);
		$newestComment = DB::select('SELECT Content FROM comments where userId=? ORDER BY created_at DESC limit 1',[$userId]);
		$userData = [];
		$userData['id'] = $userInfo[0]->id;
		//$userData['username'] = $userInfo[0]->username;
		$userData['friendName'] = $userInfo[0]->username;
		$userData['accountNumb'] = $userInfo[0] ->activation_code;	
		$userData['email'] = $userInfo[0]->email;
		$userData['timezone'] = $userInfo[0]->timezone;
		$userData['created_at'] = $userInfo[0]->created_at;
		//echo json_encode($hongguo ;
		if( isset ($newestComment[0])  ) 
			$userData['newestComment'] = $newestComment[0] ->Content;
		else{
			$userData['newestComment'] = 'no new comment';
		}
		echo json_encode($userData);
		//die;
		//return "this is the data";
	}

}
?>