<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Main</title>
<script src="{{ URL::asset('public/js/jquery-1.11.2.min.js') }}"></script>
<link rel="stylesheet" href="{{ URL::asset('public/css/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ URL::asset('public/css/style.css') }}" /> 
</head>
	 <div class="login_text">
	 <?php if (Session::has('user_id')) {?> 
		 <a href="{{ URL::asset('index.php/logout') }}">Logout</a>
	 <?php }else{?>
		 <a href="{{ URL::asset('index.php/login') }}">Login</a>
	 <?php }?>
  </div>
			@yield('content')
		
</html>
