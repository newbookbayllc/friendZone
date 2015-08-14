<?php  

namespace App\Http\Controllers;
use DB;
use App\Http\Controllers\Controller;
use App\Events\UserRegistered;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
//use Symfony\Component\HttpFoundation\Session\Session;
use Session;
use Mail;
class SignupController extends Controller 
{
	public function _construct(){
		$this->middelware('guest');
	}
	public function signupstep1(){
		
		if (!Session::has('lang') && !Session::has('user_id')) {
		
		 if(isset($_POST['read_submit'])){
			 
			  $readType=$_POST['read_type'];
			  $value = implode(',',$readType);
			 // print_r($value);die;
			 $id = DB::table('users')->insertGetId(
				['read_type' => $value]
			 );
			 session()->regenerate(); 
			 //Session::put('userid', $id);
			 Session::put('lang', $id);
			 return redirect('signup2');
		 }
		 return view('signup.first');
		
		}else{
			return view('stash.main');
		}
	}
	public function signupstep2(){
		
		 
               if (Session::has('user_id')) {
                     return view('stash.main'); 
               }else{

                   if(isset($_POST['signup'])){
			  
			  $email = $_POST['email'];
			  $username = $_POST['username'];
			  $password = $_POST['password'];
			  $organization = $_POST['organization'];
			  DB::table('users')
					->where('id',  Session::get('lang'))
					->update(['email' => $email,'username'=>$username,'password'=>md5($password),'oragnization'=>$organization]
			 );
			 $headers = "From: webmaster@example.com" . "\r\n" .
			 $bodyText = 'Welcome To Newbbay <br> access account go to link below';
			 $bodyText = $bodyText.'<p class="lead"><a href="{{ URL::asset("index.php/signup4") }}">Confirm Link</a></p>';
			 mail($email,"Confirmation Email",$bodyText,$headers);  
			 
			 return redirect('signup3'); 
		  }
		  return view('signup.second');
	}   }
	public function signupstep3(){
		
		 return view('signup.third');
	}
	public function signupstep4(){
		
		 return view('signup.four');
	}
	public function login(){
		
		if(isset($_POST['Login'])){
			$email=$_POST['email'];
			$password=$_POST['password'];
			$users = DB::table('users')
					->where('username', $email)->where('password',md5($password))->first();
			if($users){
				 Session::put('user_id', $users->id);
				return redirect('dashboard')->with('message', 'Login Success'); 
			}else{
				return redirect('login')->with('message', 'Login Failed');
			}
			
		}else{
			return view('signup.login'); 
		}
		
	}
	public function logout(){
		
		Session::flush();
		return view('signup.login'); 
	}
	
	
	
	
}
?>
