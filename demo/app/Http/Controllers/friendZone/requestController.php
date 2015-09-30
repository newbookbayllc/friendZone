<?php namespace App\Http\Controllers\friendZone;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class requestController extends Controller {
    public function startConversation($sign, $friendId){
        if($sign =="start"){
        $conversation = DB::select('select * from instanceconversation where (from_id =? and to_id=?) or (from_id =? and to_id =?) order by created_at',[session('userId'),$friendId,$friendId, session('userId')]);
        $userName = DB::select('select username from users where id= ?',[session('userId')]);
        $friendName = DB::select('select username from users where id=?',[$friendId]);
        $userId = session('userId');
        $friendId = $friendId;
        return view( 'friendzone.conversation',compact('conversation','userName','friendName','userId','friendId'));
        }
        else if( $sign =="ignore"){
            $getMsg = DB::select('select * from currentconversation where to_id=? order by created_at',[ session('userId')]); 
            DB::insert('insert into instanceconversation (from_id, to_id, content, created_at) values (?, ?, ?, ?)', [$getMsg[0]->from_id ,$getMsg[0]->to_id,$getMsg[0]->content,date("Y-m-d H:i:s")]); 
            DB::delete('delete from currentconversation where id =?',[$getMsg[0]->id]);                 echo "ignored";
            return;
        } 
    }
    
    public function showConversation(){
        $conversation = DB::select('select * from instanceconversation where (from_id =? and to_id=?) or (from_id =? and to_id =?) order by created_at',[session('userId'),session('friendId'),session('friendId'), session('userId')]);
        $userName = DB::select('select username from users where id= ?',[session('userId')]);
        $friendName = DB::select('select username from users where id=?',[session('friendId')]);
        $userId = session('userId');
        $friendId = session('friendId');
        //echo 'msg';
        return view( 'friendzone.conversation',compact('conversation','userName','friendName','userId','friendId'));
    }
    
    public function sendMsg(Request $request){
        //DB::insert('insert into instanceconversation (from_id, to_id, content, created_at) values (?, ?, ?, ?)', [$request->input('userId'),$request->input('friendId'),$request->input('msg'),date("Y-m-d H:i:s")]);
        DB::insert('insert into currentconversation (from_id, to_id, content, created_at) values (?, ?, ?, ?)', [$request->input('userId'),$request->input('friendId'),$request->input('msg'),date("Y-m-d H:i:s")]);        
    }
    
    public function receiveMsg(Request $request){
        $getMsg = DB::select('select * from currentconversation where to_id=? and from_id=? order by created_at',[$request->input('userId'), $request->input('friendId')]);
        $length = sizeof($getMsg);
        $return = array(array()); 
        if($length >0){
            for($i =0; $i < $length; $i++){
                $return[$i]['msg'] = $getMsg[$i]->content;
                //$return[$i]['from_id'] = $getMsg[$i] -> from_id;
                $return[$i]['time'] =$getMsg[$i]->created_at;
                DB::insert('insert into instanceconversation (from_id, to_id, content, created_at) values (?, ?, ?, ?)', [$getMsg[$i]->from_id ,$getMsg[$i]->to_id,$getMsg[$i]->content,$getMsg[$i]->created_at ]);
                DB::delete('delete from currentconversation where id =?',[$getMsg[$i]->id]);            
            }
            echo json_encode($return); 
            return;
        }
        return;
    }
}
?>