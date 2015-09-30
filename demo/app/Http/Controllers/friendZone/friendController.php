<?php namespace App\Http\Controllers\friendZone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
	
class friendController extends Controller{

    public function processRequest(Request $request){
        $sign = $request->input('sign');
        if( $sign =='agree' ){
            echo "to_id: ".session('userId')." from_id: ".$request->input('id');            
            DB::insert('insert into friends (friend_one, friend_two, book_id, friend_type, created_at) values (?, ?, ?, ?, ?)', [session('userId'),$request->input('id'),'0','defaultFriends',date("Y-m-d H:i:s")]); 
            DB::insert('insert into friends (friend_one, friend_two, book_id, friend_type, created_at) values (?, ?, ?, ?, ?)', [$request->input('id'),session('userId'),'0','defaultFriends',date("Y-m-d H:i:s")]); 
            DB::delete('delete from instancerequest where from_id =? and to_id=?',[$request->input('id'),session('userId')]);
           
        }
        else if( $sign =='disagree' ){
            DB::delete('delete from instancerequest where from_id =? and to_id=?',[$request->input('id'),session('userId')]);
        }
        else if( $sign == 'ignore' ){
            DB::update('update instancerequest set mark = 1 where from_id=? and to_id=?', [$request->input('id'),session('userId')]);            
        }
        else{
            echo " no such sign!"; 
        }
        return;
    }
    public function checkRequest(){
        $checkRequest = DB::select('select * from instancerequest where to_id=? and mark=0',[ session('userId') ]);
        $getMsg = DB::select('select * from currentconversation where to_id=? order by created_at',[ Session('userId') ]);
        if( sizeof($getMsg)>0 ){
            $friendName = DB::select('select username from users where id= ?',[ $getMsg[0]->from_id ]);
            $return['requestType'] = 'currentMsg';
            $return['friendName'] = $friendName[0]->username;
            $return['friendId'] = $getMsg[0]->from_id;
            //$return[''];
            echo json_encode($return);
            return;
        }
        else if( sizeof($checkRequest)>0 && $checkRequest[0]->mark ==0){
            //$name ="";
            $friendName= DB::select('select username from users where id= ?',[ $checkRequest[0]->to_id ]);  
            if( $checkRequest[0] -> requestType =="addFriend" ){
                $return['name'] = $friendName[0]->username;
                $return['msg'] = $checkRequest[0] -> requestMSG;
                $return['friendId'] = $checkRequest[0]->from_id;
                $return['requestType'] = $checkRequest[0]->requestType;
                echo json_encode($return);
                return;
            }
        }
        echo "";
        return;
    }
    public function sendGiftRequest(Request $request){        
        DB::insert('insert into gift_received (userId, giftId, fromId,  created_at) values (?, ?, ?, ?)', [session('friendId'),$request->input('giftId'),session('userId'),date("Y-m-d H:i:s")]); 
        echo "your gift is sent!";
    }
    public function sendGift(){
        $gifts = DB::select('select * from gift');   
        $giftReturn = array(array());
        for( $i=0;$i<sizeof($gifts);$i++ ){
            $giftReturn[$i]['id']=  $gifts[$i]->id;
            $giftReturn[$i]['name'] = $gifts[$i]->name;
            $giftReturn[$i]['price'] = $gifts[$i]->price;
            $giftReturn[$i]['content'] = $gifts[$i]->content;
            $giftReturn[$i]['image'] = url($gifts[$i]->image);
        }
        echo json_encode($giftReturn);
    }
	public function initiateFriendZone($userId){
		session()->regenerate($userId);
		Session(['userId'=>$userId]);
		$username = DB::select('select username from users where id=?',[ $userId ])[0]->username;
		Session(['username' => $username]);
		return $this ->clickFriendZone( session('userId') );
	}
    
	public function personalPage(Request $request){
        $return = array(array(array()));
        $comments = DB::select('select * from comments where userId = ? order by created_at DESC',[ session('friendId')]);    
        
         $works = DB::select('select * from books where author_id = ? order by updated_at DESC',[ session('friendId')]); 
        $gift_received = DB::select('select * from gift_received where userId = ? order by created_at DESC',[  session('friendId')]); 
        for($i =0; $i<sizeof($comments); $i++){
            $return['comments'][$i]['content'] = $comments[$i] -> Content;
            $return['comments'][$i]['comment'] = $comments[$i] -> Comment;
            $return['comments'][$i]['created_at'] = $comments[$i] -> created_at;
            $bookTitle = DB::select('select title from books where id = ?' ,[$comments[$i]->BookId]);
            $return['comments'][$i]['title']=$bookTitle[0]->title;
        }
        for($i =0;$i<sizeof($works);$i++ ){
            $return['works'][$i]['title']= $works[$i]->title;
            $return['works'][$i]['image']= url($works[$i]->image);
            $return['works'][$i]['updated_at']=$works[$i]->updated_at;
            $return['works'][$i]['num_read']=$works[$i]->num_read;
            $return['works'][$i]['num_comment']=$works[$i]->num_comment;
        }
        for($i=0;$i<sizeof($gift_received);$i++){
            $gift = DB::select('select * from gift where id = ?' ,['1'] );
            
            $return['gift'][$i]['name']=$gift[0]->name;
            $return['gift'][$i]['content']=$gift[0]->content;
            $return['gift'][$i]['image']= url($gift[0]->image);
        }
        echo json_encode($return);
        //echo 'hello World';
	}
    
	public function addFriend(Request $request){
        //Session('userId')
        //Session('friendId')
        $checkIfFriend = DB::select('select * from friends where friend_one = ? and friend_two=?',[Session('userId'),Session('friendId')]);	
        $friendType="";
        for($i =0; $i < sizeof($checkIfFriend);$i++ ){
            $friendType .= $checkIfFriend[$i]->friend_type;
            if( $checkIfFriend[$i]->friend_type=='defaultFriends' ){
                echo 'you already are friends';
                return;
            }
        }
        //echo now();
        DB::insert('insert into instancerequest (requestType, requestMSG, from_id, to_id, mark, created_at) values (?, ?, ?, ?, ?, ?)', ['addFriend', $request->input('msg'), Session('userId'), Session('friendId'), 0, date("Y-m-d H:i:s")]);
        echo 'request was sent: userId is '.Session('userId').' friendId is '.Session('friendId'); 
        return;
	}
	public function saveEdit(Request $request){
		//DB::update('update friends set nick_name=? where (friend_one=? and friend_two=?) or ( friend_one =? and friend_two=?)', [$request->input('editName'),session('userId'),session('friendId'),session('friendId'),session('userId') ]);
		DB::update('update friends set nick_name=? where friend_one=? and friend_two=?', [$request->input('editName'),session('userId'),session('friendId') ]);
		echo $request->input('editName');
	}
    
	public function clickFriendZone($userId=1){
		$var = "hello world";
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
			$commentsIdStore = DB::select('select * from comments where BookId ='. $friends[$i]->book_id.' and userId='.$friends[$i]->friend_two.' order by created_at');
			if( $commentsIdStore != NULL ){
				$friends_param[$i]['commentsContent'] = $commentsIdStore[0] -> Comment;
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